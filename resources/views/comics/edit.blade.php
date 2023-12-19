@extends('layouts.app')

@section('title', 'Edit Comic')

@section('content')
    <div class="container p-5">

        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title">Comic Title</label>
                <input class="form-control" type="text" name="title" id="title" required value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label for="description">Comic Description</label>
                <textarea class="form-control" name="description" id="description" rows="2">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb">Comic thumb</label>
                <input class="form-control" type="text" name="thumb" id="thumb" required
                    value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price">Comic price ($)</label>
                <input class="form-control" type="number" name="price" id="price" required
                    value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label for="series">Comic series</label>
                <input class="form-control" type="text" name="series" id="series" required
                    value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label for="sale_date">Comic Sale Date</label>
                <input class="form-control" type="date" name="sale_date" id="sale_date" required
                    value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label for="type">Comic Type</label>
                <input class="form-control" type="text" name="type" id="type" required
                    value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
