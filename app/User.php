<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function College() {
        return $this->hasOne(College::class, 'headOfCollege_id');
    }

    public function Student()
    {
        return $this->hasOne(Student::class);
    }

    public static function allStudents()
    {
       return User::select("*")->has("Student")->get();
    }
    public static function allAdmin()
    {
      return User::select("*")->doesntHave("Student")->get();
    }

    public function isAdmin()
    {
        return User::select("*")->doesntHave("Student")->where("id",Auth::user()->id)->first()!=null;
    }
    public function canModifyComment($comment_id)
    {
        $comment_model=Comment::find($comment_id);
        if(is_null($comment_model)){
            return false;
        }
        return $this->isAdmin() || $this->id==$comment_model->user_id;
    }

    public function canModifyPost($post_id)
    {
        $post_model=Post::find($post_id);
        if(is_null($post_model)){
            return false;
        }
        return  $this->isAdmin() || $this->id==$post_model->user_id;
    }

    public function isCommentForUser($comment_id)
    {
        $comment_model=Comment::find($comment_id);
        if(is_null($comment_model)){
            return false;
        }
        return $this->id==$comment_model->user_id;
    }
    public function isPostForUser($post_id)
    {
        $post_model=Post::find($post_id);
        if(is_null($post_model)){
            return false;
        }
        return $this->id==$post_model->user_id;
    }

    public function ishasAccessForGroup($group_id)
    {
        $model=Group::findOrFail($group_id);
        dd($model->Group_students);
        return $model->Group_users()->where("student_id",$this->Student->id)->first()!=null;
    }



}
