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
        return Review::create([
            'user_id' => $user->id,
            'product_id' => $data['product_id'],
            'description' => $data['description'],
            'rating' => $data['rating'],
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
           return $this->failResponse('Error while add review, please try again or contact adminstrator.');
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
    public function edit(Request $request)
    {
        $data = $request->all();
        $validator = $this->validator($data);

        if ($validator->fails()) {
            return array(
                'code' => 201,
                'message' => 'Error while add review, please try again or contact adminstrator. '
            );
        }
        
        $review = $this->update($request->all());
        return $this->successResponse('Edit review is successful.', $review);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(array $data)
    {        
        $review = Review::find($data['id']);
        $review->description = $data['description'];
        $review->rating = $data['rating'];
        $review->save();
        return $review;
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

    public function find($id)
    {        
        $review = Review::with('product','user')->where('product_id', $id)->get();
        
        return $this->successResponse('OK', $review);
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'product_id' => 'required',
            'description' => 'required',
            'rating' => 'required',
        ]);
    }
}
