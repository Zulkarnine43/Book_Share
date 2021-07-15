<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_login;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    //
public function user_signup(){
    return view('frontend.user.signup');
}
  public function user_reg_db(Request $request){

     

            // $this->validate($request,[
            //     'name'=>'alpha_num|min:3|unique:farmer_registers,username',
            //     'email'=>'email|unique:farmer_registers,email',
            //     'mobile'=>['regex: /^((01|8801)[3456789])(\d{8})$/'],
            //     'password'=>[
            //         'string',
            //         'min:5',             // must be at least 5 characters in length
            //         'regex:/[a-z]/',      // must contain at least one lowercase letter
            //         'regex:/[A-Z]/',      // must contain at least one uppercase letter
            //         'regex:/[0-9]/',      // must contain at least one digit
            //     ],
            //     'password_confirm'=>'same:password'
            // ]);

            $regis = new user_login();
            $regis->name = $request->name;
            $regis->email = $request->email;
            $regis->mobile = $request->mobile;
            $regis->dob = $request->dob;
            $regis->division = $request->division;
            $regis->address = $request->address;
            $regis->gender = $request->gender;
            $regis->password = Hash::make( $request->password);

            $regis->save();

        // $data=$regis->toArray();
        // Mail::send('verification_mail',['val'=>$data],function($message) use ($data){
        //     $message->to($data['email']);
        //     $message->subject('verification_mail');
        // });

            return redirect('/');
        }

public function usr_login(){
    return view('frontend.user.login');
}

public function user_db_action(Request $request){

 if($result = user_login::where('email', $request->email)->first()){

               if (Hash::check($request->password, $result->password)) {

                    Session::put('u_name', $result['name']);

                    return redirect('/')->with('login_msg', 'Login successfully');

                }else {
                    return redirect('/user/login')->with('login_msg', 'email or password not match');
                }
         }else{
            return redirect('/user/login')->with('login_msg', 'please SignUp ');
        }
    }



}
