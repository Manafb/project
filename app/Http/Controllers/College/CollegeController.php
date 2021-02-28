<?php

namespace App\Http\Controllers\College;

use App\College;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view("ControlPanel.College.index", ['colleges'=>$colleges]);
    }

    public function create() {
        $users = User::all();
        return view("ControlPanel.College.create", ['users' => $users]);
    }

    public function store(Request $request)
    {
        College::create($request->all());
        return redirect()->back();

    }
}

