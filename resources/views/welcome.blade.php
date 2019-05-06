
@extends('layout')

@section('title', 'Dashboard')

@section('content')

<div class="dashboard">
<section class="dashboard__section--single">
	<div class="card chart">
		{!! $userChart->html() !!}
	</div>
</section>

<section class="dashboard__section">
	<div class="card">
		<div id="chart_div">
      {!! $testChart->html() !!}
    </div>
	</div>
	<div class="card">
		<div class="card__title">
			<p>My Tests</p>
			</div>
			<div class="dashboard__testWrap">
			</div>
			
	</div>
</section>
</div>
{!! Charts::scripts() !!}
{!! $userChart->script() !!}
{!! $testChart->script() !!}

@endsection
