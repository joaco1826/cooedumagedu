@extends('layouts.master')
@section('title', 'Ciudadela Educativa Cooedumag')
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
@endsection
@section('content')
<div class="relative">
    <div class="slick-carousel">
        @foreach($banner as $b)
            <div>
               <div class="div-banner"> <img class="banner" src="{{ asset($b->image) }}" alt="cooedumagedu banner"></div>
            </div>
        @endforeach
    </div>
    <div class="abs-logo">
        <div class="abs-logo__rows"><img id="izq" src="{{ asset("img/rows-06.png") }}" alt="rows"></div>
        <div class="abs-logo__logo">
            <img src="{{ asset("img/cooedumagedu-logo-06.png") }}" alt="logo cooedumagedu">
        </div>
        <div class="abs-logo__rows"><img id="der" src="{{ asset("img/rows-07.png") }}" alt="rows"></div>
    </div>
</div>
<div class="fon-history">
    <div class="history">
        <div class="history__img">
            <img src="{{ asset($history->image) }}" alt="cooedumagedu historia">
        </div>
        <div class="history__text">
            <h2>{{ $history->name }}</h2>
            <div class="line"></div>
            {!! $history->text !!}
            <a href="{{ url("/institucion") }}"><div class="botton">Conoce más...</div></a>
        </div>
    </div>
