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
       $balance = Balance::where(['user_id' => $user->id])->firstOrFail();
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
       $user = User::find($request->user()['id']);

       if($request['name'] != ''){
           $user->name = $request['name'];
       }

       if($request['email'] != ''){
           if ($this->emailValidator($request->all())->fails()) {
               return array(
                   'code' => 201,
                   'message' => 'Error while change profile, please try again or contact adminstrator. '
               );
           } else {
               $user->email = $request['email'];
           }
       }

       if($request['old_password'] != '' && $request['new_password'] != ''){
           if ($this->passwordValidator($request->all())->fails()) {
               return array(
                   'code' => 201,
                   'message' => 'Error while change profile, please try again or contact adminstrator. '
               );
           } else if (Hash::check($request['old_password'], $user->getAuthPassword())) {            
                $user->password = bcrypt($request['new_password']);
            } else {
                return array(
                'code' => 201,
                'message' => 'Your Password did not matched, please try again or contact adminstrator.'
                );
            }
       }

       $user->save();

       return $this->successResponse('Profile successfully changed.');
   }

    protected function passwordValidator(array $data) {
        return Validator::make($data, [
            'old_password' => 'min:6',
            'new_password' => 'min:6',
        ]);
    }
    
    protected function emailValidator(array $data) {
        return Validator::make($data, [
            'email' => 'email|max:255|unique:users',
        ]);
    }
}
