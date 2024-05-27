@extends('layouts.app')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Total Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Customer Last Name</th>
        <th scope="col">Customer Address</th>
        <th scope="col">Customer Email</th>
        <th scope="col">Customer Phone</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th scope="row">1</th>
        <td>€ 28,00</td>
        <td>3</td>
        <td>Sergio</td>
        <td>Rossi</td>
        <td>Via Antonucci, 28</td>
        <td>sergiorossi@mail.it</td>
        <td>+39 3514875962</td>
      </tr>
      
    </tbody>
  </table>

@endsection