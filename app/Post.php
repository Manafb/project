<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        "id",
        "content",
        "user_id",
        "group_id"
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Group()
    {
        return $this->belongsTo(Group::class);
    }

    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }

}
