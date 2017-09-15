<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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

    public function getTotals()
    {
        $totals = DB::table('chart_details')
            ->join('charts', 'chart_details.chart_id', '=', 'charts.id')
            ->join('product', 'chart_details.product_id', '=', 'product.id')
            ->select(
                DB::raw('SUM(chart_details.number_of_items) as total_items, SUM(product.price * chart_details.number_of_items) as total_price')
            )
            ->where('chart_details.chart_id', $this->id)
            ->get();

        return $totals[0];
    }
}
