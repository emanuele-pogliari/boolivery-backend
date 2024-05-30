@extends('layouts.app')
@section('content')

@php
    use Carbon\Carbon;
@endphp

<div class="container">
<table class="table table-hover mt-5">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Address</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Total Price</th>
        <th scope="col">Order Date</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($orders as $order)
    <tr onclick="window.location='{{ route('admin.orders.show', $order->id) }}';" style="cursor:pointer;">
      <td class="align-middle">{{$order->customer_name}}</td>
      <td class="align-middle">{{$order->customer_last_name}}</td>
      <td class="align-middle">{{$order->customer_address}}</td>
      <td class="align-middle">{{$order->customer_email}}</td>
      <td class="align-middle">{{$order->customer_phone}}</td>
      <td class="align-middle">€ {{$order->total_price}}</td>
      <td class="align-middle">{{ Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
    </tr>    
      
    @endforeach
      
    </tbody>
  </table>

  <a href="{{route('admin.statistics.index')}}" class="add-dish-button">Show Chart</a> 

</div>

@endsection