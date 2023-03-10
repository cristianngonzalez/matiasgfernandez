@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    <!--Alerts------------------>
                    @if( isset($success) )
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{$success}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if( isset($warning) )
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            {{$warning}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <!--End Alerts------------------>
                </div>

                <div class="col-md-12">
                    <h1>Galery</h1>
                    <hr>

                    <div class="row">

                        @foreach ($galeries as $galery)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{url('/')}}/storage/{{$galery->picture}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>Tag: {{$galery->taggaleries->name}}</h5>
                                        <h6 class="card-title">{{$galery->crated_at}}</h6>
                                        <p class="card-text">{{$galery->comment}}</p>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    
                    {{$galeries->links()}}

                    <a href="{{route('admin.blogs.new')}}" class="btn btn-success mt-4">Upload a new photo to galery</a>
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
