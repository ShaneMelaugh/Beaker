<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Results;
use App\Question;
use App\Test;
use App\Answer;
use App\User;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function results(Test $test)
    {
    	//dd(request());
    	//$answers = Answer::all();
    	//$questions = Question::all();
    	//$tests = Test::all();
    	//$users = User::all();
    	//$results = Results::all();
    	$results = Results::where([
            ['owner_id', auth()->id()],
            ['test_id', $test->id]
        ])->get();
        //dd($results);
    	
        $answers_id = $results->pluck('answer_id')->all();
    	$answers = Answer::whereIn('id',$answers_id)->get();
        //dd($answers);
    	
        $questions_id = $answers->pluck('question_id')->all();
    	$questions = Question::whereIn('id',$questions_id)->get();
        
        // $tests_id = $questions->pluck('tests_id')->all();
        // $tests = Test::whereIn('id',$tests_id)->get();

        //$answers = Answer::whereIn('question_id',$answers_id)->get();
    	$question = Answer::findOrFail(request('testAnswer'))->question;
        //dd(request()->all());
    	Results::create([
        	'test_id' => $test->id,
        	'question_id' => $question->id,
        	'answer_id' => request('testAnswer'),
        	'owner_id'=> auth()->id(),
        ]);
        //dd(request());
        return view('tests.results', compact('answers', 'results', 'questions', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
    	//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
