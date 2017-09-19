<?php

namespace onestopcore\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use onestopcore\Http\Controllers\Controller;
use onestopcore\Chart;
use onestopcore\ChartDetail;
use onestopcore\Balance;
use onestopcore\Transaction;
use onestopcore\TransactionDetail;
use Validator;

class ApiTransactionPayment extends Controller
{
    /**
     * Create the transaction payment
     * @param Request $request
     * @return JsonResponse: transaction details
     */
    public function create(Request $request)
    {
        // run the validation
        $validator = Validator::make($request->all(), $this->transactionFieldRules());
        if ($validator->fails()) {

            return response()->json([
                'error' => true,
                'message'   => 'Invalid parameters ',
            ], 400);
        }

        $paymentCode = $request->input('payment_code');
        $chartId = $request->input('chart_id');
        $userId = Auth::id();
        $transaction = [];

        // get chart
        $chart = $this->getUserChart($chartId, $userId);
        if (!$chart)
        {
            return response()->json([
                'error' => true,
                'message'   => 'The chart is not exist',
            ], 400);
        }


        // payment with paypal is not supported yet
        if ($paymentCode !== '02')
        {
            return response()->json([
                'error' => true,
                'message'   => 'Payment with paypal is not supported yet',
            ], 400);
        }

        // do wallet payment
        if ($paymentCode === '02')
        {
            // Create the transaction
            $transaction = $this->walletPayment($userId, $chart, $paymentCode);
        }

        return $transaction;
    }

    /**
     * Get current user's chart
     * @param $chartId
     * @param $userId
     * @return mixed
     */
    private function getUserChart($chartId, $userId)
    {
        $chart = Chart::with('details.product')
            ->where([
                'user_id' =>$userId,
                'is_active' => true,
                'id' => $chartId])
            ->first();

        if ($chart) {
            $chart->totals = $chart->getTotals();
        }

        return $chart;
    }

    /**
     * Get current user's balance
     * @param $userId
     * @return balance object
     */
    private function getUserBalance($userId)
    {
         return Balance::where(['user_id' => $userId])->first();
    }

    /**
     * The transaction with wallet payment.
     * This will reduce current balance account from user's wallet.
     * @param $userId
     * @param $chart
     * @param $paymentCode
     * @return \Illuminate\Http\JsonResponse
     */
    private function walletPayment($userId, $chart, $paymentCode)
    {
        $balance = $this->getUserBalance($userId);

        if ($balance->balance < $chart->totals->total_price)
        {
            return response()->json([
                'error' => true,
                'message'   => 'Insufficient Balance',
            ], 400);
        }

        // create the transaction
        $transaction = $this->createTransaction($userId, $paymentCode, $chart->totals->total_price);

        // create transaction detail
        $transactionDetail = $this->createTransactionDetail($transaction->id, $chart->details);

        if ($transactionDetail)
        {
            // reduce the balance
            $balance->balance = $balance->balance - $chart->totals->total_price;
            $balance->save();

            // cleaning up the chart
            $this->cleaningUpTheChart($chart->id);

            return response()->json($this->getUserTransaction($transaction->id), 200);
        }

        return response()->json([
            'error' => true,
            'message'   => 'Payment failed. Something went wrong!',
        ], 400);
    }

    /**
     * Create the transaction
     * @param $userId
     * @param $paymentCode
     * @param $totalPayment
     * @param $voucherCode
     * @return Transaction
     */
    private function createTransaction($userId, $paymentCode, $totalPayment, $voucherCode = null)
    {
        $transaction = new Transaction([
            'user_id' => $userId,
            'payment_code' => $paymentCode,
            'total_payment' => $totalPayment,
            'voucher_code' => $voucherCode
        ]);

        $transaction->save();

        return $transaction;
    }

    /**
     * Create transaction details
     * @param $transactionId
     * @param $chartDetails
     * @return mixed
     */
    private function createTransactionDetail($transactionId, $chartDetails)
    {
        $transactionDetails = array();

        foreach ($chartDetails as $detail)
        {
            array_push($transactionDetails, [
                'transaction_id' => $transactionId,
                'product_id' => $detail->product_id,
                'number_of_items' => $detail->number_of_items,
                'price' => $detail->product->price,
            ]);
        }
        return TransactionDetail::insert($transactionDetails);
    }

    /**
     * Get the latest user's transaction
     * @param $transactionId
     * @return mixed
     */
    private function getUserTransaction($transactionId)
    {
        return Transaction::with('details.product')->first();
    }

    /**
     * Cleaning up the chart
     * @param $chartId
     */
    private function cleaningUpTheChart($chartId)
    {
        // clean the chart detail
        ChartDetail::where(['chart_id' => $chartId])->delete();

        // clean the chart
        Chart::find($chartId)->delete();
    }

    /**
     * The transaction with paypall.
     * Currently is not supported yet.
     */
    private function paypallPayment()
    {

    }
    /**
     * Transaction field rules, used for validation
     * @return array
     */
    private function transactionFieldRules()
    {
        return [
            'chart_id' => 'required|numeric',
            'payment_code' => 'required',
            'voucher_code' => 'string|nullable'
        ];
    }
}
