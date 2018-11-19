<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TvController extends Controller
{
    function index($more){

        return view('pages.'.$more);
    }
}
