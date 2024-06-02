@extends('layouts.app')

@section ('content')
<div class="container py-5">

    <div class="card shadow-lg">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="{{ str_starts_with($dish->image, 'http') ? $dish->image : asset('storage/' . $dish->image)}}" class="img-fluid rounded-start" alt="Dish Image" style="max-height: 100%; object-fit: cover;">
            </div>
            <div class="col-md-6">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{$dish->name}}</h4>
                    <p class="card-text">
                        <span class="text-muted">Description:</span> {{$dish->description}}
                    </p>
                    <p class="card-text">
                        <span class="text-muted">Ingredients:</span> {{$dish->ingredients}} 
                    </p>
                    <p class="card-text">
                        <span class="text-muted">Price:</span> <span class="text-success">€ {{$dish->price}}</span>
                    </p>
                    <p class="card-text">
                        <span class="text-muted">Visible:</span> 
                        @if ($dish->visible == 1)
                            <span class="text-success">Yes</span>
                        @else
                            <span class="text-danger">No</span>
                        @endif
                    </p>
                    <div class="d-flex gap-2 align-items-center mt-4">
                        <a href="{{route('admin.dishes.edit', $dish->id)}}" class="btn reg-button">Edit</a>       
                        <a href="{{route('admin.index')}}" class="btn btn reg-button">Back</a>       
                        <button type="button" class="btn btn reg-button" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal per confermare l'eliminazione -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Dish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    Are you sure you want to delete the dish "<strong>{{$dish->name}}</strong>"?
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn reg-button" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{route('admin.dishes.destroy', $dish->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn del-btn reg-button">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
    }
    .card-body {
        padding: 1.5rem;
    }
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }
    .card-text {
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 1rem;
    }
    .text-muted {
        color: #6c757d;
        font-weight: 500;
    }
    .text-success {
        font-weight: bold;
    }
    .text-danger {
        font-weight: bold;
    }
    .btn {
        min-width: 120px;
    }
    .btn-warning, .btn-primary, .btn-danger {
        font-size: 1rem;
        font-weight: bold;
    }
    .modal-title {
        font-size: 1.25rem;
        font-weight: bold;
    }
    .modal-body {
        font-size: 1.1rem;
    }
</style>


