<?php


Route::get('/', function () {
    return view('dashboard');
});
//
//Route::group(['prefix' => 'email'], function(){
//    Route::get('inbox', function () { return view('pages.email.inbox'); });
//    Route::get('read', function () { return view('pages.email.read'); });
//    Route::get('compose', function () { return view('pages.email.compose'); });
//});