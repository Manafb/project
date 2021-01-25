<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        "id",
        "uid",
        "college_id",
        "major_id",
    ];

    public function College()
    {
        return $this->belongsTo(College::class);
    }
    public function Major()
    {
        return $this->belongsTo(Major::class);
    }
    public function Modules()
    {
        return $this->belongsToMany(Module::class,"student_modules");
    }
    public function Group_users()
    {
        return $this->belongsToMany(Group::class,"group_users");
    }
}
