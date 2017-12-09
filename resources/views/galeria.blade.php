@extends('layouts.master')
@section('title', 'Ciudadela Educativa Cooedumag - Galeria')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
@endsection
@section('content')
    @component('components.banner') @endcomponent
    <div class="t-galery">
        <div class="t-galery">
            <img src="{{ asset($content[0]->image) }}" alt="galeria">
            <div class="btn-green">{{ $content[0]->name }}</div>
            <p>{{ $content[0]->text }}</p>
        </div>
    <div class="content">
        <div class="galery">
            @foreach($events as $e)
                <div class="galery__contain" id="open-popup{{ $e->id }}">
                    <img src="{{ asset($e->image) }}" alt="cooedumag galeria">
                    <div><p>{{ $e->name }}</p></div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"  type="text/javascript"></script>
    <script>
        @foreach($events as $e)
            $('#open-popup{{ $e->id }}').magnificPopup({
                items: [
                    {
                        src: '{{ asset($e->image) }}',
                        title: '{{ $e->name }}'
                    },
                    @foreach ($e->images as $k => $h)
                        {
                            src: '{{ asset($h->image) }}',
                            title: '{{ $e->name }}'
                        },
                    @endforeach
                ],
                gallery: {
                    enabled: true
                },
                type: 'image' // this is a default type
            });
        @endforeach
    </script>
@endsection