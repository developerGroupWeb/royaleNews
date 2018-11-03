<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\rubricService;
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
        $une       = rubricService::dataUne($rubrics);
        $firstTwo  = rubricService::dataTheFirstTwo($rubrics);
        $firstTree = rubricService::dataTheFirstTree($rubrics);
        $article   = rubricService::foundArticle($rubrics);
        //dd($article->exists());
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
        $article = rubricService::show($id);
        $backArticle = rubricService::backArticle($pages, $id, $slug);
        if($backArticle->exists() == true){
            return view('pages.show', ['pages' => $pages, 'article' => $article]);
        }else
            return redirect()->back();

    }

}
