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
        $articlePriorityTreeMaxDataTreeOnePerLine  = homeService::dataForIntervalFollowingPosition('2', '0', '3' );
        $articlePriorityTreeMaxDataSixTreePerLine = homeService::dataForIntervalFollowingPosition('2', '3', '6' );
        //dd($suites);
        return view('pages.index', ['unes' => $unes,
                                          'suites' => $suites,
                                          'articlePriorityTwo' => $articlePriorityTwo,
<<<<<<< HEAD
                                           'articlePriorityTreeMaxDataTreeOnePerLine' => $articlePriorityTreeMaxDataTreeOnePerLine,
                                           'articlePriorityTreeMaxDataSixTreePerLine' => $articlePriorityTreeMaxDataSixTreePerLine,
=======
                                          'articlePriorityTreeMaxDataTreeOnePerLine' => $articlePriorityTreeMaxDataTreeOnePerLine,
                                          'articlePriorityTreeMaxDataSixTreePerLine' => $articlePriorityTreeMaxDataSixTreePerLine,
>>>>>>> c59a478e0bbd714e4e6c9f868df889c99a433443
        ]);
    }
}
