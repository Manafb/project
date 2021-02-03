<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $fillable = [
        "id",
        "url",
        "attachable_id",
        "attachable_type",

    ];
    public function Attachable()
    {
        return $this->morphTo();
    }
}
