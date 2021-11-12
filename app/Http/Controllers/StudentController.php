<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function record(){
        $students = Student:: orderBy('id','DESC')->get();
        return view('student',compact('students'));
    }
    public function addStudent(Request $request){

        $student = new Student();
        $student->firstname=$request->firstname;
        $student->lastname=$request->lastname;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->Transitionamount=$request->Transitionamount;
        $student->save();


        return redirect(route('student'));
    }

    public function getStudentById($id){
        $student = Student::find($id);
        return $student;
    }


}
