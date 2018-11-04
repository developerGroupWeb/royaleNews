<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function authentic($login){

        if($login == 'singin'){
            return view('authentic.singin');
        }elseif($login == 'singup'){
            return view('authentic.singup');
        }else
            return view('404');
    }
}
