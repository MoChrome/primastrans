@extends('layouts.main')

@section('container')
@include('partials/breadcrumbs')
    @foreach ($services as $service)
    <article class="mb-5">
        <h2>
            <a href="/services/{{ $service["slug"] }}">{{ $service["title"] }}</a>
        </h2>
        <h5>{{ $service["price"] }}</h5>
        <p>{{ $service["body"] }}</p>
    </article>
     @endforeach

@endsection