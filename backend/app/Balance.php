<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'balance';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'balance', 'last_balance', 'last_usage'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'user_id', 'last_balance', 'last_usage'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
