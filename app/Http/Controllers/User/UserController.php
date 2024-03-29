<?php

namespace App\Http\Controllers\User;
use App\User;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $viewNameSpace="ControlPanel.User.";

    public function index()
    {
        $users=User::all();
        return view($this->viewNameSpace."index", ['users'=>$users]);
    }
    public function create() {
        $users = User::all();
        return view($this->viewNameSpace."create", ['users'=>$users]);
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect(route("user.index"));
    }
    public function edit($id)
    {
        $model=User::findOrFail($id);
        $users=User::allAdmin();
        return view($this->viewNameSpace."edit")
            ->with("model",$model)
            ->with("users",$users);
    }

    public function update($id,Request  $request)
    {
        $model=User::findOrFail($id);
        if(trim($request->input("password"))==""){
            $data=$request->except("password");
        }else{
            $data=$request->all();
            $data["password"]=Hash::make($data["password"]);
        }
        $model->update($data);
        return redirect(route("user.index"))->with("msg","Done!");
    }

    public function destroy(Request $request)
    {
        $model=User::findOrFail($request->input("id"));
        $model->delete();
        return redirect()->back()->with("msg","Done!");
    }
}
