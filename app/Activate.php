<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activate extends Model
{
    //
    protected $table="Activate";
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
