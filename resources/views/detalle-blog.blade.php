@extends('layouts.master')
@section('title', 'Ciudadela Educativa Cooedumag - ' . $blog->title)
@section('content')
    @component('components.banner') @endcomponent
    <div class="blog">
        <div class="content">
            <div class="blog__contain">
                <div class="blog__contain__info">
                    <h1>{{ $blog->name }}</h1>
                    <div class="blog__contain__info__date">@php echo strftime("%B %d, %Y", strtotime($blog->created_at)) @endphp</div>
                    <img src="{{ asset($blog->image) }}" alt="Cooedumag {{ $blog->name }}">
                    <div class="blog__contain__info__text">
                        {!! $blog->text !!}
                    </div>
                </div>
                <div class="blog__contain__more">
                    <p class="blog__contain__more__title">Más Noticias</p>
                    @foreach($blogs as $b)
                        <div class="blog__contain__more__content">
                            <a href="{{ url("/blog/".str_slug($b->name)."/".$b->id) }}">
                                <span>@php echo strftime("%b %d", strtotime($blog->created_at)) @endphp</span>
                                <h4>{{ $b->name }}</h4>
                                <p>Leer más</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection