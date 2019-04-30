@extends('layout')

@section('title', 'My Tests')

@section('content')

    <h1>My Tests</h1>

  @foreach ($tests as $test)
<div class="">
     <p id="testView" class="accordion acordian testView__wrap" name="questionName">
      <a href="/tests/{{ $test->id }}">{{ $test->title }}</a>
      <a class="testView__icon" href="/tests/{{ $test->id }}/takeTest"><i class="fas fa-external-link-alt"></i></a>
    </p>
      

        <div class="accordion__panel testDesc">
        <div class="accordion__panel--content">

          <p>{{ $test->description }}</p>

        </div>
        </div>

</div>
  @endforeach

@endsection


<!-- 

  @foreach ($tests as $test)
<div class="">
     <p name="questionName"><a href="/tests/{{ $test->id }}">{{ $test->title }}</a></p>

        <div class="accordion__panel">
        <div class="accordion__panel--content">

          <p>{{ $test->description }}</p>

        </div>
        </div>

</div>
  @endforeach

-->