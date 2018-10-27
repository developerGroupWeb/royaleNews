<?php

namespace App\Http\Controllers;

use App\models\Article;
use App\Services\homeService;

class HomeController extends Controller
{
    function index()
    {
        $unes   = homeService::dataForIntervalFollowingPosition('0', '0', '1' );
        $suites = homeService::dataForIntervalFollowingPosition('0', '1', '9' );
        $articlePriorityTwo  = homeService::dataForIntervalFollowingPosition('1', '0', '9' );
        $articlePriorityTreeMaxDataTreeOnePerLine  = homeService::dataForIntervalFollowingPosition('2', '0', '6' );
        $articlePriorityTreeMaxDataTreeTreePerLine = homeService::dataForIntervalFollowingPosition('2', '6', '3' );
        //dd($suites);
        return view('pages.index', ['unes' => $unes,
                                          'suites' => $suites,
                                          'articlePriorityTwo' => $articlePriorityTwo,
                                          'articlePriorityTreeMaxDataSizeOnePerLine' => $articlePriorityTreeMaxDataTreeOnePerLine,
                                          'articlePriorityTreeMaxDataTreeTreePerLine' => $articlePriorityTreeMaxDataTreeTreePerLine,
        ]);
    }
}
