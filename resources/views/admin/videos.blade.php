@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                          <li class="breadcrumb-item">Videos</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
                    <h1>Videos</h1>
                    <hr>
                </div>

                @foreach ($videos as $video)
                    <div class="col-md-3 mt-3">
                        <div class="card" style="width: 100%;">
                            <iframe width="100%" height="250" class="card-img-top" src="{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="card-body">

                                <form action="{{route('admin.video.delete')}}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <input type="text" name="id" value="{{$video->id}}" hidden>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach

                {{$videos->links()}}

                <div class="col-md-12">
                    <a href="{{route('admin.video.new')}}" class="btn btn-success mt-4">Share a new video</a>
                </div>

            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
