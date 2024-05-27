@extends('layouts.app')
@section('content')

<div class="container">
<table class="table mt-5">
    <thead>
      <tr>
        {{-- <th scope="col">#</th> --}}
        <th scope="col">Customer Name</th>
        <th scope="col">Customer Last Name</th>
        <th scope="col">Customer Address</th>
        <th scope="col">Customer Email</th>
        <th scope="col">Customer Phone</th>
        <th scope="col">Total Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Customer Note</th>
        <th scope="col">Created At</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($orders as $order)
      <tr>
        {{-- <th scope="row">{{$order->id}}</th> --}}
        <td>{{$order->customer_name}}</td>
        <td>{{$order->customer_last_name}}</td>
        <td>{{$order->customer_address}}</td>
        <td>{{$order->customer_email}}</td>
        <td>{{$order->customer_phone}}</td>
        <td>€ {{$order->total_price}}</td>
        <td>{{$order->quantity}}</td>
        <td>{{$order->customer_note}}</td>
        <td>{{$order->created_at}}</td>
      </tr>
    @endforeach
      
    </tbody>
  </table>
</div>

@endsection