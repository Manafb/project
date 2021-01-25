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
        return $this->hasMany(Student::class);
    }

    public function Group()
    {
        return $this->belongsTo(Group::class);
    }
}
