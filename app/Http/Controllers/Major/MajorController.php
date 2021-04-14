<?php

namespace App\Http\Controllers\Major;

use App\College;
use App\Major;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public $viewNameSpace="ControlPanel.Major.";

    public function index()
    {
        $majors=Major::all();
        return view($this->viewNameSpace."index", ['majors'=>$majors]);
    }
    public function create() {
        $users = User::allAdmin();
        $colleges=College::all();
        return view($this->viewNameSpace."create",
            [
                'users'=>$users,
                "colleges"=>$colleges
            ]
        );
    }

    public function store(Request $request)
    {
        Major::create($request->all());
        return redirect(route("major.index"));
    }
    public function edit($id)
    {
        $model=Major::findOrFail($id);
        $users=User::allAdmin();
        $colleges=College::all();
        return view($this->viewNameSpace."edit")
            ->with("model",$model)
            ->with("users",$users)
            ->with("colleges",$colleges);
    }
    public function update($id,Request  $request)
    {
        $model=Major::findOrFail($id);
        $model->update($request->all());
        return redirect(route("major.index"))->with("msg","Done!");
    }

    public function destroy(Request $request)
    {
        $model=Major::findOrFail($request->input("id"));
        $model->delete();
        return redirect()->back()->with("msg","Done!");
    }
}
