
@extends('layout')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard">
<section class="dashboard__section--single">
	<div class="card__title">
		<p>Tests</p>
	</div>
	<div class="card chart">
		{!! $userChart->html() !!}
	</div>
</section>

<section class="dashboard__section">
	<div class="card">
	<div class="card__title">
		<p>Answers</p>
	</div>
		<div id="chart_div">
      {!! $testChart->html() !!}
    </div>
	</div>
	<div class="card">
		<div class="card__title">
			<p>Questions</p>
			</div>
			<div class="dashboard__testWrap">
				{!! $questionChart->html() !!}
			</div>
			
	</div>
</section>
</div>
{!! Charts::scripts() !!}
{!! $userChart->script() !!}
{!! $testChart->script() !!}
{!! $questionChart->script() !!}

@endsection
