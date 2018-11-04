<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{

    function abonnement(){
        return view('pages.abonnement');
    }

    function contacts(){
        return view('pages.contacts');
    }
}
