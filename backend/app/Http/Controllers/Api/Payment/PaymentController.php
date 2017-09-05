<?php

namespace onestopcore\Http\Controllers\Api\Payment;


use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use Paypalpayment;

use Validator;

Use DB;

Use onestopcore\Http\Controllers\Lib\Payment\TransactionData;

use onestopcore\PaymentMethod;

use onestopcore\Product;

use onestopcore\TransPayment;

use onestopcore\Http\Controllers\Controller;


class PaymentController extends Controller
{
	
	
	/**
     * Get the parameters validation rules.
     *
     * @return array
     */
	
	protected function fieldRules()
	{
		
		return [
		'id' => 'required',
		'pm_code' => 'required',
        'target' => 'required' 
		];
		
	}
	
	
	
	/**
    * Create Summary Payment
     * @return array
     * @param Request $request
     *
     */
	
	public function create(Request $request) 
	{
		
		$input = $request->input();
		
		
		$validator = Validator::make($request->all(), $this->fieldRules());
		
		if ($validator->fails()) {
			
			return array (
			'code' => '200',
			'error' => true,
			'message'   => 'Invalid parameters ',
			);
			
		}
		
		
		$transactionData = new TransactionData;
		
		$transactionData->product_id = $request->input('id');
		
		$transactionData->payment_method = $request->input('pm_code');
		
		$transactionData->payment_target = $request->input('target');
		
		$transactionData->voucher_code = $request->input('vouchercode');
				
		/* get product or voucher details data */
		
		$detailsData = $transactionData->getDetailsData();		
		
		if($detailsData['error']){
			
			return array (
			'code' => '404',
			'error' => true,
			'message'   => 'Product Not Found',
			);
			
		}
				
		/* -- end -- */		
				
		
		$response = $transactionData->_createPayment();
		
		
		return $response;
		
	}
	
	
}


