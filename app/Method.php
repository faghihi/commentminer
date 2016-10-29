<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{

    //
    protected $table="Method";
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
