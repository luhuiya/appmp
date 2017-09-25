<?php

namespace onestopcore\Http\Controllers\Api;

use Illuminate\Http\Request;
use onestopcore\Http\Controllers\Controller;
use onestopcore\Transaction;
use Illuminate\Support\Facades\Auth;

class ApiTransactions extends Controller
{
    /**
     * Get the transaction by id
     * @param $transactionId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getById($transactionId)
    {
        $transaction = Transaction::with('details.product')->find($transactionId);
        if ($transaction)
        {
            $transaction->totals = $transaction->getTotals();
            return response()->json($transaction, 200);
        }

        return response()->json([
            'error' => true,
            'message'   => 'The transaction is not exist',
        ], 400);
    }

    // Get all transaction with pagination
    public function getAll()
    {
        $transactions = Transaction::with('details.product')
            ->where(['user_id' => Auth::id()])
            ->paginate(3);

        return $transactions;
    }
}
