@extends('layouts.site')

@section('content')


@include('site.partials.preloader')

<!-- WRAPPER ALL -->


<div class="dizme_tm_all_wrap" data-magic-cursor="show" style="margin-top: 170px; padding-bottom: 0px; margin-bottom: 0px;">

    @include('site.partials.header')
    

    <div class="dizme_tm_section" id="blog">
        <div class="dizme_tm_news" style="margin-bottom: 0px;">
            <div class="container">
                <div class="dizme_tm_main_title" data-align="center">
                    <h3>El contenido que buscabas ya no está disponible, pero puedes ver más artículos interesantes</h3>
                </div>
                <div class="news_list">
                    <ul>

                        @foreach ($blogs as $blog)
                            @include('site.partials.blogcard')
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="brush_1 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/news/1.png" alt="" /></div>
            <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/news/2.png" alt="" /></div>
        </div>
    </div>



    
    @include('site.partials.footer')
    
</div>
<!-- / WRAPPER ALL -->

@endsection
