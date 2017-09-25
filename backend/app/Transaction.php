<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Transaction extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'payment_code',
        'total_payment',
        'payment_id',
        'voucher_code',
    ];

    /**
     * Hide the timestamp
     */
    protected $hidden = ['created_at', 'updated_at', 'total_payment'];

    /**
     * Get the user that owns the transaction.
     */
    public function user()
    {
        return $this->belongsTo('onestopcore\User');
    }

    /**
     * Get the details transaction
     */
    public function details()
    {
        return $this->hasMany('onestopcore\TransactionDetail', 'transaction_id');
    }

    public function getTotals()
    {
        $totals = DB::table('transaction_details')
            ->join('transactions', 'transaction_details.transaction_id', '=', 'transactions.id')
            ->select(
                DB::raw('SUM(transaction_details.number_of_items) as total_items, SUM(transaction_details.price * transaction_details.number_of_items) as total_price')
            )
            ->where('transaction_details.transaction_id', $this->id)
            ->get();

        return $totals[0];
    }
}
