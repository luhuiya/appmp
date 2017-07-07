<?php

namespace onestopcore\Http\Controllers;

use Illuminate\Http\Request;
use onestopcore\Http\Controllers\Controller;
use Validator;
use onestopcore\Review;
use onestopcore\User;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Review::with('product','user')->get();
        
        return $this->successResponse('OK', $review);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data, $user)
    {
        // return array(
        //     'product_id' => $data['product_id'],
        //     'user_id' => $user_id,
        //     'description' => $data['description']
        // );
        // echo $user_id;die();
        return Review::create([
            'user_id' => $user->id,
            'product_id' => $data['product_id'],
            'description' => $data['description'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                       
       $validator = $this->validator($request->all());

       if ($validator->fails()) {
           return array(
               'code' => 201,
               'message' => 'Error while add review, please try again or contact adminstrator. '
           );
       }
       
       $review = $this->create($request->all(), $request->user());
       return $this->successResponse('Add review is successful.', $review);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
            'product_id' => 'required',
            'description' => 'required',
        ]);
    }
}
