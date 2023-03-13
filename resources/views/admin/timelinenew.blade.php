@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
        
                    <h1>Create a experience</h1>
                    <hr>

                    
                    <form action="{{route('admin.timeline.set')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('post')
                        <div class="mb-3">
                            <input type="text" class="form-control" name="title" required placeholder="Experience title" value="">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="company" required placeholder="Company name" value="">
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="category" name="category" required>
                              <option value="company">Company</option>
                              <option value="startup" >Startup</option>
                              <option value="consultancy" >Consultancy</option>
                            </select>
                            <label for="category">What type of company have you worked for?</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="picture-file" id="picture-file" required>
                            <label for="picture-file">Logo</label>
                        </div>

                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" id="description" style="height: 100px" ></textarea>
                                <label for="description">Job description</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="date" id="experience-date" value="">
                            <label for="experience-date">Experience date</label>
                        </div>
        
                        <input type="submit" class="btn btn-success" value="Create experience">
                    </form>

                </div>

            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
