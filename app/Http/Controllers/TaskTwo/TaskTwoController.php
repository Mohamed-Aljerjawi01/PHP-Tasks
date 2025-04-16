<?php

namespace App\Http\Controllers\TaskTwo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskTwoController extends Controller
{
    function master(){
        return view('TaskTwo.master');
    }
    function home(){
        return view('TaskTwo.home');
    }
    function portfolio(){
        return view('TaskTwo.portfolio');
    }
    function about(){
        return view('TaskTwo.about');
    }
    function contact(){
        return view('TaskTwo.contact');
    }
    function postform(Request $request){
        // return 'Hello World!!!';
        // dd($request);
        dd($request->all());
    }
}
