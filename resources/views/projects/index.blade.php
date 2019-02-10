@extends('layout')

@section('title', 'My Tests')

@section('content')

    <h1>My Tests</h1>

      @foreach ($projects as $project) 
      <div class="tests__wrap">
        <h1 class="tests__name">
          <a class="tests__name--link" href="/projects/{{ $project->id }}">
          {{ $project->title }}
          </a>
        </h1>


        <h4 class="tests__desc">{{ $project->description }}</h4>
       </div>

      @endforeach

@endsection
