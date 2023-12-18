@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <div class="container-fluid">
        <h1 class="text-center mb-3">Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Sale Date</th>
                    <th>Type</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>${{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td><a href="{{ route('comics.show', $comic) }}">Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
