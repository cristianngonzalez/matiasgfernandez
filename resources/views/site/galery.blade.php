@extends('layouts.site')

@section('content')


@include('site.partials.preloader')

<!-- WRAPPER ALL -->


<div class="dizme_tm_all_wrap" data-magic-cursor="show" style="padding-top:0px; padding-bottom: 0px; margin-bottom: 0px;">

    @include('site.partials.header')
    

    <!-- Galery -->
    <div class="dizme_tm_section" id="galeria">
        <div class="dizme_tm_portfolio">
            <div class="container">
                <div class="portfolio_filter">
                    <ul>
                        <li><a href="#" class="current" data-filter="*">Todas</a></li>
                        @foreach ($taggaleries as $taggalery)
                            <li><a href="#" data-filter=".{{$taggalery->name}}">{{$taggalery->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="dizme_tm_portfolio_titles"></div>
                <div class="portfolio_list wow fadeInUp" data-wow-duration="1s">
                    <ul class="gallery_zoom grid">

                        @foreach ($galeries as $galery)
                            <li class="{{$galery->taggaleries->name}} grid-item">
                                <div class="inner">
                                    <div class="zoom" data-title="" data-category="{{$galery->taggaleries->name}}">
                                        <a class="popup-youtube" href="{{env('ASSETS_URL')}}storage/{{$galery->picture}}">
                                            <img src="{{env('ASSETS_URL')}}storage/{{$galery->picture}}" alt="{{$galery->comment}}" />
                                            <div class="main" data-img-url="{{env('ASSETS_URL')}}storage/{{$galery->picture}}"></div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="brush_1 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/portfolio/1.png" alt="" /></div>
            <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/portfolio/2.png" alt="" /></div>
        </div>
    </div>
    <!-- /galery -->


    <!--
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-auto">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group me-2" role="group" aria-label="First group">
                      <button type="button" class="btn btn-primary">1</button>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                      <button type="button" class="btn btn-secondary">5</button>
                      <button type="button" class="btn btn-secondary">6</button>
                      <button type="button" class="btn btn-secondary">7</button>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                      <button type="button" class="btn btn-info">8</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    

    
    @include('site.partials.footer')
    
</div>
<!-- / WRAPPER ALL -->

@endsection


