<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskTwo\TaskTwoController;
use App\Http\Controllers\TaskThreeFour\TaskThreeFourController;



Route::get('/', function () {
    return view('welcome');
});

/*

////////////////////////////// Task One ////////////////////////////// 
//////////////////////////////

Route::get('/TaskOne', function () {
    // return ('TaskOne');
    return view('TaskOne');
});
*/


/*
////////////////////////////// Task Two => Lecture Two ////////////////////////////// 
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
*/


////////////////////////////// Task Three => Lecture Three and Four ////////////////////////////// 
// 1- Use TaskThreeFourController in TaskThreeFour Folder in controllers Folder in Http Folder.
// 2- Use Folders in TaskThreeFour Folder and TaskThreeFourUploads Folder in public Folder.
// 3- Use files in TaskThreeFour Folder in views Folder in recources Folder.
// 4- Use Contact File in Models Folder in app Folder.
// 5- Use contacts file in migrations Folder in database Folder.
// 6- Use .env file.
// 7- Use This code in web.php file in routes Folder.
//////////////////////////////

Route::prefix('TaskThreeFour')->name('taskthreefour.')->controller(TaskThreeFourController::class)->group(function(){
    Route::get('/master', 'master');
    Route::get('/home', 'home')->name('home');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact' , 'postform')->name('postform');
    Route::get('/ok', 'ok')->name('ok');
    Route::get('/viewcontact', 'viewcontact')->name('viewcontact');
});


