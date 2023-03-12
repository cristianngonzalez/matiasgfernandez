@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
        
                    <h1>Edit a experience</h1>
                    <hr>

                    
                    <form action="{{route('admin.timeline.update')}}" method="POST">
                        @csrf
                        @method('post')
                        <input type="text" value="{{$experience->id}}" name="id" hidden>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" required placeholder="Experience title" value="{{$experience->title}}">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="company" required placeholder="Company name" value="{{$experience->company}}">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" id="description" style="height: 100px" >{{$experience->description}}</textarea>
                                <label for="description">Job description</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="date" id="experience-date" value="{{$experience->date}}">
                            <label for="experience-date">Experience date</label>
                        </div>
        
                        <input type="submit" class="btn btn-success" value="Save experience">
                    </form>

                </div>

            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
