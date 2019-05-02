@extends('layout')

@section('title', 'Take a Test')

@section('content')

      <div class="test">
<!--         <button class="prev default"><</button>
        <button class="next default">></button> -->
          @foreach ($test->questions as $question)
          <div class="question__wrap">
          <h5 class="test__question" name="questionName">{{ $question->description }}</h5>

            @foreach($question->answers as $answer)@endforeach

            <form name="TestAnswer" class="test__answers" method="POST" action="/tests/{{ $test->id }}/results">
            @csrf
            @foreach ($question->answers as $answer)
              <button type="submit" name='testAnswer' class="test__button beaker border large button" value="{{ $answer->id }}">{{ $answer->description }}</button>
              

              @if ($answer->completed == 1)
                <script>
                console.log('answer is correct!');
                </script>
              @else 
              <script>
                console.log('wrong!');
              </script>
              @endif

            @endforeach
            </div>

          </div>

          @endforeach
          <hr>
      </div>  

@endsection

<style>
  .navbar__corner {
    display: none !important;
  }

  .navbar__top {
    display: none !important;
  }

  .navbar__left {
    display: none !important;
  }

  .content {
    margin: 0 !important;
    height: 100vh !important;
    padding: 0 !important;
  }

  .cta {
    display: none !important;
  }
</style>