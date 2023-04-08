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
                          <li class="breadcrumb-item">Static pictures</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>Static pictures</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('admin.staticcontent')}}" class="btn btn-success"><i class="bi bi-cursor-text"></i> Static content manager</a>
                    </div>
                </div>

                <div class="col-md-12">
        
                    <hr>

                    <div class="row">
                        @foreach ($staticpictures as $staticpicture)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{env('ASSETS_URL')}}storage/{{$staticpicture->path}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>{{$staticpicture->name}}</h5>

                                        <form action="{{route('admin.staticpicture.update')}}" method="POST" enctype='multipart/form-data'>
                                            @csrf
                                            @method('POST')
                                            <input type="text" value="{{$staticpicture->id}}" name="id" hidden>
                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control" id="picture-file" name="picture-file" required>
                                                <label for="picture-file">Change picture</label>
                                            </div>
                                            <input type="submit" value="Change picture" class="btn btn-sm btn-success">
                                        </form>

                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>



                </div>
            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
