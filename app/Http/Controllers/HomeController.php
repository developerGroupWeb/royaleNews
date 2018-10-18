<?php

namespace App\Http\Controllers;

use App\models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $unes   = Article::where('position', '0')->skip(0)->take(1)->get();
        $suites = Article::where('position', '0')->skip(1)->take(6)->get();
        return view('pages.index', ['unes' => $unes, 'suites' => $suites]);
    }
}
