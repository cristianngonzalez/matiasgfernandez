@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
        
                    <h1>Upload a photo</h1>
                    <hr>

                    <form action="{{route('admin.galery.set')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('POST')

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="comment" id="comment" required>
                            <label for="comment">Photo comment</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" name="taggalery" id="taggalery" aria-label="Floating label select example" required>
                                @foreach ($taggaleries as $taggalery)
                                    <option value="{{$taggalery->id}}">{{$taggalery->name}}</option>
                                @endforeach
                            </select>
                            <label for="taggalery">Tag</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="picture-file" id="picture-file" required>
                            <label for="picture-file">Picture file</label>
                        </div>

                        <input type="submit" value="Upload photo" class="btn btn-success mt-3">
                    </form>

                    

                </div>
            </div>
        </div>

    @else
        <main class="py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>
        
                        <div class="card-body">
                            <p>Access denied, you need to be an administrator</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </main>
    @endif

@endsection
