<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function sing_in(){
        return view('pages.singin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function sing_up(){
        return view('pages.singup');
    }

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
