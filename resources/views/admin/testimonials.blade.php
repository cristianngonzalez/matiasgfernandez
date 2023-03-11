@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
        
                    <h1>Testimonials</h1>
                    <hr>

                    @foreach ($testimonials as $testimonial)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{$testimonial->name}}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$testimonial->detail}}</h5>
                                <p class="card-text">{{$testimonial->testimonial}}</p>
                                <div class="btn-group" role="group">

                                    @include('admin.partials.modal-edit-testimonial' , ['testimonial' => $testimonial])

                                    <form action="{{route('admin.testimonials.remove')}}" method="POST">
                                        @csrf
                                        @method('post')
                                        <input type="text" name="id" value="{{$testimonial->id}}" hidden>
                                        <input type="submit" class="btn btn-danger" value="Remove experience">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!-- Button add experience modal -->
                    <button type="button" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#experienceModal">
                        Create a new experience
                    </button>
                    <!-- Modal add experience -->
                    <div class="modal fade" id="experienceModal" tabindex="-1" aria-labelledby="experienceModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="experienceModalLabel">Add a new experience</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                
                                <form action="{{route('admin.testimonials.set')}}" method="POST">
                                    @csrf
                                    @method('post')
                                    <input type="text" name="id" hidden>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" required placeholder="Employer or coworker name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="detail" required placeholder="Employer or coworker detail">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="testimonial" id="testimonial" style="height: 100px" ></textarea>
                                            <label for="testimonial">Testimonial</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Save testimonial</button>
                                </form>

                            </div>
                        </div>
                        </div>
                    </div>
                   
                    
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
