<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table="Plan";
    protected $primaryKey="PlanId";
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
