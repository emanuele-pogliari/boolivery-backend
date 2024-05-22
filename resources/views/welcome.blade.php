@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 rounded-3 jumbotron-welcome">
    <div class="container py-5 welcome-container">
        <div class="logo_laravel">
            <img src="{{Vite::asset('resources/img/Logo2.png')}}" alt="Boolivery-logo">
        </div>
        <h1 class="display-5 fw-bold">
            Welcome to Boolivery Admin Page
        </h1>

        <p class="col-md-8 fs-4">Questa è la pagina dove puoi modificare e aggiungere i tuoi piatti</p>
        <a href="{{ url('admin') }}" class="btn btn-primary btn-lg" type="button">Go to Admin</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora temporibus, dicta nemo aliquam totam nisi deserunt soluta quas voluptatum ab beatae praesentium necessitatibus minus, facilis illum rerum officiis accusamus dolores!</p>
    </div>
</div>
@endsection