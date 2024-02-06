@extends('layouts.app')
@section('heading')
    Dashboard
@endsection
@section('content')

    <div class="grid grid-cols-3 gap-10">
        <div class="bg-blue-600 text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Clients</h1>
            <h1 class="text-4xl font-bold">{{$totalclients}}</h1>
        </div>

        <div class="bg-red-600 text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Notices</h1>
            <h1 class="text-4xl font-bold">{{$totalnotices}}</h1>
        </div>

        <div class="bg-green-600 text-white rounded-lg flex justify-between py-4 px-2">
            <h1 class="text-xl">Total Blogs</h1>
            <h1 class="text-4xl font-bold">10</h1>
        </div>

        <div class="">
            <canvas id="myChart"></canvas>
          </div>

    </div>



      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

      <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
          type: 'line',
          fill: true,
          data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
              label: '# of Votes',
              data: [12, 19, 3, 5, 2, 3],
              borderWidth: 1
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
@endsection
