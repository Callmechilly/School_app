<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studentcontroller extends Controller
{
   public function show(){
    $student = student::latest()->get();
    return view('student',compact('student'));
   }
   public function store(Request $request){
    $input = $request->all();
    $student = student::create($input);
    $name= $request->input('name');
    if($request->hasFile('file') && $request->file('file')->isValid()){
        $student->addMediaFromRequest('file')->toMEdiaCOllection($collectionName=$name, $diskName='student');
    }
    return redirect()->route('student');
    }
   
}


