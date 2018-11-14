<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 01/10/2018
 * Time: 17:06
 */

namespace App\Services;
use App\models\Article;

class rubricService
{
    static function foundArticle($rubrics)
    {
          return $article = Article::where(['rubric' => $rubrics]);
         //dd($article->exists());
    }
    static function backArticle($pages, $id, $slug)
    {
           return $article = Article::where([
               'rubric' => $pages,
               'id' => $id,
               'slug' => $slug,
           ]);
    }
    static function dataTheFirstTwo($rubrics)
    {
         return $firstTwo = Article::where('rubric', $rubrics)
                                  ->where('position', '!=', 0)
                                  ->orderBy('created_at')
                                  ->skip(0)
                                  ->take(2)
                                  ->get();
        //dd($firstTwo);
    }
    static function dataTheFirstTree($rubrics)
    {
        return $firstTree = Article::where('rubric', $rubrics)
                                  ->where('position', '!=', 0)
                                  ->orderBy('created_at')
                                  ->skip(2)
                                  ->take(12)
                                  ->get();
        //dd($firstTree);
    }
    static function dataUne($rubrics)
    {
        return $une = Article::where('rubric', $rubrics)
                             ->where('position', 0)
                             ->orderBy('created_at')
                             ->skip(0)
                             ->take(1)
                             ->get();
        //dd($une);
    }
    static function show($id){
        return $article = Article::find($id);
    }
}