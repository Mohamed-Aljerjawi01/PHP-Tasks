<?php

namespace App\Http\Controllers\TaskThreeFour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class TaskThreeFourController extends Controller
{
    function master(){
        return view('TaskThreeFour.master');
    }
    function home(){
        return view('TaskThreeFour.home');
    }
    function portfolio(){
        return view('TaskThreeFour.portfolio');
    }
    function about(){
        return view('TaskThreeFour.about');
    }
    function contact(){
        return view('TaskThreeFour.contact');
    }
    function ok(){
        return view('TaskThreeFour.ok');
    }
    function viewcontact(){
        $contacts = Contact::all();
        return view('TaskThreeFour.ViewContactFromDB' , compact('contacts'));
    }
    function postform(Request $request){
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'image' => 'required'
        ]);

        $name = 'TaskThreeFour_' . time() . '_' . rand() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('TaskThreeFourUploads') , $name);
        

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'massege' => $request->message,
            'image' => $name
        ]);
        
        return redirect()->route('taskthreefour.ok');

    }
}
