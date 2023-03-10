@extends('layouts.app')

@section('content')
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

            <h1>Social networks links</h1>
            <hr>

            @foreach ($socialnetworks as $socialnetwork)

                <form action="{{route('admin.socialnetworks.update')}}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="text" name="id" value="{{$socialnetwork->id}}" hidden>
                    <input type="text" name="name" value="{{$socialnetwork->name}}" hidden>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="{{$socialnetwork->icon}}"></i></span>
                        <input type="text" class="form-control" name="link" value="{{$socialnetwork->link}}">
                        <input class="btn btn-outline-secondary" type="submit" id="button-addon2" value="Update">
                    </div>
                </form>
            @endforeach
            

        </div>
    </div>
</div>
@endsection
