<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;
use App\Test;
use App\Answer;

class TestQuestionsController extends Controller
{

	public function store(Test $test) 
	{

		$attributes = request()->validate(['description' => 'required']);
		$test->addQuestion($attributes);
		return back();
	}


    public function update(Question $question) 
    {
        return back();
    }

    public function answers(Question $question)
    {
    	$answer = new Answer;
    	$answer -> question_id = $question->id;
    	// dd(request()->answer);	
    	$answer -> description = request()->answer;
    	$answer -> save();
    	return back();
    }

    public function takeTest ($id) 
        {
            $test = Test::find($id);


            //$realTest = Test::where('id', $test->id) ;
            return view('tests.takeTest', compact('test'));
        }
}
