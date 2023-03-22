@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                          <li class="breadcrumb-item">Testimonials</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Testimonials</h1>
                    <hr>

                    @foreach ($testimonials as $testimonial)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{$testimonial->name}}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto col-admin-card-picture">
                                        <img src="https://www.matiasgfernandez.com/public/storage/{{$testimonial->avatar}}" alt="">
                                    </div>
                                    <div class="col-auto">
                                        <h5 class="card-title">{{$testimonial->detail}}</h5>
                                        <p class="card-text">{{$testimonial->testimonial}}</p>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-auto">
                                        <form action="{{route('admin.testimonials.edit')}}" method="POST">
                                            @method('POST')
                                            @csrf
                                            <input type="text" name="id" value="{{$testimonial->id}}" hidden>
                                            <input type="submit" value="Edit testimonial" class="btn btn-success">
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <form action="{{route('admin.testimonials.delete')}}" method="POST">
                                            @csrf
                                            @method('post')
                                            <input type="text" name="id" value="{{$testimonial->id}}" hidden>
                                            <input type="text" name="picture" value="{{$testimonial->avatar}}" hidden>
                                            <input type="submit" class="btn btn-danger" value="Remove testimonial">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    <a href="{{route('admin.testimonials.new')}}" class="btn btn-success">Create a new testimonial</a>
                    
                </div>
            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
