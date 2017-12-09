@extends('layouts.master')
@section('title', 'Ciudadela Educativa Cooedumag - Historia')
@section('content')
@component('components.banner') @endcomponent
<div class="h-resena">
    <div class="main">
        <div class="content">
            <div class="btn" style="font-size: 15pt; padding: .6rem 1rem; font-weight: 700">{{ $cooedumag[0]->name }}</div>
            <h1>{{ $cooedumag[0]->subname }} </h1>
            <div class="text-r">
                {!! $cooedumag[0]->text !!}
            </div>
        </div>
    </div>
</div>
<div class="banner-h">
</div>
<div class="mision">
    <div class="main">
        <div class="content">
            <div class="content">
                <h2>{{ $cooedumag[1]->name }}</h2>
                {!! $cooedumag[1]->text !!}
                <h2>{{ $cooedumag[2]->name }}</h2>
                {!! $cooedumag[2]->text !!}
                <h2>{{ $cooedumag[3]->name }}</h2>
                {!! $cooedumag[3]->text !!}
                <h2>{{ $cooedumag[4]->name }}</h2>
                {!! $cooedumag[4]->text !!}
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="content">
        <div class="symbol">
            <div class="btn margin-bottom-2" style="font-size: 15pt; padding: .6rem 1rem; font-weight: 700">SÍMBOLOS</div>
            <div class="symbol__contain">
                <div class="symbol__contain__left">
                    <img src="{{ asset("img/bandera-07.png") }}" alt="bandera cooedumagedu">
                    {!! $cooedumag[5]->text !!}
                </div>
                <div class="symbol__contain__left">
                    <img src="{{ asset("img/cooedumagedu-logo-06.png") }}" alt="escudo cooedumagedu">
                    {!! $cooedumag[6]->text !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="content">
        <div class="himno">
            <div class="btn margin-bottom-2" style="font-size: 15pt; padding: .6rem 1rem; font-weight: 700">{{ $cooedumag[7]->name }}<br><span>{{ $cooedumag[7]->subname }}</span></div>
            <div class="himno__text">
                {!! $cooedumag[7]->text !!}
            </div>
        </div>
    </div>
</div>
<div class="b-equipo">
    <div class="main">
        <div class="content">
            <div class="content">
                @foreach($managers as $m)
                    <div class="equipo">
                        <div class="equipo__img">
                            <img src="{{ asset($m->image) }}" alt="equipo">
                        </div>
                        <div class="equipo__text">
                            <h3>{{ $m->name }}</h3>
                            <p>{{ $m->subname }}</p>
                            {!! $m->text !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
