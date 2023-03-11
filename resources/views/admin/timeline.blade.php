@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
        
                    <h1>Timeline of experience job</h1>
                    <hr>

                    @foreach ($timeline as $experience)
                        <div class="card mb-3">
                            <div class="card-header">
                                {{$experience->title}}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{$experience->company}}</h5>
                                <p class="card-text">{{$experience->date}}</p>
                                <p class="card-text">{{$experience->description}}</p>
                                <div class="btn-group" role="group">

                                    @include('admin.partials.modal-edit-experience' , ['experience' => $experience])

                                    <form action="{{route('admin.timeline.remove')}}" method="POST">
                                        @csrf
                                        @method('post')
                                        <input type="text" name="id" value="{{$experience->id}}" hidden>
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
                                
                                <form action="{{route('admin.timeline.set')}}" method="POST">
                                    @csrf
                                    @method('post')
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="title" required placeholder="Experience title">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="company" required placeholder="Company name">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="description" id="description" style="height: 100px"></textarea>
                                            <label for="description">Job description</label>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="date" class="form-control" name="date" id="experience-date">
                                        <label for="experience-date">Experience date</label>
                                    </div>

                                    <button type="submit" class="btn btn-success">Save experience</button>
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
