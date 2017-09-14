<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;
use onestopcore\ChartDetail;

class Chart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total_price', 'total_products', 'is_active', 'user_id'
    ];

    /**
     * Get the details
     */
    public function details()
    {
        return $this->hasMany('onestopcore\ChartDetail', 'chart_id');
    }

    public function getTotalItems()
    {
        return $this->hasMany('onestopcore\ChartDetail', 'chart_id')
            ->selectRaw('SUM(number_of_items) as total, chart_id')
            ->groupBy('chart_id');
    }

    public function getTotalPrice()
    {
        return ChartDetail::with('product')
            ->selectRaw('SUM(price) as total_price, chart_id')
            ->groupBy('chart_id')
            ->get();
    }
}
