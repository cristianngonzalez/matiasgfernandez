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
                          <li class="breadcrumb-item">Create a testimonial</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Create a testimonial</h1>
                    <hr>

                    
                    <form action="{{route('admin.testimonials.set')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('post')
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="name" required>
                            <label for="name">Name</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="detail" id="detail" required>
                            <label for="detail">Detail</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="picture-file" id="picture-file" required>
                            <label for="picture-file">Logo</label>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="testimonial" id="description" style="height: 100px" ></textarea>
                                <label for="description">Testimonial</label>
                            </div>
                        </div>
        
                        <input type="submit" class="btn btn-success" value="Create testimonial">
                    </form>

                </div>

            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
