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

                    
                    
                    <a href="{{route('admin.blogs.new')}}" class="btn btn-success mt-4">Create a new blog</a>
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
