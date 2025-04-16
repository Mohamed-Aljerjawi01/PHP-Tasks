<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskTwo\TaskTwoController;


Route::get('/', function () {
    return view('welcome');
});

////////////////////////////// Task One ////////////////////////////// 
//////////////////////////////

/*
Route::get('/TaskOne', function () {
    // return ('TaskOne');
    return view('TaskOne');
});
*/

////////////////////////////// Task Two ////////////////////////////// 
// 1- Use TaskTwoController in TaskTwo Folder in controllers Folder in Http Folder.
// 2- Use Folders in TaskTwo Folder in public Folder.
// 3- Use files in TaskTwo Folder in views Folder in recources Folder.
// 4- Use This code in web.php file in routes Folder.
//////////////////////////////

Route::prefix('TaskTwo')->name('tasktwo.')->controller(TaskTwoController::class)->group(function(){
    Route::get('/master', 'master');
    Route::get('/home', 'home')->name('home');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact' , 'postform')->name('postform');
});



