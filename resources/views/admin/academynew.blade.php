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
                          <li class="breadcrumb-item">Create a academy degrees</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Create a academy degree</h1>
                    <hr>

                    
                    <form action="{{route('admin.academy.set')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('post')
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="institution" id="institution" required>
                            <label for="name">Institution</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="degree" id="degree" required>
                            <label for="detail">Degree name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="picture-file" id="picture-file" required>
                            <label for="picture-file">Institution logo</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="date" id="date" required>
                            <label for="detail">Date</label>
                        </div>
        
                        <input type="submit" class="btn btn-success" value="Create a degree">
                    </form>

                </div>

            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
