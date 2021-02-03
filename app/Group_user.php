<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_user extends Model
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
        return $this->morphTo(Group::class, 'Groupable');
    }


}
