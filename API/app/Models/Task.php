<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = array('title', 'content','project_id','status');

    public function Project()
    {
        return $this->belongsTo('App\Models\Project');
    }

}
