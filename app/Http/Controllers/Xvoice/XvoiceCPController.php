<?php

namespace App\Http\Controllers\Xvoice;

use App\Http\Controllers\Controller;
use App\Xvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class XvoiceCPController extends Controller
{
    public function index()
    {

        $voices=Xvoice::where("received_id",Auth::user()->id)->get();
        return view("ControlPanel.Xvoice.index")
            ->with("voices",$voices);
    }

    public function read($id)
    {
        $voice=Xvoice::find($id);
        if($voice->received_id!=Auth::user()->id){
            return redirect(route("home"));
        }
        $voice->read_at=now();
        $voice->update();
        return  view("ControlPanel.Xvoice.read")
            ->with("voice",$voice);
    }

    public function delete(Request $request)
    {
        $id=$request->input("id");
        $voice=Xvoice::find($id);
        if($voice->received_id!=Auth::user()->id){
            return redirect(route("home"));
        }
        $voice->delete();
        return  redirect()->back()->with("msg","Done!");
    }
}
