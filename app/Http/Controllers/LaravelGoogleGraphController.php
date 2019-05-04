<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LaravelGoogleGraphController extends Controller
{
    function index()
    {
    	$data = DB::table('answers')
    		->select(
    			DB::raw('count(completed) as completed'),
    			DB::raw('count(*) as number'))
    		->groupBy('completed')
    		->get();
    	$array[] = ['completed', 'number'];
    	foreach($data as $key => $value)
    	{
    		$array[++$key] = [$value->completed, $value->number];
    	}
    	return view('google_pie_chart')->with('completed', json_encode($array));
    }
}
