<?php

namespace App\Http\Controllers\Student;

use App\College;
use App\Major;
use App\Student;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public $viewNameSpace="ControlPanel.Student.";

    public function index()
    {
        $students=Student::all();
        return view($this->viewNameSpace."index", ['students'=>$students]);
    }
    public function create() {
        $students = Student::all();
        $college=College::all();
        $major=Major::all();
        return view($this->viewNameSpace."create", ['students'=>$students,'colleges'=>$college, 'majors'=>$major]);
    }

    public function store(Request $request)
    {
        $user=User::create($request->all());
        $user->Student()->create($request->all());
        return redirect(route("student.index"))->with("msg","Done!");
    }

    public function edit($id)
    {
        $model=Student::findOrFail($id);
        $students=Student::all();
        $colleges=College::all();
        $majors=Major::all();

        return view($this->viewNameSpace."edit")
            ->with("model",$model)
            ->with("students",$students)
            ->with("colleges",$colleges)
            ->with("majors",$majors);


    }

    public function update($id,Request  $request)
    {
        $model=Student::findOrFail($id);
        $model->update($request->all());
        return redirect(route("student.index"))->with("msg","Done!");
    }


    public function destroy(Request $request)
    {
        $model=Student::findOrFail($request->input("id"));
        $model->delete();
        return redirect()->back()->with("msg","Done!");
    }
}
