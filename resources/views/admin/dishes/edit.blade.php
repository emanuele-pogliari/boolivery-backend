@extends('layouts.app')

@section('content')
    
    <form action="{{route('admin.dishes.update', $dish->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label text-capitalize">Dish Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$dish->name}}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label text-capitalize">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{$dish->image}}">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label text-capitalize">Description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{$dish->description}}">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ingredients" class="form-label text-capitalize">Ingredients</label>
            <input type="text" class="form-control @error('ingredients') is-invalid @enderror" name="ingredients" value="{{$dish->ingredients}}">
            @error('ingredients')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label text-capitalize">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$dish->price}}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="visible" class="form-check-input text-capitalize">Visible</label>
            <input type="text" class="form-control" name="visible" value="{{$dish->visible}}">
        </div>

       
        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('admin.dishes.index')}}" class="btn btn-secondary">Back</a>
        </div>
    </form>
@endsection