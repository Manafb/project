<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $fillable = [
        "id",
        "name",
        "head_id",
    ];

    public function Students()
    {
        return $this->hasMany(Students::class);
    }

    public function Modules()
    {
        return $this->hasMany(Modules::class);
    }
}
