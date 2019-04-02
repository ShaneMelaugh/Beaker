<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\Project;
use App\Answer;

class ProjectTasksController extends Controller
{

	public function store(Project $project) 
	{

		$attributes = request()->validate(['description' => 'required']);
		$project->addTask($attributes);
		return back();
	}


    public function update(Task $task) 
    {
    	return back();
    }

    public function answers(Task $task)
    {
    	$answer = new Answer;
    	$answer -> task_id = $task->id;
    	// dd(request()->answer);	
    	$answer -> description = request()->answer;
    	$answer -> save();
    	return back();
    }
}
