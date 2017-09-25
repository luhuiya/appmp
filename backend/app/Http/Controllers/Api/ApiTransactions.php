<?php

namespace onestopcore\Http\Controllers\Api;

use Illuminate\Http\Request;
use onestopcore\Http\Controllers\Controller;
use onestopcore\Transaction;

class ApiTransactions extends Controller
{
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
}
