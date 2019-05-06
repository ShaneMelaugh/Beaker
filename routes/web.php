<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index');
Route::get('/', 'ChartController@userChart');
Route::get('/theme', 'HomeController@theme');

Route::resource('tests', 'TestsController');

// ->middleware('can:update,project')

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');

Route::post('/tests/{test}/questions', 'TestQuestionsController@store');
Route::patch('/questions/{question}', 'TestQuestionsController@update');
Route::post('/questions/{question}/answer', 'TestQuestionsController@answers');
Route::patch('/answer/{answer}', 'AnswerController@update');
Route::get('/tests/{test}/takeTest', 'TestQuestionsController@takeTest');
Route::post('/tests/{test}/results', 'ResultsController@results');
Route::get('/google_pie_chart', 'LaravelGoogleGraphController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/theme', function() {
	return view('theme');
});