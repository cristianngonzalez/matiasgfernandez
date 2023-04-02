
@php
//Obtiene la ruta y la muestra en el breadcrumb
$thisPath = Request::path();
@endphp

<script>
    console.log('{{$thisPath}}');
    console.log("{{url('/')}}");
</script>


<!-- MOBILE MENU -->
<div class="dizme_tm_mobile_menu">
    <div class="mobile_menu_inner">
        <div class="mobile_in">
            <div class="logo">
                <a href="{{url('/')}}"><img src="{{env('ASSETS_URL')}}img/logo/logo.png" alt="" /></a>
            </div>
            <div class="trigger">
                <div class="hamburger hamburger--slider">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dropdown">
        <div class="dropdown_inner">
            <ul class="anchor_nav">
                <li class="current">
                    <a href="#home">Inicio</a>
                </li>
                <li><a href="{{url('/')}}#about">Acerca de mi</a></li>
                <li><a href="{{url('/')}}#trayectoria">Testimonios</a></li>
                <li><a href="{{url('/')}}#portfolio">Portfolio</a></li>
                <li><a href="{{url('/')}}#blog">Blog</a></li>
                <li><a href="{{url('/')}}#contact">Contacto</a></li>
                <li class="download_cv"><a onclick="solicitarCV()"><span>Solicitar CV</span></a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /MOBILE MENU -->

<!-- HEADER -->
<div class="dizme_tm_header">
    <div class="container">
        <div class="inner">
            <div class="logo">
                <a href="{{url('/')}}"><img src="{{env('ASSETS_URL')}}img/logo/logo.png" alt="" width="300"/></a>
            </div>
            <div class="menu">
                <ul class="anchor_nav">
                    <li class="current"><a  href="{{url('/')}}#home">Inicio</a></li>
                    <li><a href="{{url('/')}}#about">Acerca de mi</a></li>
                    <li><a href="{{url('/')}}#trayectoria">Testimonios</a></li>
                    <li><a href="{{url('/')}}#galeria">Mi Galeria</a></li>
                    <li><a href="{{url('/')}}#blog">Blog</a></li>
                    <li><a href="{{url('/')}}#contact">Contacto</a></li>
                    <li class="download_cv"><a onclick="solicitarCV()"><span>Solicitar CV</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /HEADER -->
