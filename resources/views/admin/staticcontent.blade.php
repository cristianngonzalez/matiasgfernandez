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
                          <li class="breadcrumb-item">Static content</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>Static content</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('admin.staticpicture')}}" class="btn btn-success"><i class="bi bi-image-fill"></i> Static pictures manager</a>
                    </div>
                </div>

                <div class="col-md-12">
        
                    
                    <hr>

                    <form action="{{route('admin.staticcontent.update')}}" method="POST">
                        @csrf
                        @method('POST')

                        @foreach ($staticcontents as $staticcontent)
                            <h2>{{$staticcontent->section}}</h2>
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$staticcontent->maintitle}}" class="form-control" name="staticcontent{{$staticcontent->id}}-maintitle" id="staticcontent{{$staticcontent->id}}-maintitle">
                                <label for="staticcontent{{$staticcontent->id}}-maintitle">Main title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$staticcontent->subtitle}}" class="form-control" name="staticcontent{{$staticcontent->id}}-subtitle" id="staticcontent{{$staticcontent->id}}-subtitle">
                                <label for="staticcontent{{$staticcontent->id}}-subtitle">Subtitle</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$staticcontent->paragraph}}" class="form-control" name="staticcontent{{$staticcontent->id}}-paragraph" id="staticcontent{{$staticcontent->id}}-paragraph" >
                                <label for="staticcontent{{$staticcontent->id}}-paragraph">Paragraph</label>
                            </div>
                        @endforeach

                        <input type="submit" value="Save changes" class="btn btn-success">

                    </form>

                </div>
            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
