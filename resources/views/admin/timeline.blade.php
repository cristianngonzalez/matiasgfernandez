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
                          <li class="breadcrumb-item">Timeline</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Timeline of experience job</h1>
                    <hr>

                    @foreach ($timeline as $experience)
                        <div class="card mb-3">
                            <div class="card-header">{{$experience->title}}</div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-auto col-admin-card-picture">
                                        <img class="admin-card-picture" src="https://www.matiasgfernandez.com/public/storage/{{$experience->icon}}" alt="">
                                    </div>
                                    <div class="col-auto col-admin-card-picture-content-aside">
                                        <h5 class="card-title">{{$experience->company}}</h5>
                                        <h6 class="text-capitalize">{{$experience->category}}</h6>
                                        <p class="card-text">{{$experience->date}}</p>
                                        <p class="card-text">{{$experience->description}}</p>
                                    </div>
                                </div>
                                
                                <div class="row mt-2">
                                    <div class="col-auto">
                                        <form action="{{route('admin.timeline.edit')}}" method="POST">
                                            @method('POST')
                                            @csrf
                                            <input type="text" name="id" value="{{$experience->id}}" hidden>
                                            <input type="submit" value="Edit experience" class="btn btn-success">
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <form action="{{route('admin.timeline.delete')}}" method="POST">
                                            @csrf
                                            @method('post')
                                            <input type="text" name="id" value="{{$experience->id}}" hidden>
                                            <input type="text" name="picture" value="{{$experience->icon}}" hidden>
                                            <input type="submit" class="btn btn-danger" value="Remove experience">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    <a href="{{route('admin.timeline.new')}}" class="btn btn-success">Add experience</a>
                    
                    
                </div>
            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
