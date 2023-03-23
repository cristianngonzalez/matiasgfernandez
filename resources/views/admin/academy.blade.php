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
                          <li class="breadcrumb-item">Academy degrees</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Testimonials</h1>
                    <hr>

                    @foreach ($academies as $academy)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{$academy->institution}}
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto col-admin-card-picture">
                                        <img class="admin-card-picture" src="https://www.matiasgfernandez.com/public/storage/{{$academy->logo}}" alt="">
                                    </div>
                                    <div class="col-auto col-admin-card-picture-content-aside">
                                        <h5 class="card-title">{{$academy->degree}}</h5>
                                        <p class="card-text">{{$academy->date}}</p>
                                    </div>
                                </div>
                                
                                <div class="row mt-2">
                                    <div class="col-auto">
                                        <form action="{{route('admin.academy.edit')}}" method="POST">
                                            @method('POST')
                                            @csrf
                                            <input type="text" name="id" value="{{$academy->id}}" hidden>
                                            <input type="submit" value="Edit degree" class="btn btn-success">
                                        </form>
                                    </div>
                                    <div class="col-auto">
                                        <form action="{{route('admin.academy.delete')}}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" name="id" value="{{$academy->id}}" hidden>
                                            <input type="text" name="picture" value="{{$academy->logo}}" hidden>
                                            <input type="submit" class="btn btn-danger" value="Remove degree">
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    <a href="{{route('admin.academy.new')}}" class="btn btn-success">Create a new academy degree</a>
                    
                </div>
            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
