@extends('layout')

@section('title', 'My Tests')

@section('content')

<div class="test__title">
  @foreach ($tests as $test) @endforeach
    <h3 class="test__heading">My Tests -       </h3><h3 class="test__heading testCount"> </h3>
    <input type="text" id="searchFilter" class="input-group-field input beaker__border test__search input__color" placeholder="Search for names..">
</div>
  @foreach ($tests as $test)
<div id="testWrap" class="testWrap">
     <p id="testView" class="accordion acordian testView__wrap" name="questionName">
      <a id="testTitle" class="testView__link" href="/tests/{{ $test->id }}">{{ $test->title }}</a>
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
