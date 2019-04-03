<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subTask extends Model
{
	protected $guarded = [];

    public function task()
    {
    	return $this->belongsTo(Task::class);
    }
}
