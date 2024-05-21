@extends('layouts.app')

@section ('content')

<div class="container py-5">

    <h1>Add a dish</h1>

    <form action="{{route('admin.dishes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
          
        <div class="mb-3 form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
          <label for="name" class="form-label">Dish Name</label>
          @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Dish Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" aria-describedby="imgHelper" value="{{old('image')}}">
            @error('image')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <small id="imgHelper" class="text-muted">(optional) Load an image: accepted format: jpg, jpeg, png</small>
        </div>

        <div class="mb-3 form-floating">
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" aria-describedby="descriptionHelper" >{{ old('description') }}</textarea>
            <label for="description" class="form-label">Description</label>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <small id="descriptionHelper" class="text-muted">(optional) Descrive your dish</small>
        </div>
        
        <div class="mb-3 form-floating">
            <input type="text" class="form-control @error('ingredients') is-invalid @enderror"  id="ingredients" name="ingredients" aria-describedby="ingredientsHelper" value="{{old('ingredients')}}">
            <label for="ingredients" class="form-label">Ingredients</label>
            @error('ingredients')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <small id="ingredientsHelper" class="text-muted">(optional) Insert dish ingredients </small>
            
        </div>
        
        <div class="mb-3 form-floating ">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" aria-describedby="priceHelper" value="{{old('price')}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <small id="descriptionHelper" class="text-muted">Insert price between 0 and 3000</small>
        </div>
        
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="1" id="visible" name="visible" aria-describedby="visibleHelper" checked>
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

          @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <button type="submit" class="btn btn-warning">Save</button>

    </form>
</div>


@endsection