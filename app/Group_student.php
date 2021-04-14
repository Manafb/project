<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_student extends Model
{
    protected $fillable=[
        "id",
        "group_id",
        "student_id"
    ];

    public function Student()
    {
      return $this->belongsTo(Student::class);
    }

    public function Group()
    {
        return $this->belongsTo(Group::class);
    }


}