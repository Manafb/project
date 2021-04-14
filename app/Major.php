<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        "id",
        "name",
        "head_id",
        "college_id"
    ];

    public function Students()

    {
        return $this->hasMany(Student::class);
    }

    public function Modules()
    {
        return $this->hasMany(Module::class);
    }

    public function Head()
    {
        return $this->belongsTo(User::class,"head_id");
    }

    public function College()
    {
        return $this->belongsTo(College::class);
    }
}
