<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Review extends Model
{    
    use HasApiTokens, Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'review';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'product_id', 'user_id', 'description', 'rating'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    public function product()
    {
        return $this->belongsTo('onestopcore\Product');
    }

    public function user()
    {
        return $this->belongsTo('onestopcore\User');
    }
}
