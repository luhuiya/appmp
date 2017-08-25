<?php

namespace onestopcore\Http\Controllers\Api;

use Illuminate\Http\Request;
use onestopcore\Http\Controllers\Controller;
use Validator;
use onestopcore\Balance;
use onestopcore\User;

class ApiBalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balance = Balance::get();
        
        return $this->successResponse('OK', $balance);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data, $user)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {         
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = $request->all();
        $validator = $this->validator($data);

        if ($validator->fails()) {
            return array(
                'code' => 201,
                'message' => 'Error while edit balance, please try again or contact adminstrator. '
            );
        }
        
        $balance = $this->update($request->all(), $request->user());
        return $this->successResponse('Edit balance is successful.', $balance);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data, $user)
    {   
        $balance = Balance::where(['user_id' => $user->id])->firstOrFail();
        $balance->last_balance = $balance->balance;
        $balance->balance = $data['balance'] + $balance->last_balance;
        $balance->save();
        return $balance;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            // 'user_id' => 'required',
            'balance' => 'required',
        ]);
    }
}
