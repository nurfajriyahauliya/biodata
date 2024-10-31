<?php

use App\Http\Controllers\JalurController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ini adalah route tanpa MVC
Route::get('jalurbaru', function (){
    return 'ini jalur baru tanpa MVC';
});


//Ini adalah Route menggunakan View
Route::get('jalurview', function (){
    return view('viewjalur');
});


//Ini adalah route menggunakan view & controller
Route::get('/jalurcontroller',[JalurController::class,'index']);

//Ini adalah route menggunakan view & controller
Route::get('/jalurmodel',[JalurController::class,'menampilkanDataModel']);


//Ini adalah route menggunakan view & controller
Route::get('/Biodata',[BiodataController::class,'menampilkanBiodata']);


