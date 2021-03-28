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

    public function Comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function Image()
    {
        return $this->morphTo(Image::class,"imagable");
    }

    public function Group()
    {
        return $this->morphTo(Group::class, 'groupable');
    }

}
