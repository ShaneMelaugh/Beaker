<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class results extends Model
{
	protected $guarded=[];
	public function owner()
	{
		return $this->belongsTo(User::class);
	}

	public function answer()
	{
		return $this->hasMany(Answer::class);
	}
}
