@extends('layouts.main')

@section('container')
@include('partials.breadcrumbs')
    <h1>Halaman About</h1>
    <h3>{{ $profile['name'] }}</h3>
    <h3>{{ $profile['email'] }}</h3>
    <img src="img/{{ $profile['image'] }}" alt="{{ $profile['image'] }}" width="200" class="img-thumbnail rounded-circle">
@endsection