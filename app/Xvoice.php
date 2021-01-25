<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xvoice extends Model
{
    protected $fillable = [
        "id",
        "title",
        "content",
        "read_at",
        "received_id"
    ];


}
