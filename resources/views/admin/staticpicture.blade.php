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


                </div>
            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
