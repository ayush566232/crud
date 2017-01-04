<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get('/',['as'=>'form','uses'=>'Web\usercontroller@form']);
Route::get('/organization',['as'=>'organization','uses'=>'Web\usercontroller@organization']);
Route::post('/save',['as'=>'save','uses'=>'home@store']);
Route::any('/org_list',['as'=>'org_list','uses'=>'home@index']);
Route::any('/view/{id}',['as'=>'view','uses'=>'home@view']);
Route::any('/delete/{id}',['as'=>'delete','uses'=>'home@destroy']);
Route::any('/edit/{id}',['as'=>'edit','uses'=>'home@edit']);
Route::any('/update/{id}',['as'=>'update','uses'=>'home@update']);
