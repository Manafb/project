<?php

namespace App\Http\Controllers\Website\Group;

use App\Group;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function index($id)
    {
        $model=Group::findOrFail($id);
        $posts=$model->Posts()->orderBy("created_at","desc")->get();
        return view("Website.Group.index",[
            "model"=>$model,
            "posts"=>$posts
        ]);
    }

    public function createPost($id,Request  $request)
    {

        $post=Post::create([
            "content"=>$request->input("content"),
            "user_id"=>Auth::user()->id,
            "group_id"=>$id
        ]);
        if($request->hasFile("post_file")){
            $path=$request->file('post_file')->store('post/images');
//            $post->Image()->create([
//                "name"=>$request->file("post_file")->getClientOriginalName(),
//                "url"=>$path,
//            ]);
        }
        return redirect(route("website.group.index",["id"=>$id]));
    }
}
