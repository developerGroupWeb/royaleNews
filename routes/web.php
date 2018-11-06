<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'as'   => 'root_path',
    'uses' => 'HomeController@index'
]);

Route::get('{rubrics}', [
    'as'   => 'rubric.all',
    'uses' => 'RubricController@all'
]);

Route::get('{rubrics}/{start_at}/{id}-{slug}', [
    'as'   => 'rubric.show',
    'uses' =>'RubricController@show'
])->where(['id' => '[0-9]+', 'slug' => '[a-zA-Z0-9- ]+', 'start_at' => '[0-9-]+']);


Route::group(['prefix' => 'auth'], function (){

    Route::get('{login}', [
        'as'   => 'authentic',
        'uses' => "AuthenticController@authentic"
    ]);
});

Route::group([], function (){

    Route::group(['prefix' => 'members'], function(){

    Route::get('checkoutStandard', [
        'as'   => 'members.checkoutStandard',
        'uses' => 'MemberController@checkoutStandard'
    ]);

    Route::get('checkoutPremium', [
        'as'   => 'members.checkoutPremium',
        'uses' => 'MemberController@checkoutPremium'
    ]);

        Route::get('abonnement', [
            'as'   => 'members.abonnement',
            'uses' => 'MemberController@abonnement'
        ]);

        Route::get('contacts', [
            'as'   => 'members.contacts',
            'uses' => 'MemberController@contacts'
        ]);


    });

});








