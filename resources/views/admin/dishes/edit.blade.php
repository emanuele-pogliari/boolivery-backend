@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <form action="{{route('admin.dishes.update', $dish->id)}}" method="POST" enctype="multipart/form-data" class="my_form">
        @csrf
        @method('PUT')

        <div class="mb-3 form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $dish->name}}" required title="Must insert a name">
            <label for="name" class="form-label text-capitalize">Dish Name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label text-capitalize">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image')}}">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-floating">
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="name" name="description" value="{{ old('description') ?? $dish->description}}">
            <label for="description" class="form-label text-capitalize">Description</label>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-floating">
            <input type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients" value="{{ old('ingredients') ?? $dish->ingredients}}" required">
            <label for="ingredients" class="form-label text-capitalize">Ingredients</label>
            @error('ingredients')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-floating">
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') ?? $dish->price}}" required title="Must insert a price">
            <label for="price" class="form-label text-capitalize">Price</label>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="1" id="visible" name="visible" checked>
            <label class="form-check-label" for="visible">
                Visibile?
            </label>
          </div>

        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('admin.index')}}" class="btn btn-secondary">Back</a>
        </div>
    </form>
</div>
@endsection