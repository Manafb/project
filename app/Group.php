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

    public function Students()
    {
        return $this->belongsToMany(Student::class,"group_students");
    }

    public function Posts()
    {
        return $this->hasMany(Post::class);
    }

}
