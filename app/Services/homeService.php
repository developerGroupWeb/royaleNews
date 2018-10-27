<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 27/10/2018
 * Time: 07:42
 */

namespace App\Services;
use App\models\Article;

class homeService
{
    static function dataForIntervalFollowingPosition($position, $skip, $take){
        return Article::where('position', $position)
                        ->orderBy('start_at')
                        ->skip($skip)
                        ->take($take)
                        ->get();
    }
}