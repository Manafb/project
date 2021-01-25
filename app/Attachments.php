<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    protected $fillable = [
        "id",
        "url",
        "attachmentable_id",
        "attachmentable_type",

    ];
}
