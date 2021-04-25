<?php

namespace App\Http\Controllers\Group;

use App\Group;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GroupCPController extends Controller
{
    public $viewNameSpace="ControlPanel.Group.";
    public function index()
    {
        $data=Group::select("*")->get();
        return view($this->viewNameSpace."index")
            ->with("groups",$data);

    }
}
