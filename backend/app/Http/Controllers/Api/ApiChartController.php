<?php

namespace onestopcore\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use onestopcore\Http\Controllers\Controller;
use Validator;
use onestopcore\Product;
use onestopcore\Chart;
use onestopcore\ChartDetail;


class ApiChartController extends Controller
{
    /**
     * Add product item to the chart
     * @param Request $request
     * @return JsonResponse: the latest chart detail of user
     */
    public function add(Request $request)
    {
        // run the validation
        $validator = Validator::make($request->all(), $this->productFieldRules());
        if ($validator->fails()) {

            return response()->json([
                'error' => true,
                'message'   => 'Invalid parameters ',
            ], 400);
        }

        // get the product
        $product = Product::find($request->input('product_id'));

        // return error when the product is not found
        if (!$product)
        {
            return response()->json([
                'error' => true,
                'message'   => 'Product not found',
            ], 400);
        }

        // get the user chart
        $chart = $this->getUserChart();
        if (!$chart)
        {
            $chart = $this->createUserChart();
        }

        // get the product on existing chart

        $chartDetail = ChartDetail::where(['chart_id' => $chart->id, 'product_id' => $product->id])->first();
        if (!$chartDetail)
        {
            // save the product into chart detail
            $chartDetail = new ChartDetail([
                'chart_id' => $chart->id,
                'product_id' => $product->id,
                'number_of_items' => $request->input('number_of_items')
            ]);
        }
        else
        {
            $chartDetail->number_of_items = $chartDetail->number_of_items + $request->input('number_of_items');
        }

        $chartDetail->save();

        return response()->json($this->getUserChart(), 200);
    }


    /**
     * Get user chart
     * @return \Illuminate\Http\JsonResponse
     */
    public function getChart()
    {
        $chart = $this->getUserChart();
        return response()->json($chart, 200);
    }

    /**
     * Private function to get user chart
     * @return Latest chart of user
     */
    private function getUserChart()
    {
        $chart = Chart::with('details.product')
            ->where(['user_id' => Auth::id(), 'is_active' => true])->first();

        if ($chart)
        {
            $chart->totals = $chart->getTotals();
        }

        return $chart;
    }

    /**
     * Create the new chart for user
     * @return Chart
     */
    private function createUserChart()
    {
        $chart = new Chart([
            'is_active' => true,
            'user_id' => Auth::id()
        ]);

        $chart->save();
        return $chart;
    }

    /**
     * Product field rules, used for validation
     * @return array
     */
    private function productFieldRules()
    {
        return [
            'product_id' => 'required|numeric',
            'number_of_items' => 'required|numeric',
        ];
    }
}
