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

    function checkout_standard(){
        return view('pages.checkout_standard');
    }

    function checkout_premium(){
        return view('pages.checkout_premium');
    }
}
