<?php

namespace App\Http\Controllers\Module;
use App\Group;
use App\Major;
use App\Module;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public $viewNameSpace="ControlPanel.Module.";

    public function index()
    {
        $modules=Module::all();
        return view($this->viewNameSpace."index", ['modules'=>$modules]);
    }
    public function create() {
        $majors = Major::all();
        return view($this->viewNameSpace."create", ['majors'=>$majors]);
    }

    public function store(Request $request)
    {
        $module=Module::create($request->all());
        $module->Group()->create([
            "type"=>"privet"
        ]);
        return redirect(route("module.index"));
    }
    public function edit($id)
    {
        $model=Module::findOrFail($id);
        $majors=Major::all();
        return view($this->viewNameSpace."edit")
            ->with("model",$model)
            ->with("majors",$majors);
    }
    public function update($id,Request  $request)
    {
        $model=Module::findOrFail($id);
        $model->update($request->all());
        return redirect(route("module.index"))->with("msg","Done!");
    }

    public function destroy(Request $request)
    {
        $model=Module::findOrFail($request->input("id"));
        $model->delete();
        return redirect()->back()->with("msg","Done!");
    }
}
