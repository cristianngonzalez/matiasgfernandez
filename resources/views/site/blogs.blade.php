@extends('layouts.site')

@section('content')


@include('site.partials.preloader')

<!-- WRAPPER ALL -->

<style>
    .blog-section-page{
        margin-top: 170px; padding-bottom: 0px; margin-bottom: 0px;
    }
    @media(max-width: 1040px){
        .blog-section-page{
            margin-top: 100px;
        }
    }
    @media(max-width: 768px){
        .blog-section-page{
            margin-top: 30px;
        }
    }
</style>


<div class="dizme_tm_all_wrap blog-section-page" data-magic-cursor="show" style="">

    @include('site.partials.header')
    

    <div class="dizme_tm_section" id="blog">
        <div class="dizme_tm_news" style="margin-bottom: 0px;">
            <div class="container">
                <div class="dizme_tm_main_title" data-align="center">
                    <span>{!!$staticcontents[6]->subtitle!!}</span>
                    <h3>{!!$staticcontents[6]->maintitle!!}</h3>
                    <p>{!!$staticcontents[6]->paragraph!!}</p>
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

    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-auto">
                {{$blogs->links()}}
            </div>
        </div>
    </div>

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
