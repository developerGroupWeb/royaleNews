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
        return $article = Article::where('rubric', $rubrics)->get();
    }
    static function dataUne($rubrics)
    {
        return $une = Article::where('rubric', $rubrics)->orderBy('start_at')->skip(0)->take(1)->get();
    }
}