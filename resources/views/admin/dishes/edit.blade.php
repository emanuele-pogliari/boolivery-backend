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
            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image')}}">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3 form-floating">
            <textarea style="height: 150px;" type="text" class="form-control @error('description') is-invalid @enderror" id="name" name="description">{{ old('description') ?? $dish->description}}</textarea>
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

        {{-- QUESTO COMANDO NON FUNZIONA --}}

        <div class="mb-3 form-check my_visible">
            <input class="form-check-input my_check" type="checkbox" value="1" id="visible" name="visible" aria-describedby="visibleHelper" checked>
            <label class="form-check-label" for="visible">
                Visibile?
            </label>
            @error('visible')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <small id="descriptionHelper" class="text-muted d-block m-0">If this is checked your plates will be shown in your menu</small>
        </div>

        {{-- / QUESTO COMANDO NON FUNZIONA / --}}

        <div class="d-flex gap-3">
            <button type="submit" class="btn btn-primary my_submit_btn">Submit</button>
            <a href="{{route('admin.index')}}" class="btn  my_form_btn">Back</a>
        </div>
    </form>
</div>
@endsection