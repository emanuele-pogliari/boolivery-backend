@extends ('layouts.app')
@section('content')

<h1>prova</h1>

@foreach($dishes as $dish)
<div>{{$dish->name}}</div>
@endforeach

@endsection