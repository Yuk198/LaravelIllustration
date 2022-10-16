<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $student = Student::all();
        return view('student_manage', ['students' => $student]);
    }

    public function create_student(){
        return view('student_new');
    }

    public function add_student(Request $request){
        $new = Student::create([
            'fullname' => $request->fullname,
            'birthday' => $request->birthday,
            'address' => $request->address
        ]);
        
        return redirect('student/' . $new->id . '/edit');
    }
    
    public function get_student_by_id($id){
        $student = Student::find($id);
        return view('student_edit', compact('student'));
    }

    
    public function edit_student(Request $request, $id){
        $student = Student::find($id);
        $student->fullname = $request->fullname;
        $student->birthday = $request->birthday;
        $student->address = $request->address;
        $student->save();
        return redirect('student/' . $student->id . '/edit');
    }

    public function delete_student(Student $student){
        $student->delete();
        return redirect('student');
    }
}
