@extends('layouts.property-main')

@section('container')
    <h1>Halaman {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="mb-5">
            <a href="/property/{{ $post->slug }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <h5>Alamat : {{ $post->address }}</h5>
            <h5>{{ $post->floor_count }} Lantai</h5>
            <h5>{{ $post->bedroom_count }} Ruang Kamar</h5>
            <h5>{{ $post->toilet_count }} Toilet</h5>
            <h5>{{ $post->excerpt }}</h5>
        </article>
    @endforeach
@endsection
