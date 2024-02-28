<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class data_controller extends Controller
{
    public function verify(Request $request){
        $data_email= "mustafakorejo2@gmail.com";
        $user_email= $request->email;
        if($data_email == $user_email){
            $otp = random_int(100000, 999999);
            $user = ['to' => $user_email, 'otp' => $otp];
            $data = ['user' => 'hello']; // You can pass additional data here
            
           $mail= Mail::send('mail', $data, function ($message) use ($user) {
                $message->to($user['to']);
                $message->subject($user['otp']);
            });
            if($mail){
                return view('otp',compact('otp'));
            }else{
                dd('not_work');
            }
           
        }
    }

    public function confirm(Request $request){
        $old= $request->user_otp;
        $new= $request->old_otp;
        if($old==$new){
            return view('new_pass');
        }else{
            dd('not match');
        }
    }

    public function new_pass(Request $request){
        if($request->new_pass){
            dd('done');
        }
    }
}
