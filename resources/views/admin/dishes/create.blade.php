@extends('layouts.app')

@section ('content')

<div class="container py-5">

    <h1>Aggiungi un piatto</h1>

    <form action="{{route('...')}}" method="POST">
        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
          @error('name')
          <div class="invalid-feedback">
              {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image')}}">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredienti</label>
            <input type="text" class="form-control @error('ingredients') is-invalid @enderror"  id="ingredients" name="ingredients" value="{{old('ingredients')}}">
            @error('ingredients')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="" id="visible" name="visible" checked>
            <label class="form-check-label" for="visible">
                Visibile?
            </label>
            @error('visible')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
          </div>

        <button type="submit" class="btn btn-primary">Salva</button>

    </form>
</div>


@endsection