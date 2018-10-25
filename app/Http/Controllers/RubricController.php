<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\articleService;
use App\models\Article;

class RubricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all($rubrics)
    {
        $une       = articleService::dataUne($rubrics);
        $firstTwo  = articleService::dataTheFirstTwo($rubrics);
        $firstTree = articleService::dataTheFirstTree($rubrics);
        $article   = articleService::dataArticle($rubrics);
        return view('pages.rubrics', [
            'rubrics'   => $rubrics,
            'article'   => $article,
            'une'       => $une,
            'firstTwo'  => $firstTwo,
            'firstTree' => $firstTree,
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($pages, $date, $id, $slug)
    {
        $article = Article::where('id', $id)->get();
        return view('pages.show', ['pages' => $pages, 'article' => $article]);
    }

}
