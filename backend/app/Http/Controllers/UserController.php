<?php

namespace onestopcore\Http\Controllers;

use Illuminate\Http\Request;
use onestopcore\Http\Requests;
use onestopcore\Http\Controllers\Controller;
use Validator;
use onestopcore\User;
use onestopcore\Balance;
use Hash;

class UserController extends Controller
{
   public function __construct() {
      //$this->middleware('Second');
   }

   public function showPath(Request $request) {
      $uri = $request->path();
      echo '<br>URI: '.$uri;
      
      $url = $request->url();
      echo '<br>';
      
      echo 'URL: '.$url;
      $method = $request->method();
      echo '<br>';
      
      echo 'Method: '.$method;
   }
   public function getUserDetails(Request $request) {
       $user = $request->user();
       $max = Balance::max('id') + 1;
       $balance = Balance::where(['user_id' => $user->id])->first();
       if($balance == null) {
           $balance = Balance::create([
            'id' => $max,
            'user_id' => $user->id,
            'balance' => 0,
            'last_balance' => 0,
            'last_usage' => date("Y-m-d")
            ]);
       }
       
       return $this->successResponse('OK.', ['user'=>$user, 'balance'=>$balance->balance]);
   }
   public function changeProfile(Request $request) {                
       $user = $request->user();

       $infoRules = [
           'name' => 'required',
           'email' => "required|email|max:255|unique:users,email,$user->id"
       ];

       $validation = Validator::make($request->all(), $infoRules);
       if ($validation->fails()) {
           return $this->successResponse($validation->errors()->first());
       }

       if($request['old_password'] != '' && $request['new_password'] != ''){
           $passwordValidation = $this->passwordValidator($request->all());
           if ($passwordValidation->fails()) {
               return response()->json(['code' => 200, 'error' => true, 'message' => $passwordValidation->errors()->first()], 200);
           } else if (Hash::check($request['old_password'], $user->getAuthPassword())) {
               $request->merge(['password' => bcrypt($request['new_password'])]);
           } else {
               return response()->json(['code' => 200, 'error' => true, 'message' => 'Your Password did not matched, please try again or contact adminstrator.'], 200);
           }
       }

       $user->update($request->all());

       return $this->successResponse('Profile successfully changed.');
   }

    protected function passwordValidator(array $data) {
        return Validator::make($data, [
            'old_password' => 'min:6',
            'new_password' => 'min:6',
        ]);
    }
}
