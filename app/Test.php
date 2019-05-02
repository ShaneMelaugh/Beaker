<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $guarded = [];

    public function questions()

    {
    	return $this->hasMany(Question::class);
    }

    public function addQuestion($question)

    {
    	$this->questions()->create($question);
    }

    public function results($result)
    {
    	$this->hasMany(Results::class);
    }


}
