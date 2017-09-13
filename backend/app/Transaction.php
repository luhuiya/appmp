<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'transaction_code',
        'user_id',
    ];


    /**
     * Get the user that owns the transaction.
     */
    public function user()
    {
        return $this->belongsTo('onestopcore\User');
    }
}
