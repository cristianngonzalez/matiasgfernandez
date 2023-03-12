@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
        
                    <h1>Share a new video</h1>
                    <hr>

                    <form action="{{route('admin.video.set')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('POST')

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="link" id="link" required>
                            <label for="link">Youtube video link</label>
                        </div>


                        <!--End tiny script-->
                        <input type="submit" value="Share video" class="btn btn-success mt-3">
                    </form>

                    

                </div>
            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
