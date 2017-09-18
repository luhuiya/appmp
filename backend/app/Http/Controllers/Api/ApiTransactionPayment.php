<?php

namespace onestopcore\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use onestopcore\Http\Controllers\Controller;
use onestopcore\Chart;
use Validator;

class ApiTransactionPayment extends Controller
{
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

        // get chart
        $chart = $this->getUserChart($request->input('chart_id'));
        if (!$chart)
        {
            return response()->json([
                'error' => true,
                'message'   => 'The chart is not exist',
            ], 400);
        }

        // payment with paypal is not supported yet
        if ($request->input('payment_code') !== '02')
        {
            return response()->json([
                'error' => true,
                'message'   => 'Payment with paypal is not supported yet',
            ], 400);
        }

        // not complete yet, just return the chart
        return response()->json($chart, 200);
    }

    private function getUserChart($chartId)
    {
        $chart = Chart::with('details')
            ->where([
                'user_id' => Auth::id(),
                'is_active' => true,
                'id' => $chartId])
            ->first();

        if ($chart) {
            $chart->totals = $chart->getTotals();
        }

        return $chart;
    }

    private function walletPayment()
    {

    }

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
