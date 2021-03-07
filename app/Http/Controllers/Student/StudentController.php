<?php

namespace App\Http\Controllers\Student;

use App\College;
use App\Student;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students=Student::all();
        return view("ControlPanel.Student.index", ['students'=>$students]);
    }
    public function create() {
        $students = Student::all();
        $college=College::all();
        return view("ControlPanel.Student.create", ['students'=>$students,'colleges'=>$college]);
    }

    public function store(Request $request)
    {
        $user=User::create($request->all());
        $user->Student()->create($request->all());
        return redirect(route("student.index"))->with("msg","Done!");
    }
}
