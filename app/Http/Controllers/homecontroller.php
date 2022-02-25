<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\teacher;
use App\Models\student;
class homecontroller extends Controller
{
public function home(Request $request){
    $name= $request->input('name');
    $teacher_load= teacher::where('name',$name)->get();
    $student_load= student::where('name',$name)->get();
    $selection= DB::select('select distinct collection_name from media');
    
    
    return view('view',compact('teacher_load','student_load','selection','name'));
   
    
}
public function show_filter(Request $request){
    $name= $request->input('name');
    return $name;
}
}


