@extends('layout')

@section('title', 'Take a Test')

@section('content')

<h1>Results</h1>
@foreach($results as $result)@endforeach
<h1>User ID: {{ $result->owner_id }}</h1>

@foreach ($answers as $answer)
<p>{{ $answer->description }}</p>
@endforeach


@endsection
