<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = array('title','content');


    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

}
