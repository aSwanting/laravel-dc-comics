@extends('layouts.app')

@section('title', 'Add Comic')

@section('content')
    <div class="container p-5">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Comic Title</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="description">Comic Description</label>
                <textarea class="form-control" name="description" id="description" rows="2">Comic Description...</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb">Comic thumb</label>
                <input class="form-control" type="text" name="thumb" id="thumb" required>
            </div>
            <div class="mb-3">
                <label for="price">Comic price ($)</label>
                <input class="form-control" type="number" name="price" id="price" required>
            </div>
            <div class="mb-3">
                <label for="series">Comic series</label>
                <input class="form-control" type="text" name="series" id="series" required>
            </div>
            <div class="mb-3">
                <label for="sale_date">Comic Sale Date</label>
                <input class="form-control" type="date" name="sale_date" id="sale_date" required>
            </div>
            <div class="mb-3">
                <label for="type">Comic Type</label>
                <input class="form-control" type="text" name="type" id="type" required>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
