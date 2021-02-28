<?php

namespace App\Http\Controllers;

use App\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function store(Request $request)
    {
        Major::create($request->all());
        return redirect()->back();
    }
}
