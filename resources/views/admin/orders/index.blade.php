@extends('layouts.app')

@section('content')
<div class="container">
    @if(count($orders) == 0)
        <div class="position-absolute no-order-msg text-center">
            <div class="mb-3">No orders yet</div>
            <a href="{{ route('admin.index') }}" class="btn btn-primary add-dish-button">Back to Home</a> 
        </div>
    @else
        <div class="mt-5">
            <a href="{{ route('admin.index') }}" class="btn btn-primary add-dish-button">Back to Home</a> 
            <a href="{{ route('admin.statistics.index') }}" class="btn btn-primary add-dish-button">Show Chart</a> 
            <table class="table table-hover mt-5">
                <thead>
                    <tr>
                        <th scope="col" class="align-middle">Name</th>
                        <th scope="col" class="align-middle">Last Name</th>
                        <th scope="col" class="align-middle">Address</th>
                        <th scope="col" class="align-middle">Email</th>
                        <th scope="col" class="align-middle">Phone</th>
                        <th scope="col" class="align-middle">Total Price</th>
                        <th scope="col" class="align-middle">Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr onclick="window.location='{{ route('admin.orders.show', $order->id) }}';" style="cursor:pointer;">
                        <td>{{ $order->customer_name }}</td>
                        <td>{{ $order->customer_last_name }}</td>
                        <td>{{ $order->customer_address }}</td>
                        <td>{{ $order->customer_email }}</td>
                        <td>{{ $order->customer_phone }}</td>
                        <td>€{{ $order->total_price }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y H:i') }}</td>
                    </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection

<style lang="scss" scoped>
    .no-order-msg {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 1.5rem;
        font-weight: bold;

        .add-dish-button {
            margin-top: 1rem;
            font-size: 1rem;
            font-weight: bold;
        }
    }

    /* Stili per la tabella */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tbody tr:hover {
        background-color: #f5f5f5;
    }

    .add-dish-button {
        margin-top: 1rem;
    }
</style>


