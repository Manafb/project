<?php

namespace App\Http\Controllers\User;
use App\User;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public $viewNameSpace="ControlPanel.User.";

    public function index()
    {
        $users=User::allAdmin();
        return view($this->viewNameSpace."index", ['users'=>$users]);
    }
    public function create() {
        return view($this->viewNameSpace."create");
    }

    public function store(Request $request)
    {
        $data=$request->all();
        $data["password"]=Hash::make($data["password"]);
        $user=User::create($data);
        if($request->hasFile("image")){
            $path=Storage::disk("images")->putFile('profile/images', $request->file('image'));
            $user->Image()->create([
                "name"=>$request->file("image")->getClientOriginalName(),
                "url"=>$path,
            ]);
        }
        return redirect(route("user.index"));
    }
    public function edit($id)
    {
        $model=User::findOrFail($id);
        return view($this->viewNameSpace."edit")
            ->with("model",$model);
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
        if($request->hasFile("image")){
            try {
                Storage::disk("images")->delete($model->Image->url);
            }catch (\Exception $exception){

            }
            $path=Storage::disk("images")->putFile('profile/images', $request->file('image'));
            $model->Image()->delete();
            $model->Image()->create([
                "name"=>$request->file("image")->getClientOriginalName(),
                "url"=>$path,
            ]);
        }
        return redirect(route("user.index"))->with("msg","Done!");
    }

    public function destroy(Request $request)
    {
        $model=User::findOrFail($request->input("id"));
        $model->delete();
        return redirect()->back()->with("msg","Done!");
    }
}
