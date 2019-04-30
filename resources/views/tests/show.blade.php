@extends('layout')

@section('title', 'Tests')

@section('content') 

<h3>{{ $test->title }}</h3>

<p>{{ $test->description }}</p>

<h6>
  <a href="/tests/{{ $test->id }}/edit" class="button__dashboard">Edit</a>
</h6>

@if ($test->questions->count())
<div class="">
  
  @foreach ($test->questions as $question)
<div class="task">
    <form method="POST" class="accordion acordian" action="/questions/{{ $question->id }}">
      @method('PATCH')
      @csrf
     <p name="questionName">{{ $question->description }}</p>
     </form>


        <div class="accordion__panel">
        <div class="accordion__panel--content">

        <label>Answers:</label>
        <form class="answer__wrap">
        @forelse ($question->answers as $answer)
          
          
          <form method="POST" id="{{$answer->id}}" class="answer__wrap" action="/answer/{{ $answer->id }}">
            @method('PATCH')
            @csrf
          <label>{{ $answer->id}} {{ $answer->description }}</label>
          <input type="checkbox" name="completed" class="answer__checkbox" onChange="this.form.submit()">
          </form>
          <hr>

        @empty
          <p> No Answers yet </p>
        @endforelse

        </form>

        <form method="POST" action="/questions/{{ $question->id }}/answer">
        @csrf
        <input type="text" class="" name="answer">
        </form>

</div>
</div>

</div>
  @endforeach
</div>
@endif

<form class="question__add" method="POST" action="/tests/{{ $test->id }}/questions">
  @csrf
        <div class="input-group ">
            <input class="input-group-field input beaker__border" name="description" placeholder="new Question" type="text">
            <div class="input-group-button">
                <input type="submit" class="beaker input__button" value="Add Question">
            </div>
            @include ('errors')
  </form>


@endsection
