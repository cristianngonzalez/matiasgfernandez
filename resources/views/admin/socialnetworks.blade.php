@extends('layouts.app')

@section('content')

    @if(Auth::user()->admin)
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
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

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
