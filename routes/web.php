<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Filesystem\Filesystem;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
});



Route::get('/vila', function () {

    return view('vila');

});

Route::get('/kaif', function () {

    return view('kaif');

});




Route::get('/ls', function () {




    echo public_path()."<br>";





    echo File::deleteDirectory(public_path('/storage'))."wwe";

    //echo Storage::deleteDirectory(public_path('aaaggg.txt'));


    Artisan::call('storage:link') ;
});


 



Route::POST('/fu', [App\Http\Controllers\filecontroller::class, 'index'])->name('filepost');