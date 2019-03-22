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

Route::get('/',function(){
    return view('diandu.home');
});

Route::get('diandu/livedata',function(){
    return view('diandu.livedata');
});

Route::get('diandu/historycurve',function(){
    return view('diandu.historycurve');
});
