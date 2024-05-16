
@extends ('layouts.app')
@section('content')

<div class="container py-5">
    <h1 class="text-center mb-4">Index</h1>

    <div class="row mb-5">
    @foreach ($dishes as $dish)

        <div class="col-3 card">
            <img src="" class="card-img-top img-fluid" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$dish->name}}</h5>
                <p class="card-text">{{$dish->price}} €</p>
                <a class="btn btn-info" href="{{route('admin.dishes.show', $dish->id)}}">Visualizza</a>
            </div>
        </div>
    @endforeach
</div>
        <div class="align-items-center text-center">
            <a href="{{route('admin.dishes.create')}}" class="btn btn-primary">Aggiungi Piatto</a>                          
        </div>
</div>


@endsection