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
        $users = User::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
        $userChart = Charts::database($users, 'line', 'highcharts')
                  ->title("Monthly new Register Users")
                  ->elementLabel("Total Users")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);

        $tests = Test::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))
                    ->get();
        $testChart = Charts::database($tests, 'pie', 'highcharts')
                  ->title("Tests Created")
                  ->elementLabel("Total Users")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupByMonth(date('Y'), true);


        return view('welcome', compact('userChart', 'testChart'));
    }
}
