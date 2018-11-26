<?php

namespace App\Http\Controllers\Authentic;

use App\Services\Authentic\SingUpService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Authentic\SingUpFormRequest;

class singupController extends Controller
{
    function create(){

        return view('authentic.singup');
    }

    function store(SingUpFormRequest $request){

        SingUpService::storeService($request);
        return redirect()->route('singin');
    }
}
