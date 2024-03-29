<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix'=>'v1'],function(){
    Route::resource('members-forms','MemberFormController',[
    'except'=>['edit','update']
    ]);
    Route::resource('events','EventController',[

    ]);
    Route::resource('workshops','WorkshopController',[
        'except'=>['edit','update']
    ]);

        Route::resource('participants-forms','ParticipantFormController',[
        'except'=>['edit','update']
    ]);

    Route::resource('members','MemberController');

    Route::resource('participants','ParticipantController');



    

});