</div>
<div class="info">
    <div class="main">
        <p>Información</p>
        <div class="content grid-x">
            @foreach($information as $i)
                <div class="info__blo">
                    <a target="_blank" href="{{ $i->link }}">
                        <div class="info__blo__img"><img src="{{ asset($i->image) }}" alt="Cooedumag info"></div>
                        <div class="info__blo__text">{{ $i->name }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="main">
    <a href="{{ url("/galeria") }}">
        <div class="t-galery">
            <img src="{{ asset($content[0]->image) }}" alt="galeria">
            <div class="btn-green">{{ $content[0]->name }}</div>
            <p>{{ $content[0]->text }}</p>
        </div>
    </a>
    <div class="galery">
        <div class="galery__left">
            <div class="galery__left__one" id="galeria{{ $events[0]->id }}">
                <img src="{{ asset($events[0]->image) }}" alt="galeria">
                <div><p>{{ $events[0]->name }}</p></div>
            </div>
            <div class="galery__left__two" id="galeria{{ $events[1]->id }}">
                <img src="{{ asset($events[1]->image) }}" alt="galeria">
                <div><p>{{ $events[1]->name }}</p></div>
            </div>
            <div class="galery__left__three" id="galeria{{ $events[2]->id }}">
                <img src="{{ asset($events[2]->image) }}" alt="galeria">
                <div><p>{{ $events[2]->name }}</p></div>
            </div>
        </div>
        <div class="galery__right" id="galeria{{ $events[3]->id }}">
            <img src="{{ asset($events[3]->image) }}" alt="galeria">
            <div><p>{{ $events[3]->name }}</p></div>
        </div>
    </div>
</div>
<div class="main">
    <div class="content">
        <div class="actualidad">
            <div class="actualidad__contain">
                <div>
                    <img src="{{ asset($content[1]->image) }}" alt="actualidad">
                    <div class="btn">{{ $content[1]->name }}</div>
                    <p>{{ $content[1]->text }}</p>
                    <a href="{{ $content[1]->link }}"><div class="btn" style="padding: .2rem 1.5rem">Ver más</div></a>
                </div>
            </div>
            <div class="actualidad__img"><img src="{{ asset("img/act-08.jpg") }}" alt="Cooedumag actualidad"></div>
            <div class="actualidad__contain">
                <div>
                    <img src="{{ asset($content[2]->image) }}" alt="actualidad">
                    <div class="btn">{{ $content[2]->name }}</div>
                    <p>{{ $content[2]->text }}</p>
                    <a href="{{ $content[2]->link }}"><div class="btn" style="padding: .2rem 1.5rem">Ver más</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="f-contact" id="contact">
    <div class="main">
        <div class="content">
            <div class="contact">
                <div class="contact__left">
                    <div class="contact__left__white">
                        <div class="c-ta">
                            <img class="c-ico" src="{{ asset("img/contact-06.png") }}" alt="contacto">
                            <div class="btn">Contactos</div>
                            <div class="info-contact">
                                <div class="info-contact__icons"><span class="icon-icon-06"></span></div>
                                <div class="info-contact__text">Dirección: {{ $contact->address }}</div>
                                <div class="info-contact__icons"><span class="icon-icon-07"></span></div>
                                <div class="info-contact__text">Teléfono:<br>{{ $contact->phone }}<br>Célular: {{ $contact->cellphone }}</div>
                                <div class="info-contact__icons"><span class="icon-icon-08" style="font-size: 9pt"></span></div>
                                <div class="info-contact__text">E-mail: {{ $contact->email }}</div>
                            </div>
                            <div class="follow">
                                <h3>Síguenos en nuestras redes</h3>
                                <span><a target="_blank" href="{{ $contact->facebook }}"><img src="{{ asset("img/contact-08.png") }}" alt="face"> {{ $contact->name_facebook }}</a></span><br>
                                <span><a target="_blank" href="{{ $contact->instagram }}"><img src="{{ asset("img/contact-09.png") }}" alt="insta"> {{ $contact->name_instagram }}</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact__right">
                    <div class="contact__right__white">
                        <div class="frmCont">
                            <img class="c-ico" src="{{ asset("img/contact-07.png") }}" alt="contacto">
                            <div class="btn">Dejanos un mensaje</div>
                            <form id="frmContact" novalidate data-abide>
                                <input type="text" placeholder="Nombre" name="name" required>
                                <input type="email" placeholder="E-mail" name="email" required>
                                <textarea name="message" required rows="4" placeholder="Mensaje"></textarea>
                                {{ csrf_field() }}
                                <button type="submit">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myMap">

</div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"  type="text/javascript"></script>
    <script>
        @foreach($events as $e)
            $('#galeria{{ $e->id }}').magnificPopup({
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKUfyBMdaU5ep--bbnfaAHx-um2NU6LGo"></script>
<script>
    $(document).ready(function () {
        $(".slick-carousel").slick({
            prevArrow: $("#izq"),
            nextArrow: $("#der"),
            autoplay: true,
            autoplaySpeed: 5000,
            fade: true,
            speed: 500
        })
    });
    window.onload = carga_mapa;
    function carga_mapa() {

        var myLatlng = new google.maps.LatLng({{ $contact->map }});

        var myOptions = {

            zoom: 16,

            center: myLatlng,

            mapTypeId: google.maps.MapTypeId.ROADMAP,

            scrollwheel: false,

            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#ff0300"
                        },
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 129.33333333333334
                        },
                        {
                            "gamma": 1
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#abff00"
                        },
                        {
                            "saturation": 61.80000000000001
                        },
                        {
                            "lightness": 13.800000000000011
                        },
                        {
                            "gamma": 1
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#1fa661"
                        },
                        {
                            "weight": "0.55"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#00b7ff"
                        },
                        {
                            "saturation": -31.19999999999996
                        },
                        {
                            "lightness": 2.1803921568627374
                        },
                        {
                            "gamma": 1
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#00B5FF"
                        },
                        {
                            "saturation": -33.33333333333343
                        },
                        {
                            "lightness": 27.294117647058826
                        },
                        {
                            "gamma": 1
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.station.airport",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "transit.station.bus",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "hue": "#00B7FF"
                        },
                        {
                            "saturation": 8.400000000000006
                        },
                        {
                            "lightness": 36.400000000000006
                        },
                        {
                            "gamma": 1
                        }
                    ]
                }
            ]

        }

        var map = new google.maps.Map(document.getElementById("myMap"), myOptions);

        var marker = new google.maps.Marker({
            position: map.getCenter()
            , map: map
            , title: 'Ciudadela Educativa Cooedumag'
            , icon: '{{ asset("img/favicon-06.png") }}'
        });

        var popup = new google.maps.InfoWindow({
            content: 'Ciudadela Educativa Cooedumag, Santa Marta - Colombia'
        });


        popup.open(map, marker);


    }
</script>
@endsection
