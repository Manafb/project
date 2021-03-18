<?php

namespace App\Http\Controllers\Student;

use App\College;
use App\Major;
use App\Student;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view($this->viewNameSpace."create", ['students'=>$students,'colleges'=>$college]);
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $data["password"]=Hash::make($data['password']);
        $user=User::create($data);
        $user->Student()->create($data);
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
        if(trim($request->input("password"))==""){
            $data=$request->except("password");
        }else{
            $data=$request->all();
            $data["password"]=Hash::make($data['password']);
        }
            $model->User->update($data);
        return redirect(route("student.index"))->with("msg","Done!");
    }


    public function destroy(Request $request)
    {
        $model=Student::findOrFail($request->input("id"));
        $model->delete();
        return redirect()->back()->with("msg","Done!");
    }
}
