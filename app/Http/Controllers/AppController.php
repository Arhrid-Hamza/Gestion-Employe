<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
        $usertype = auth()->user()->usertype;
        if($usertype == '1'){
            return view('home');
        }
        else if($usertype == '0'){
            return view('user/home');
        }
        else{
            abort(401);
        }
    }
    
}

