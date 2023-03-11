@extends('layouts.site')

@section('content')


@include('site.partials.preloader')

@include('site.partials.header')

<!-- WRAPPER ALL -->

<style>
    .blog-picture{
        width: 100%;
        height: 400px;
        border-radius: 20px;
        background-repeat: no-repeat !important;
        background-size: cover !important;
        background-position-x: center !important;
        background-position-y: center !important;
    }
    .blog-author img{
        width: 70px;
        border-radius: 50px;
    }
    .blog-author-name{
        display: block;
    }
    .other-blogs-card-picture{
        border-radius: 5px;
        height: 150px;
        background-size: 100% !important;
        background-position-x: center !important;
        background-position-y: center !important;
        background-repeat: no-repeat !important;
    }
    .other-blogs-card-title a{
        text-decoration: none;
        color: black;
    }
    .other-blogs-card-title a:hover{
        color: #f75023;
    }
    

    .blog-container p{
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .blog-container strong em{

    }

    /*===========================================================================*/
    /*Blog comments form*/
    .blog-input{
        width: calc(50% - 3px);
        margin-bottom: 6px;
    }
    @media(max-width: 600px){
        .blog-input{
            width: 100%;
            margin-bottom: 6px;
        }
    }

    .blog-comment-container{
        width: 100%;
        background: rgb(250, 250, 250);
        border-radius: 5px;
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
        margin-bottom: 15px;
        box-shadow:
        -webkit-box-shadow: 10px 10px 9px -6px rgba(0,0,0,0.10);
        -moz-box-shadow: 10px 10px 9px -6px rgba(0,0,0,0.10);
        box-shadow: 10px 10px 9px -6px rgba(0,0,0,0.10);
    }

</style>


<div class="dizme_tm_all_wrap" data-magic-cursor="show" style="margin-top: 150px; padding-bottom: 0px; margin-bottom: 0px;">

    

    <div class="dizme_tm_section" id="blog">
        <div class="dizme_tm_news" style="margin-bottom: 0px;">
            <div class="container">
                <div class="row">

                    <!---------------------------------------------------------------------------------------------------------->
                    <div class="col-md-9">
                        <div class="blog-picture" style="background: url('{{env('ASSETS_URL')}}clestorage/{{$blog->picture}}');"></div>

                        <div class="dizme_tm_main_title" data-align="left">
                            <h3>{{$blog->title}}</h3>
        
                            <div class="blog-author row">
                                <div class="col-auto">
                                    <img src="{{env('ASSETS_URL')}}img/slider/avatar.png" alt="">
                                </div>
                                <div class="col-auto">
                                    <p class="blog-author-name">Matías Fernández</p>
                                
                                    <p>
                                        <!-------------------------------------------------------->
                                        {{$blog->updated_at->format('d')}} de 
                                        @switch($blog->updated_at->format('m'))
                                            @case('01') enero @break
                                            @case('02') febrero @break
                                            @case('03') marzo @break
                                            @case('04') abril @break
                                            @case('05') mayo @break
                                            @case('06') junio @break
                                            @case('07') julio @break
                                            @case('08') agosto @break
                                            @case('09') septiembre @break
                                            @case('10') octubre @break
                                            @case('11') noviembre @break
                                            @case('12') diciembre @break
                                        @endswitch
                                        del 20{{$blog->updated_at->format('y')}}
                                    </p>
                                </div>
                            </div>
                        </div>
        
                        <div class="row mt-4 mb-4">
                            <div class="col-12 blog-container">
                                {!!$blog->blog!!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <h2>Comentarios</h2>

                                @foreach ($comments as $comment)
                                    <div class="blog-comment-container">
                                        <h5>{{$comment->name}}</h5>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                @endforeach

                            </div>

                            <div class="col-12 mt-4 mb-4">
                                <h4>Dejame tu comentario</h4>


                                <form action="{{route('site.comment.post')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="text" name="blog_id" value="{{$blog->id}}" class="blog-input" hidden>
                                    <input id="name" name="name" type="text" placeholder="Su nombre"  class="blog-input"/> 
                                    <input id="email" name="email" type="text" placeholder="Su email"  class="blog-input"/>
                                    <div class="message_area">
                                        <textarea id="message" name="comment" placeholder="Deje su comentario aquí"></textarea>
                                    </div>
                                    <input type="submit" class="" id="send_message" value="Enviar">
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    <!---------------------------------------------------------------------------------------------------------->

                    <!---------------------------------------------------------------------------------------------------------->
                    <div class="col-md-3">
                        <div class="row">
                            <h3 class="text-center">Otros articulos que te pueden interesar</h3>
                            <hr>

                            @foreach ($blogs as $thisBlog)
                                <div class="col-12 mb-2">
                                    <div class="other-blogs-card-picture" style="background: url('{{env('ASSETS_URL')}}storage/{{$thisBlog->picture}}');"></div>
                                    <h5 class="other-blogs-card-title"><a href="{{route('site.blog')}}?id={{$thisBlog->id}}">{{$thisBlog->title}}</a></h5>
                                </div>
                                <hr>
                            @endforeach

                        </div>
                    </div>
                    <!---------------------------------------------------------------------------------------------------------->

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
