<?php

namespace onestopcore;

use Illuminate\Database\Eloquent\Model;

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
}
