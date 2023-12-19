@extends('layouts.app')

@section('title', 'News')

@section('content')

    <div class="route-name">
        <h1>{{ Route::currentRouteName() }}</h1>
    </div>

@endsection
