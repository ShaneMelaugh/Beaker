@extends('layout')

@section('title', 'Take a Test')

@section('content')
<!-- <form clas="formwrap" method="POST" action="/tests/{{ $test->id }}/results">
 -->      <div class="test">
<!--         <button class="prev default"><</button>
        <button class="next default">></button> -->
        <button class="scroll test__moveButtonNext">next</button>
        <button class="scroll2 test__moveButtonPrev">prev</button>
          @foreach ($test->questions as $question)
        <div class="question__wrap">
          <h5 class="test__question" name="questionName">{{ $question->description }}</h5>

            @foreach($question->answers as $answer)@endforeach

          <form name="TestAnswer" id="test-answers" class="test__answers" method="POST" action="/tests/{{ $test->id }}/results">
            @csrf
            @foreach ($question->answers as $answer)
              <button name='testAnswer' class="test__button beaker border large button" value="{{ $answer->id }}">{{ $answer->description }} {{ $answer->id }}</button>
            @endforeach
          </form>
        </div>
          @endforeach
          <button ></button>
          <hr>
      </div>
      <button><a href="/tests/{{ $test->id }}/results">Submit</a></button>  
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