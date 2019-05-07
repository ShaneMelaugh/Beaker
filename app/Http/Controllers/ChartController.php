<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\Results;
use App\Question;
use App\Test;
use App\Answer;
use App\User;
use DB;

class ChartController extends Controller
{
    public function userChart()
    {
        $users = Test::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
        $userChart = Charts::database($users, 'line', 'highcharts')
                  ->title("Monthly Tests Made")
                  ->elementLabel("Total Tests")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);

        $tests = Answer::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
        $testChart = Charts::database($tests, 'pie', 'highcharts')
                  ->title("Answers Assigned")
                  ->elementLabel("Total Answers")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);

        $questions = Question::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
        $questionChart = Charts::database($questions, 'bar', 'highcharts')
                  ->title("Questions Assigned")
                  ->elementLabel("Total Questions")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);


        return view('welcome', compact('userChart', 'testChart', 'questionChart'));
    }
}
