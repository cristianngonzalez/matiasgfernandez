@extends('layouts.site')

@section('content')


@include('site.partials.preloader')

<!-- WRAPPER ALL -->


<div class="dizme_tm_all_wrap" data-magic-cursor="show" style="margin-top: 170px; padding-bottom: 0px; margin-bottom: 0px;">

    @include('site.partials.header')
    

    
    <div class="dizme_tm_section" id="chanel">
        <div class="dizme_tm_services">
            <div class="container">
                <div class="dizme_tm_main_title" data-align="center">
                    <span>{!!$staticcontents[7]->subtitle!!}</span>
                    <h3>{!!$staticcontents[7]->maintitle!!}</h3>
                    <p>{!!$staticcontents[7]->paragraph!!}</p>
                    <a href="{{$socialnetworks[1]->link}}" style="text-decoration: none; color:coral;" target="_blank">¡Ver todos mis videos en mi canal <i class="{{$socialnetworks[1]->icon}}"></i> click aquí!</a>
                </div>
                <div class="service_list">
                    <ul>
                        @foreach ($videos as $video)
                            <li class="wow fadeInLeft" data-wow-duration="1s">
                                <div class="video_inner tilt-effect">
                                    <iframe width="560" height="315" src="{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/service/5.png" alt="" /></div>
            <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/service/6.png" alt="" /></div>
        </div>
    </div>

    
    @include('site.partials.footer')
    
</div>
<!-- / WRAPPER ALL -->

@endsection















