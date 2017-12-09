@extends('layouts.master')
@section('title', 'Ciudadela Educativa Cooedumag - Blog')
@section('content')
    @component('components.banner') @endcomponent
    <div class="blog">
        <div class="content">
            <h1>Blog</h1>
            <div class="blog__contain">
                @foreach($blog as $b)
                    <div class="blog__contain__content">
                        <a href="{{ url("/blog/".str_slug($b->name)."/".$b->id) }}">
                            <img src="{{ asset($b->image) }}" alt="Cooedumag blog">
                            <p>{{ $b->name }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection