@extends('layout')

@section('title', 'Take a Test')

@section('content')

  @foreach ($answers as $answer)@endforeach
     <p id="testView" class="accordion acordian results__header" name="answerName">
    </p>

      <section class="results">

      <div class="results__answerWrap">
          @foreach ($answers as $answer)
          <section class="results__answer--wrap">
          	<div class="results__answer">
          	<p>{{ $answer->description }}</p>
          	  @if ($answer->completed == 1)
          	  <style>.results__answer {background-color: red;}</style>
              @else 
              <style>.results__answer {background-color: green;}</style>
              @endif
          	</div>
          <div class="results__answer--mark"></div>
          </section>
          @endforeach
      </div>

	      <div class="results__statWrap">
	      	<div class="results__info">
	      		<h3 class="results__info--heading">Your Result is:</h3>
	      		<div class="results__total">
	      			
	      		</div>
	      		<div class="results__buttons">
	      			<button class="button beaker results__button">Return to Dashboard</button>
	      			<button class="button beaker results__button">Print Results</button>
	      			
	      		</div>
	      	</div>
	      </div>
	  </section>



@endsection


