<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;

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
        'voucher_code',
    ];

    /**
     * Hide the timestamp
     */
    protected $hidden = ['created_at', 'updated_at'];

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
}
