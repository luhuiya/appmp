<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class ProductPreview extends Model
{    
    use HasApiTokens, Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product_preview';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
     public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'link'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'product_id', 'created_at', 'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo('onestopcore\Product');
    }
}
