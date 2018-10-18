<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 12/10/2018
 * Time: 11:38
 */

namespace App\Helpers;


class Articlehelper
{
    static function formatData($data)
    {
        return $data->format('Y-m-d');
    }
}