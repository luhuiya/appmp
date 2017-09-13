<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;

class ChartDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chart_id', 'product_id', 'number_of_items'
    ];

    /**
     * Get the product
     */
    public function product()
    {
        return $this->belongsTo('onestopcore\Product');
    }
}
