<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        "id",
        "name",
        "url",
        "imagable_id",
        "imegable_type"
    ];

    public function Post()
    {
        return $this->belongsTo(Post::class);
    }


}
