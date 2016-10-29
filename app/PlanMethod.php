<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanMethod extends Model
{
    //
    protected $table="PlanMethod";
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
