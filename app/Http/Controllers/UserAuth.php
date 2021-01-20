<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use Illuminate\Cookie\CookieJar;

class UserAuth extends Controller
{

    function userlogin(Request $request){

           $data =  $request->input();
           $privatekey = config('app.token_ml');
           $jwt = JWT::encode($data, $privatekey);
            $request->session()->put('user',$data['user']);
            return redirect('/');
    }
    
    function userlogut(){
        if( session()->has('user'))
        {
            session()->pull('user');
        }
        return redirect('/login');
    }   
    function clecklogin(){
        if(session()->has('user'))
        {
            return redirect('/');
        }
        return view('login');
    }   
    function admin(){
        if(session()->has('user'))
        {
            return view('admin');
        }
        else
        {return redirect('login');}
    }   
}
