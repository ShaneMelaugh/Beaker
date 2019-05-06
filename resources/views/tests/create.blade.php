@extends('layout')

@section('title', 'Create a new Test')

@section('content')

      <h3>Create a new test</h3>

      <form method="POST" class="" action="/tests">

        {{ csrf_field() }}

        <input class="input beaker__border input__color {{ $errors->has('title') ? 'danger__border' : '' }}" type="text" name="title" value="{{ old('title') }}">
        <br/>
        <textarea class="input input__textarea beaker__border input__color" name="description">{{ old('description') }}</textarea>
        <br/>
        <button type="submit" class="button success">Create Test</button>
      </form>

      @include ('errors')

      </div>

@endsection