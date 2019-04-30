@extends('layout')

@section('title', 'Take a Test')

@section('content')

      <div class="testwrap">
<!--         <button class="prev default"><</button>
        <button class="next default">></button> -->
          @foreach ($test->questions as $question)
          <div class="questionwrap">
          <h5 class="test__question" name="questionName">{{ $question->description }}</h5>

            <div class="test__answers">
            @foreach ($question->answers as $answer)
              <button class="test__button">{{ $answer->description }}</button>
            @endforeach
            </div>

          </div>

          @endforeach
          <hr>
      </div>
  
@endsection

<style>
  .testwrap {
    background: lightgray;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }

  .questionwrap {
    height: 100vh;
    align-items: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
    width: 100%;
  }

  .questionName {
    text-align: center;
    padding: 20px;
  }

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
  }

  .cta {
    display: none !important;
  }


</style>