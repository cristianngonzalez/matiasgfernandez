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
                          <li class="breadcrumb-item"><a href="{{route('admin.academy')}}">Academy degrees</a></li>
                          <li class="breadcrumb-item">Edit a degree</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Edit a degree</h1>
                    <hr>

                    
                    <form action="{{route('admin.academy.update')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('post')
                        <input type="text" value="{{$academy->id}}" name="id" hidden>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="institution" required value="{{$academy->institution}}">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="degree" required value="{{$academy->degree}}">
                        </div>

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Atention!</strong> Your academy degree already has a institution logo, but you can change it just by uploading an image here, if you want to keep the current image just ignore the image field.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="picture-file" id="picture-file">
                            <label for="picture-file">Picture file</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="date" id="experience-date" value="{{$academy->date}}">
                            <label for="experience-date">Degree date</label>
                        </div>
        
                        <input type="submit" class="btn btn-success" value="Update degree">
                    </form>

                </div>

            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
