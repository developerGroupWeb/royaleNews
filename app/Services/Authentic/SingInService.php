<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 25/11/2018
 * Time: 18:40
 */

namespace App\Http\Services\Authentic;
use App\models\User;


class SingInService
{

    static function checkStore($request){

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