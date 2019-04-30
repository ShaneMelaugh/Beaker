<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;
use App\Answer;

class TestsController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth');
    }

    public function index()
        {
            $tests = Test::where('owner_id', auth()->id())->get();

            return view('tests.index', compact('tests'));
        }

    public function show(Test $test)
        {
            // abort_if($project->owner_id !== auth()->id(), 403);
            //abort_if(! auth()->user()->owns($project), 403);
            //$this->authorize('view', $project);

           //abort_if(\Gate::denies('update', $test), 403); 
            //dd($test->questions->answers);
            return view('tests.show', compact('test'));
        }

    public function create()
        {
            return view('tests.create');
        }

    public function store()
        {

            $attributes = request()->validate([
                'title' => ['required', 'min:3', 'max:140'],
                'description' => ['required', 'min:10', 'max:255']              
            ]);

            $attributes['owner_id'] = auth()->id();

            Test::create($attributes);
            return redirect('/tests');
        }

    public function edit(Test $test) 
        {
            //abort_if(\Gate::denies('update', $test), 403);
            return view('tests.edit', compact('test'));
        }

    public function update(Test $test) 
        {
            //abort_if(\Gate::denies('update', $test), 403);
            $test->update(request(['title', 'description']));
            return redirect('/tests');
        }

    public function destroy(Test $test) 
        {
            //abort_if(\Gate::denies('update', $test), 403);
            $test->delete();
            return redirect('/tests');
        }

}
