@extends('layouts.layout-dash')
@section('content-data')
@section('content')

<h3>Dashboard</h3>
<h6 style="margin-left: 100%"> Total: |{{ $FinishedCount + $OngoingCount + $DelayedCount }} </h6>
<h6 style="margin-left: 100%" >Completed: |{{ $FinishedCount }}</h6>
<br> @foreach ($board as $task )
<div class="card" style=" height:170px; width: 17rem; display: inline-block; border-radius: 10px; margin-right: 10px" >
    <div class="card-body" >
      <h3 class="card-title" >{{ $task->title }}</h3 >
        <h6>{{ $task->start}} </h6>
        <h6>{{ $task->pic }} </h6>
        <small>{{ $task->status }}</small>
    </div>
  </div>
  @endforeach

  {{-- <div class="panel" style="margin-right:10%">
    <div id="chart-nilai"></div>
  </div>

  @section('charts')
  <script src="https://code.highcharts.com/highcharts.js"></script>


  <script>Highcharts.chart('chart-nilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Project Status '
    },
    subtitle: {
        text: 'Project'
    },

    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Ongoing',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'Completed',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'Delayed',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }]
});
</script>
  @endsection --}}

     <br>
  <h6 style="margin-left: 100%" style="margin-bottom: "> On Going: |{{ $OngoingCount }} </h6> <br>
  <h6 style="margin-left: 100%"> Delayed: |{{ $DelayedCount }} </h6>

    @endsection
    @endsection


