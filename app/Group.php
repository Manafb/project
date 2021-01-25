<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable=[
        "id",
        "groupable_id",
        "groupable_type",
        "type"
    ];

    public function Group_users()
    {
        $this->hasMany(Group_users::class);
    }

}
