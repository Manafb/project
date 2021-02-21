<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable=[
        "id",
        "name",
        "headOfCollege_id"
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

}
