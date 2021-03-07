<?php

namespace App\Http\Controllers\College;

use App\College;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class CollegeController extends Controller
{
    public $viewNameSpace="ControlPanel.College.";
    public function index()
    {
        $colleges = College::all();
        return view($this->viewNameSpace."index", ['colleges'=>$colleges]);
    }

    public function create() {
        $users = User::allAdmin();
        return view($this->viewNameSpace."create", ['users' => $users]);
    }

    public function store(Request $request)
    {
        College::create($request->all());
        return redirect(route("college.index"))->with("msg","college created successfully");
    }

    public function edit($id)
    {
        $model=College::findOrFail($id);
        $users=User::allAdmin();
        return view($this->viewNameSpace."edit")
            ->with("model",$model)
            ->with("users",$users);
    }

    public function update($id,Request  $request)
    {
        $model=College::findOrFail($id);
        $model->update($request->all());
        return redirect(route("college.index"))->with("msg","Your College updated Successfully");
    }

    public function destroy(Request $request)
    {
        $model=College::findOrFail($request->input("id"));
        $model->delete();
        return redirect()->back()->with("msg","Done!");
    }
}

