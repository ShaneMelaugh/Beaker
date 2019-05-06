<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Results;
use App\Question;
use App\Test;
use App\Answer;
use App\User;
use Charts;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Test::where([
            ['owner_id', auth()->id()]
        ])->get();
        //dd($tests);
        return view('welcome', compact('tests, users'));
    }
}
