<?php

use App\Http\Controllers\HaloController;
use App\Http\Controllers\VariableController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('welcome');
    return "Halo dari laravel 12";
});

// Route::get('/halo',  function () {
//     return "dari page halo";
// });

Route::get('/halo', function() {
    return view('halo');
});

Route::get('/halo/drfolder', function(){
    return view('halo.halo');
});

Route::get('/halocontroller',[HaloController::class,'index']);

Route::get('/variablecontroller',[VariableController::class,'showname']);