<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'transaction_id',
        'product_id',
        'number_of_items',
        'price',
    ];

    /**
     * Hide the timestamp
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Get the transaction belongs to.
     */
    public function transaction()
    {
        return $this->belongsTo('onestopcore\Transaction');
    }

    /**
     * Get the product.
     */
    public function product()
    {
        return $this->belongsTo('onestopcore\Product', 'product_id');
    }
}
