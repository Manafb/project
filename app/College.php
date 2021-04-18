<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable=[
        "name",
        "headOfCollege_id",
    ];

    public function Students()
    {
        return $this->hasMany(Student::class);
    }

    public function HeadOfCollege()
    {
        return $this->belongsTo(User::class,"headOfCollege_id");
    }

    public function Majors()
    {
        return $this->hasMany(Major::class);
    }

    public function Moudels()
    {
        return $this->hasManyThrough(Module::class,Major::class);
    }

    public function Group()
    {
        return $this->morphOne(Group::class,"groupable");
    }

}
