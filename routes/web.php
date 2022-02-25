<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\teachercontroller;
use App\Http\Controllers\homecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|<table border="3px">
            <thead>
                
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Image</td>
                </tr>
                </thead>
                @foreach($teacher_load as $key=>$item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{$item->getFirstMediaUrl('teacher_file','thumb')}}"/ width="120px"></td>
                </tr>
                @endforeach
                
           
            @foreach($student_load as $key=>$item)
        <tr style="color:red;" >
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{$item->getFirstMediaUrl('student_file','thumb')}}"/ width="120px"></td>
                </tr>


        @endforeach
        </table>
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/view', function () {
    return view('view');
});


Route::get('/teacher',function(){
    return view('teacher');
});

Route::get('/student',function(){
    return view('student');
});





Route::get('student',[studentcontroller::class,'show'])->name('student');
Route::get('teacher',[teachercontroller::class,'show'])->name('teacher');

Route::post('student/store',[studentcontroller::class,'store'])->name('student.store');
Route::post('teacher/store',[teachercontroller::class,'store'])->name('teacher.store');

Route::get('view',[homecontroller::class,'home']);
//Route::get('view',[homecontroller::class,'show_filter']);



