@extends ('layouts.app')
@section('content')

<h1>prova</h1>

{{-- @foreach($dishes as $dish)
<div>{{$dish->name}}</div>
@endforeach --}}

    @foreach ($dishes as $dish)
    
        <p>{{$dish->name}} <a class="btn btn-info" href="{{route('admin.dishes.show', $dish->id)}}">Visualizza</a></p>
        
    @endforeach

@endsection