@extends('layouts.app')

@section('content')

<div class="container">
  <h2 class="my-5 text-center">Statistics</h2>
  <div class="d-flex justify-content-end">
  <a href="{{ route('admin.orders.index') }}" class="btn add-dish-button return-order">Return to Orders</a>
</div>
    <div class="chart-container ">
      <h2 class="mb-3">Number of Orders</h2>
    
      <div class="container rounded-5 mb-5 p-4 chart-order-container">
        <canvas id="ordersChart"></canvas>
    </div>

    <h2 class="mb-3">Revenue</h2>
    
    <div class="container rounded-5 mb-5 p-4 chart-revenue-container">
        <canvas id="revenueChart"></canvas>
    </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ordersCtx = document.getElementById('ordersChart').getContext('2d');
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');

    const ordersPerMonth = @json(array_values($ordersPerMonth));
    const revenuePerMonth = @json(array_values($revenuePerMonth));

    new Chart(ordersCtx, {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
          label: '# of Orders',
          data: ordersPerMonth,
          borderWidth: 1,
          backgroundColor: 'rgba(245, 39, 82, 0.8)',
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

    new Chart(revenueCtx, {
      type: 'bar',
      data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        datasets: [{
          label: 'Revenue (€)',
          data: revenuePerMonth,
          borderWidth: 1,
          backgroundColor: 'rgba(245, 39, 82, 0.8)',
          borderColor: 'rgba(75, 192, 192, 1)',
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


<style lang="scss" scoped>

  .chart-order-container, .chart-revenue-container{
    background-color: #f0f0eb;
  }



</style>