<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::view("form","formview");
Route::post("form",[formcontroller::class,"getform"]);
Route::get("display",[formcontroller::class,"getdis"]);
Route::get("delete/{id}",[formcontroller::class,"getdelete"]);
Route::get("edit/{id}",[formcontroller::class,"getedit"]);
Route::post("update/{id}",[formcontroller::class,"getupdate"]);
Route::post("datasearch",[formcontroller::class,"mysearch"]);
Route::post("deleteall",[formcontroller::class,"delall"]);