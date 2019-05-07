@extends('layout')

@section('title', 'Take a Test')

@section('content')

  @foreach ($answers as $answer)@endforeach
  <hr class="test__rule">
      <section class="results">

      <div class="results__answerWrap">
          @foreach ($answers as $answer)
          <section class="results__answer--wrap">
          	<div id="{{ $answer->completed }}" class="results__answer">
          	<p class="results__answer--heading">{{ $answer->description }}</p>
          	</div>
          <div class="results__answer--mark">
            <p class="results__answer--heading {{ $answer->completed }}">{{ $answer->completed }}</p>
          </div>
          </section>
          @endforeach
      </div>

	      <div class="results__statWrap">
	      	<div class="results__info">
	      		<h3 class="results__info--heading">Your Result is:</h3>
	      		<div class="results__total">
              @foreach($results as $result)@endforeach
              <h2 class="results__total--correct"></h2>
              <h2 class="results__total--number">/</h2>
	      		</div>
	      		<div class="results__buttons">
	      			<button class="button beaker results__button"><a class="results__button" href="{{ url('/') }}">Return to Dashboard</a></button>	
	      		</div>
	      	</div>
	      </div>
        <hr class="test__rule">
	  </section>




@endsection


