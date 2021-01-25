<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_modules extends Model
{
    protected $fillable = [
        "id",
        "module_id",
        "student_id",
        "approve"
    ];

    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

}
