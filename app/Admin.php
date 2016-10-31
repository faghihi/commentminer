<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table="Admins";
    public $timestamps = false;
    public function setUpdatedAt($value)
    {
        //Do-nothing
    }

    public function getUpdatedAtColumn()
    {
        //Do-nothing
    }
}
