<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\teacher;
use App\Models\student;

class teachercontroller extends Controller
{
    public function show(){
     $teacher = teacher::latest()->get();
     $option= DB::select('select distinct name from teachers');
     return view('teacher',compact('teacher','option'));
     
    }
    public function store(Request $request){
     $input = $request->all();
     $teacher = teacher::create($input);
     $name= $request->input('name');
     if($request->hasFile('file') && $request->file('file')->isValid()){
     //  $request->file->storeAs('student',$name);
     $teacher->addMediaFromRequest('file')->toMEdiaCOllection($collectionName=$name, $diskName='teacher');
          
    }
     return redirect()->route('teacher');
     }
     public function show_all(){
        $teacher_load= teacher::latest()->get();
        $student_load= student::latest()->get();
    
        
        return view('view',compact('teacher_load','student_load'));
     
     }
     
    
 }