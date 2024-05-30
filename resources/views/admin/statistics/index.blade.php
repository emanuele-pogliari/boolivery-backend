@extends('layouts.app')

@section('content')

<div class="container">
    
    <div>
        <canvas id="myChart"></canvas>
    </div>

    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Torna agli Ordini</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    
    const ordersPerMonth = @json($ordersPerMonth);

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
          label: '# of Orders',
          data: ordersPerMonth,
          borderWidth: 1,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
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