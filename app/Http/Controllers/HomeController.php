<?php

namespace App\Http\Controllers;

use App\models\Article;
use App\Services\homeService;

class HomeController extends Controller
{
    function index()
    {
        $inters = homeService::dataForIntervalFollowingPosition('0', 'international', '1');
        $polis = homeService::dataForIntervalFollowingPosition('0', 'politique', '1');
        $enqs = homeService::dataForIntervalFollowingPosition('0', 'enquetes', '1');
        $eco = homeService::dataForIntervalFollowingPosition('0', 'economie', '1');
        $opt = homeService::dataForIntervalFollowingPosition('0', 'option', '1');
        $sante = homeService::dataForIntervalFollowingPosition('0', 'sante', '1');
        $sport = homeService::dataForIntervalFollowingPosition('0', 'sport', '1');
        $educ = homeService::dataForIntervalFollowingPosition('0', 'education', '1');
        $tech = homeService::dataForIntervalFollowingPosition('0', 'tech-innovation',  '1');



        $articlePriorityTwo  = homeService::dataForIntervalFollowingPosition('1', '', '9' );
        $articlePriorityTreeMaxDataTreeOnePerLine  = homeService::dataForIntervalFollowingPosition('2', '', '3' );
        $articlePriorityTreeMaxDataSixTreePerLine = homeService::dataForIntervalFollowingPosition('2', '','3');
        //dd($suites);
        //dd($_SERVER['HTTP_USER_AGENT']);
        return view('pages.index', ['inters' => $inters,
                                         'polis' => $polis,
                                         'enqs' => $enqs ,
                                         'eco' => $eco,
                                         'opt' => $opt,
                                         'sante' => $sante,
                                         'sport' => $sport,
                                         'educ' => $educ,
                                         'tech' => $tech,
                                          'articlePriorityTwo' => $articlePriorityTwo,
                                          'articlePriorityTreeMaxDataTreeOnePerLine' => $articlePriorityTreeMaxDataTreeOnePerLine,
                                          'articlePriorityTreeMaxDataSixTreePerLine' => $articlePriorityTreeMaxDataSixTreePerLine,

        ]);
    }
}
