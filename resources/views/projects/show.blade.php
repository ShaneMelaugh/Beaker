@extends('layout')

@section('title', 'Tests')

@section('content') 

<h1>{{ $project->title }}</h1>

<p>{{ $project->description }}</p>

<p>
  <a href="/projects/{{ $project->id }}/edit" class="button__dashboard">Edit</a>
</p>

@if ($project->tasks->count())
<div class="task">
  
  @foreach ($project->tasks as $task)

    <form method="POST" class="" action="/tasks/{{ $task->id }}">
      @method('PATCH')
      @csrf
        <label class="checkbox" for="completed">

          <input type="checkbox" class="" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
            {{ $task->description }}
        </label>
    </form>

  @endforeach
</div>
@endif

<form class="task__inputWrap" method="POST" action="/projects/{{ $project->id }}/tasks">
  @csrf
    <input type="text" class="task__input" name="description" placeholder="new Question">
     <button type="submit" class="task__button">Add Question</button>
     @include ('errors')
  </form>

@endsection
