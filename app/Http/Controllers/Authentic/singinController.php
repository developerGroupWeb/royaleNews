<?php

namespace App\Http\Controllers\Authentic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Authentic\SingInService;
use App\models\User;

class singinController extends Controller
{
    function create(){

        return view('authentic.singin');
    }

    function store(Request $request){

        $row = User::where(['email' => $request->input('email')])->first();

        $error = '';

        if(isset($row)){

            if(password_verify($request->input('password'), $row->password)){

                // Verify if check remember

            }else{

                $error = 'Password incorrect';
            }

        }else{

            $error = 'Email incorrect';
        }

        echo $error;
    }
}
