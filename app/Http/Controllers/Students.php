<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Student;
class Students extends Controller
{
    public function index(){
    	
    	return view('students.index');
    }

        public function Store(Request $request){
    	   $student = new Student;
    	   $student->student_id = $request->student_id;
    	   $student->name = $request->name;
           $student->address = $request->address;
           $student->goal = $request->goal;
    	   Auth::user()->student()->save($student);
    	   return back();
    }
    public function show(){
        $deleteStudent = Student::where('goal','<',9)->delete();
    	$students = Student::where('user_id',1)->orderBy('goal', 'desc')->get();
        /* */

        //$students = Auth::user()->student()->get();
    	return view('students.show',compact('students'));
    }
}
