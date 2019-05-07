@extends('layout')

@section('title', 'Take a Test')

@section('content')
<!-- <form clas="formwrap" method="POST" action="/tests/{{ $test->id }}/results">
 -->      <div class="test">
<!--         <button class="prev default"><</button>
        <button class="next default">></button> -->
          @foreach ($test->questions as $question)
        <div class="question__wrap">
          <h5 class="test__question" name="questionName">{{ $question->description }}</h5>

            @foreach($question->answers as $answer)@endforeach


<form onsubmit="return false;" test_id="{{$test->id}}" qid="{{$question->id}}" name="TestAnswer" id="test-answers-{{$test->id}}" class="test__answers test-answers" method="POST" action="/tests/{{ $test->id }}/results">
            @csrf
            
            <input id="test-{{$test->id}}-{{$question->id}}-answer" name="answer" type='hidden' value=0>
            

            @foreach ($question->answers as $answer)
              <button tid="{{$test->id}}" qid="{{$question->id}}" id="{{$test->id}}-answer-{{ $answer->id }}" name='testAnswer' class="test__button beaker border large button" value="{{ $answer->id }}">{{ $answer->description }} {{ $answer->id }}</button>
            @endforeach
            
          </form>
        </div>
        <hr class="test__rule">
          @endforeach
          <button ></button>
          <hr>
          <div class="test__submitWrap">
          <button class="test__submit"><a href="/tests/{{ $test->id }}/results">Submit</a></button>  
          </div>
      </div>
</form>

@endsection

<!-- <script>
  $(document).ready( function () {

    var answerLink = ('/tests/{{ $test->id }}/results');

    $('#test-answers .test__button').submit( function () {
      var formdata = $(this).serialize();
      $.ajax({
          type: "POST",
          url: answerLink,
          data: formdata,
       });
      return false;
    });
  });
</script> -->

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

  .formwrap {
    border: 2px solid red;
  }
</style>