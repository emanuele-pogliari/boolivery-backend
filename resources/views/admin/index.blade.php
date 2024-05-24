
@extends ('layouts.app')
@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4">I tuoi Piatti</h1>

    <div class="row mb-5">

        <div class="section-one-container">
        @foreach($restaurants as $restaurant)
        <span class="restaurant-name">{{$restaurant->name}}</span>
        <img src="{{asset('storage/' . $restaurant->image)}}" alt="">
        <div class="badge-container">
        @foreach($restaurant->types as $type)
                <span class="badge rounded-pill text-bg-light custom-badge">{{$type->type}}</span>
        @endforeach
        </div>
        @endforeach
        </div>

        



    @foreach ($dishes as $dish)

        <div class="col-3 card card-container">
            <img src="{{asset('storage/' . $dish->image)}}" class="card-img-top img-fluid" alt="">
            <div class="card-body text-center">
                <h5 class="card-title">{{$dish->name}}</h5>
                <p class="card-text">{{$dish->price}} €</p>
                <a class="show-button" href="{{route('admin.dishes.show', $dish->id)}}">Visualizza</a>
            </div>
        </div>
    @endforeach
</div>
        <div class="align-items-center text-center">
            <a href="{{route('admin.dishes.create')}}" class="add-dish-button">Aggiungi Piatto</a>
            <a href="{{route('admin.orders')}}" class="add-dish-button">Riepilogo Ordini</a>                          
        </div>
</div>


@endsection