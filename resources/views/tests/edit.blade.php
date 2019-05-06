@extends('layout')

@section('title', 'Edit a Test')

@section('content') 

     <form method="POST" class="" task="question" action="/tests/{{ $test->id }}">

        @method('PATCH')
        @csrf

        <input type="text" class="input beaker__border input__color" name="title" pladeholder="Test Title" value="{{ $test->title }}">
        <br/>
        <textarea name="description" class="input input__textarea beaker__border input__color" placeholder="Test Description">{{ $test->description }}</textarea>
        <br/>
        <button type="submit" class="button success">Update Test</button>
      </form>

      <form method="POST" action="/test/{{ $test->id }}">

        @method('DELETE')
        @csrf

        <button type="submit" class="danger button">Delete Test</button>
      </form>

@endsection