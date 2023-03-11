@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
                    <h1>Galery</h1>
                    <hr>

                    <div class="row">

                        @foreach ($galeries as $galery)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{url('/')}}/storage/{{$galery->picture}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>Tag: {{$galery->taggaleries->name}}</h5>
                                        <h6 class="card-title">{{$galery->crated_at}}</h6>
                                        <form action="">
                                            
                                        </form>
                                        

                                        <p class="card-text">{{$galery->comment}}</p>

                                        <form action="{{route('admin.galery.delete')}}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" name="id" value="{{$galery->id}}" hidden>
                                            <input type="text" name="picture" value="{{$galery->picture}}" hidden>
                                            <input type="submit" value="Delete" class="btn btn-danger">
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    
                    {{$galeries->links()}}

                    <a href="{{route('admin.galery.new')}}" class="btn btn-success mt-4">Upload a new photo to galery</a>
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
