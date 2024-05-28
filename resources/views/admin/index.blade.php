
@extends ('layouts.app')
@section('content')

<div class="py-5 d-flex row justify-content-center w-100">
    @foreach($restaurants as $restaurant)
    <h1 class="text-center mb-4">Welcome in "{{$restaurant->name}}" Home! </h1>

    <img class="restaurant-img" src="{{asset('storage/' . $restaurant->image)}}" alt="">

    <div class="row mb-5">

        <div class="section-one-container">
            
            <div class="badge-container">

                @foreach($restaurant->types as $type)
                        <p class="badge rounded-pill custom_badge mt-5">{{$type->type}}</p>
                @endforeach
            </div>

        </div>
    @endforeach
        



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
            <a href="{{route('admin.orders.index')}}" class="add-dish-button">Riepilogo Ordini</a>                          
        </div>
</div>


@endsection