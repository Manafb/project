<?php

namespace App\Http\Controllers\Website\Group;

use App\College;
use App\Comment;
use App\Group;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GroupController extends Controller
{
    public function index($id)
    {
        $model=Group::findOrFail($id);
        dd(Auth::user()->ishasAccessForGroup($id));
        $posts=$model->Posts()->with("image")->orderBy("created_at","desc")->get();

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
            $path=Storage::disk("images")->putFile('post/images', $request->file('post_file'));
            $post->Image()->create([
                "name"=>$request->file("post_file")->getClientOriginalName(),
                "url"=>$path,
            ]);
        }

        return redirect(route("website.group.index",["id"=>$id]));
    }

    public function createComment($group_id,$post_id,Request $request)
    {
        $commentModel=Comment::create([
            "user_id"=>Auth::user()->id,
            "post_id"=>$post_id,
            "content"=>$request->input("newComment")
        ]);
        return redirect(route("website.group.index",["id"=>$group_id]));
    }


    public function editComment($id,Request $request)
    {
        $comment_model=Comment::find($id);
        $comment_model->content=$request->input("edit_comment");
        if(Auth::user()->isCommentForUser($id)) {
            $comment_model->update();
        }
        return redirect(route("website.group.index",["id"=>$comment_model->Post->Group->id]));
    }

    public function deleteComment(Request $request)
    {
        $comment_model=Comment::find($request->input("comment_id"));
        $group_id=$comment_model->Post->Group->id;
        if(Auth::user()->canModifyComment($comment_model->id)) {
            $comment_model->delete();
        }
        return redirect(route("website.group.index",["id"=>$group_id]));
    }

    public function editPost($id,Request $request)
    {
        $post_model=Post::find($id);
        $post_model->content=$request->input("edit_post");
        if(Auth::user()->isPostForUser($id)) {
            $post_model->update();
        }
        return redirect(route("website.group.index",["id"=>$post_model->Group->id]));
    }

    public function deletePost(Request $request)
    {
        $post_model=Post::find($request->input("post_id"));
        $group_id=$post_model->Group->id;
        if(Auth::user()->canModifyPost($post_model->id)){
            $post_model->delete();
        }

        return redirect(route("website.group.index",["id"=>$post_model->Group->id]));

    }

    public function publicGroup()
    {
        return redirect(route("website.group.index",["id"=>Auth::user()->Student->College->Group->id]));
    }
}
