@extends('layout')

@section('title', 'Tests')

@section('content') 

<h1>{{ $project->title }}</h1>

<p>{{ $project->description }}</p>

<p>
  <a href="/projects/{{ $project->id }}/edit" class="button__dashboard">Edit</a>
</p>

@if ($project->tasks->count())
<div class="">
  
  @foreach ($project->tasks as $task)
<div class="task">
    <form method="POST" class="" action="/tasks/{{ $task->id }}">
      @method('PATCH')
      @csrf
          <h3 type="checkbox" class="" name="questionName">
            {{ $task->description }}
        </h3>
        </form>

        <br>
        <label>Answers:</label>
        <br>

        <form>
        @forelse ($task->answers as $answer)
          
          {{ $answer->description }}
          <li>
          <input type="checkbox" name="" value="">
          </li>
        @empty
          <li> No Answers yet </li>
        @endforelse

        </form>

        <form method="POST" action="/tasks/{{ $task->id}}/answer">
        @csrf
        <input type="text" class="" name="answer">
        </form>
    
</div>
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
