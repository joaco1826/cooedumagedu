<div class="header" id="inicio">
    <div class="main">
        <div class="content">
            <div class="header__contain">
                <div><span class="icon-icon-06"></span> {{ $contact->address }}</div>
                <div><span class="icon-icon-07"></span> {{ $contact->phone }}</div>
                <div><span class="icon-icon-08"></span> {{ $contact->email }}</div>
                <div>Nuestras redes: <a target="_blank" href="{{ $contact->facebook }}"><span class="icon-icon-09"></span> {{ $contact->name_facebook }}</a></div>
                <div><a target="_blank" href="{{ $contact->instagram }}"><span class="icon-icon-10"></span> {{ $contact->name_instagram }}</a></div>
            </div>
        </div>
    </div>
</div>
<div class="ml-menu">
    <div class="ml-menu__contain">
        <ul>
            <li><a href="{{ url("/") }}">Inicio</a></li>
            <li><a href="{{ url("/institucion") }}">Institución</a></li>
            <li><a href="{{ url("/blog") }}">Actualidad Cooedumista</a></li>
            <li><a href="">Inscripciones</a></li>
            <li><a href="{{ url("/") }}#contact">Contacto</a></li>
        </ul>
    </div>
</div>
<div class="menu-fixed">
    <div class="header" style="height: 29px" id="inicio">
    </div>
    <div class="grid-x">
        <div class="menu-fixed__col">
            <ul>
                <li><a href="{{ url("/") }}">Inicio</a></li>
                <li><a href="{{ url("/institucion") }}">Institución</a></li>
                <li><a href="{{ url("/blog") }}">Actualidad Cooedumista</a></li>
            </ul>
        </div>
        <div class="menu-fixed__col">
            <div class="fix-logo">
                <a href="{{ url("/") }}"><img src="{{ asset("img/cooedumagedu-logo-06.png") }}" alt="logo cooedumag"></a>
            </div>
        </div>
        <div class="menu-fixed__col">
            <ul>
                <li><a href="">Inscripciones</a></li>
                <li><a href="{{ url("/") }}#contact">Contacto</a></li>
            </ul>
        </div>
    </div>
</div>