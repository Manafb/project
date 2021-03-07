<?php

namespace App\Http\Controllers\Ajax;

use App\College;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public $view_space="ControlPanel.AjaxForm.";
    public function getMajorByCollege(Request $request)
    {
        $id=$request->input("id");
        $college_model=College::find($id);
        $majors=$college_model->Majors;
        return view($this->view_space."Select")
            ->with("models",$majors)
            ->with("label","Major: ")
            ->with("name","major_id");
    }
}
