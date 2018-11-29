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
    static function dataForIntervalFollowingPosition($position, $rubric, $take){
        return Article::where(['position' => $position, 'rubric' => $rubric])
                        ->orderBy('created_at', 'desc')
                        ->take($take)
                        ->get();
    }

}