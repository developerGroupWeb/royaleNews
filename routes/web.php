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

Route::group(['prefix' => 'members'], function(){

    Route::get('singin', [
        'as'   => 'members.singin',
        'uses' => 'MemberController@sing_in'
    ]);

    Route::get('singup', [
        'as'  => 'members.singup',
        'uses' => 'MemberController@sing_up'
    ]);

    Route::get('abonnement', [
        'as'   => 'members.abonnement',
        'uses' => 'MemberController@abonnement'
    ]);

    Route::get('contacts', [
        'as'   => 'members.contacts',
        'uses' => 'MemberController@contacts'
    ]);

    Route::get('checkout_standard', [
        'as'   => 'members.checkout_standard',
        'uses' => 'MemberController@checkout_standard'
    ]);

    Route::get('checkout_premium', [
        'as'   => 'members.checkout_premium',
        'uses' => 'MemberController@checkout_premium'
    ]);
});


Route::get('{rubrics}', [
    'as'   => 'rubric.all',
    'uses' => 'RubricController@all'
]);

Route::get('{rubrics}/{start_at}/{id}-{slug}', [
    'as'   => 'rubric.show',
    'uses' =>'RubricController@show'
])->where(['id' => '[0-9]+', 'slug' => '[a-zA-Z0-9- ]+', 'start_at' => '[0-9-]+']);





