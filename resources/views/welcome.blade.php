@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard">
<section class="dashboard__section">
	<div class="card">
		<h3>Graphs</h3>
	</div>
	<div class="card">
		<div class="card__title">
			<p>My Tests</p>
			</div>
		<h1>Hello world</h1>
	</div>
</section>

<section class="dashboard__section">
	<div class="card">
		<div id="chart_div"></div>
	</div>
	<div class="card">
		<div class="card__title">
			<p>My Tests</p>
			</div>
			<div class="dashboard__testWrap">
			@foreach ($tests as $test)
			<div class="dashboard__tests">
			<p class="dashboard__tests--title">{{ $test->title }}</p>
			<a class="dashboard__tests--link" href="/tests/{{ $test->id }}/takeTest"><i class="fas fa-external-link-alt"></i></a>
			</div>
			@endforeach
			</div>
			
	</div>
</section>
</div>

 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mushrooms', 3],
          ['Onions', 1],
          ['Olives', 1],
          ['Zucchini', 1],
          ['Pepperoni', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


@endsection
