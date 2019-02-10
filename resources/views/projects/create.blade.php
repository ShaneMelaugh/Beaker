@extends('layout')

@section('title', 'Create a new Test')

@section('content')

      <h1>Create a new test</h1>

      <form method="POST" class="form__wrap" action="/projects">

        {{ csrf_field() }}

        <input class="input {{ $errors->has('title') ? 'is-danger' : '' }}" type="text" name="title" value="{{ old('title') }}">
        <br/>
        <textarea class="input__textbox" name="description">{{ old('description') }}</textarea>
        <br/>
        <button type="submit" class="dashboard__button">Create Test</button>
      </form>

      @include ('errors')

      </div>

@endsection