@extends ('layouts.app')
@section('content')

<h1>prova</h1>


    @foreach ($dishes as $dish)
    
        <p>{{$dish->name}} <a class="btn btn-info" href="{{route('admin.dishes.show', $dish->id)}}">Visualizza</a></p>
        
    @endforeach

    <div class="card align-items-center justify-content-center bg-secondary" style="width: 18rem;">
        <a href="{{route('admin.dishes.create')}}" class="btn btn-info">Aggiungi Piatto</a>                          
    </div>

@endsection