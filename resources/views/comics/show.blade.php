@extends('layouts.app')

@section('title', $comic->title)

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">{{ $comic->title }}</h1>
        <div class="row mb-5 justify-content-center">

            <div class="col-4">
                <img class="img-fluid" src="{{ $comic->thumb }}">
            </div>

            <div class="col-6">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span class="fw-bold">Title: </span>{{ $comic->title }}</li>
                    <li class="list-group-item"><span class="fw-bold">Description: </span>{{ $comic->description }}</li>
                    <li class="list-group-item"><span class="fw-bold">Price: </span>${{ $comic->price }}</li>
                    <li class="list-group-item"><span class="fw-bold">Series: </span>{{ $comic->series }}</li>
                    <li class="list-group-item"><span class="fw-bold">Sale Date: </span>{{ $comic->sale_date }}</li>
                    <li class="list-group-item"><span class="fw-bold">Type: </span>{{ $comic->type }}</li>
                </ul>
            </div>

        </div>
        <a href="{{ route('comics.index') }}" class="d-block text-center">Back to Index</a>
    </div>
@endsection
