<?php

use App\Http\Controllers\HaloController;
use App\Http\Controllers\VariableController;
use App\Http\Controllers\BukuController;
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

Route::get('/buku',[BukuController::class,'index'])->name('buku.index');
Route::post('/buku',[BukuController::class,'store'])->name('buku.post');
Route::get('/buku/{id}/edit',[BukuController::class,'edit'])->name('buku.edit');
Route::put('/buku/{id}/update',[BukuController::class,'update'])->name('buku.update');
Route::delete('/buku/{id}/delete',[BukuController::class,'destroy'])->name('buku.delete');
Route::get('/buku/search',[BukuController::class,'search'])->name('buku.search');