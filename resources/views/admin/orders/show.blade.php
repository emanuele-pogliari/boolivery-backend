@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dettaglio Ordine #{{ $order->id }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Piatto</th>
                <th scope="col">Quantità</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->dishes as $dish)
                <tr>
                    <td>{{ $dish->name }}</td>
                    <td>{{ $dish->quantity }}</td>
                    <td>€ {{ $dish->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Dettagli Cliente</h2>
    <p><strong>Nome:</strong> {{ $order->customer_name }}</p>
    <p><strong>Cognome:</strong> {{ $order->customer_last_name }}</p>
    <p><strong>Indirizzo:</strong> {{ $order->customer_address }}</p>
    <p><strong>Email:</strong> {{ $order->customer_email }}</p>
    <p><strong>Telefono:</strong> {{ $order->customer_phone }}</p>
    
    <h2>Totale Ordine</h2>
    <p>€ {{ $order->total_price }}</p>

    <a href="{{ route('admin.orders.index') }}" class="btn btn-primary">Back to Orders</a>
</div>
@endsection