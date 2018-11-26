<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 25/11/2018
 * Time: 17:30
 */

namespace App\Services\Authentic;

use App\models\User;

class SingUpService
{
    static function storeService($request){

        return User::create([
            'civility' => $request->input('civility'),
            'name'     => $request->input('name'),
            'surname'  => $request->input('surname'),
            'email'    => $request->input('email'),
            'password' => self::hashPassword($request->input('password')),
            'news'     => $request->input('news'),
            'partner'  => $request->input('partner'),
        ]);
    }

    static function hashPassword($var){

        return bcrypt($var);
    }
}