<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=[
        "id",
        "groupable_id",
        "groupable_type",
        "type"
    ];

    public function Groupable()
    {
        return $this->morphTo();
    }

    public function Group_users()
    {
        return $this->hasMany(Group_user::class);
    }

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }

}
