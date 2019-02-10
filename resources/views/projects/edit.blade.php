@extends('layout')

@section('title', 'Edit a Test')

@section('content') 

	   <form method="POST" class="task" action="/projects/{{ $project->id }}">

      	@method('PATCH')
      	@csrf

        <input type="text" class="input" name="title" pladeholder="Project Title" value="{{ $project->title }}">
        <br/>
        <textarea name="description" class="input__textbox" placeholder="Project Description">{{ $project->description }}</textarea>
        <br/>
        <button type="submit" class="dashboard__button">Update Test</button>
      </form>

      <form method="POST" action="/projects/{{ $project->id }}">

      	@method('DELETE')
      	@csrf

      	<button type="submit" class="dashboard__button">Delete Test</button>
      </form>

@endsection