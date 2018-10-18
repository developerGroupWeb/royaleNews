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
        $une     = articleService::dataUne($rubrics);
        $article = articleService::dataArticle($rubrics);
        return view('pages.'.$rubrics, ['article' => $article, 'une' => $une]);
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
        return view('pages.show', ['article' => $article]);
    }

}
