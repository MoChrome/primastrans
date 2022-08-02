
@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["price"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/services">Back</a>
@endsection