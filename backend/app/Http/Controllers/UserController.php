<?php

namespace onestopcore\Http\Controllers;

use Illuminate\Http\Request;
use onestopcore\Http\Requests;
use onestopcore\Http\Controllers\Controller;
use Validator;
use onestopcore\User;
use Hash;

class UserController extends Controller
{
   public function __construct(){
      //$this->middleware('Second');
   }
   public function showPath(Request $request){
      $uri = $request->path();
      echo '<br>URI: '.$uri;
      
      $url = $request->url();
      echo '<br>';
      
      echo 'URL: '.$url;
      $method = $request->method();
      echo '<br>';
      
      echo 'Method: '.$method;
   }
   public function getUserDetails(Request $request){
       $user = $request->user();

       return $user;
   }
   public function changePassword(Request $request)
   {        
       $validator = $this->validator($request->all());
    //    $user = $request->user();
       $user = User::find($request->user()['id']);

        if ($validator->fails()) {
            return array(
                'code' => 201,
                'message' => 'Error while change password, please try again or contact adminstrator. '
            );
        }
        if (Hash::check($request['old_password'], $user->getAuthPassword() )) {            
            $user->password = bcrypt($request['new_password']);
            $user->save();
        } else {
            return array(
               'code' => 201,
               'message' => 'Your Password did not matched.'
            );
        }
    //    return $value ;
       return $this->successResponse('Password successfully changed.');
   }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'old_password' => 'required|min:6',
            'new_password' => 'required|min:6',
        ]);
    }
}
