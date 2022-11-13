@extends('layouts.property-main')

@section('container')
    <h1>Halaman Categories</h1>

    @foreach ($categories as $category)
        <ul>
            <li>
                <h2><a href="/property/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    @endforeach
@endsection
