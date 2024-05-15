@extends('layouts.app')

@section ('content')

<div class="container py-5">
    <h1>{{$dish->name}}</h1>

    <img src="{{$dish->image}}" alt="">

    <p>
        {{$dish->description}}
    </p>

    <p>
        {{$dish->ingredients}}
    </p>

    <p>
        {{$dish->price}}
    </p>

    <div class="py-5">
        <a href="{{route('admin.dishes.edit', $dish->id)}}" class="btn btn-warning">Modifica</a>       
    </div>

</div>

@endsection