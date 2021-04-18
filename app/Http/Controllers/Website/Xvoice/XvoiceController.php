<?php

namespace App\Http\Controllers\Website\Xvoice;

use App\Http\Controllers\Controller;
use App\Xvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class XvoiceController extends Controller
{
    public function newXVoice()
    {
        return view("Website.Xvoice.new");
    }

    public function sendVoice(Request $request)
    {
        $data=$request->all();
        $data["received_id"]=Auth::user()->Student->College->headOfCollege_id;
        Xvoice::create($data);
        return redirect()->back()->with("msg","Done!");
    }
}
