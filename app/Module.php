<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        "id",
        "name",
        "major_id",
    ];

    public function Students()
    {
        return $this->belongsToMany(Student::class,"student_modules");
    }

    public function Group()
    {
        //return $this->belongsTo(Group::class);
    }

    public function Major()
    {
        return $this->belongsTo(Major::class);
    }
}
