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
        $this->hasMany(Student::class);
    }

}
