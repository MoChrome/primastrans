@extends('layouts.property-main')

@section('container')
    <article class="mb-5">
        <h2>{{ $post->title }}</h2>
        <p>By Chevi in <a href="/property/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <h5>Alamat : {{ $post->address }}</h5>
        <h5>{{ $post->floor_count }} Lantai</h5>
        <h5>{{ $post->bedroom_count }} Ruang Kamar</h5>
        <h5>{{ $post->toilet_count }} Toilet</h5>
        {!! $post->description !!}

        <a href="/property">Go back</a>
    </article>
@endsection
