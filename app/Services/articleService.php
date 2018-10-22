<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 01/10/2018
 * Time: 17:06
 */

namespace App\Services;
use App\models\Article;

class articleService
{
    static function dataArticle($rubrics)
    {
        return $article = Article::where('rubric', $rubrics)
                                 ->get();
    }
    static function dataTheFirstTwo($rubrics)
    {
         return $firstTwo = Article::where('rubric', $rubrics)
                                  ->where('position', '!=', 0)
                                  ->orderBy('start_at')
                                  ->skip(0)
                                  ->take(2)
                                  ->get();
        //dd($firstTwo);
    }
    static function dataTheFirstTree($rubrics)
    {
        return $firstTree = Article::where('rubric', $rubrics)
                                  ->where('position', '!=', 0)
                                  ->orderBy('start_at')
                                  ->skip(2)
                                  ->take(3)
                                  ->get();
        //dd($firstTree);
    }
    static function dataUne($rubrics)
    {
        return $une = Article::where('rubric', $rubrics)
                             ->where('position', 0)
                             ->orderBy('start_at')
                             ->skip(0)
                             ->take(1)
                             ->get();
        //dd($une);
    }
}