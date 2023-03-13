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
                          <li class="breadcrumb-item"><a href="{{route('admin.testimonials')}}">Testimonials</a></li>
                          <li class="breadcrumb-item">Edit a testimonial</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Edit a testimonial</h1>
                    <hr>

                    
                    <form action="{{route('admin.testimonials.update')}}" method="POST">
                        @csrf
                        @method('post')
                        <input type="text" value="{{$testimonial->id}}" name="id" hidden>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" required value="{{$testimonial->name}}">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="detail" required value="{{$testimonial->detail}}">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="testimonial" id="testimonial" style="height: 100px" >{{$testimonial->testimonial}}</textarea>
                                <label for="description">Testimonial</label>
                            </div>
                        </div>
        
                        <input type="submit" class="btn btn-success" value="Save testimonial">
                    </form>

                </div>

            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
