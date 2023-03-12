@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>Galery</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('admin.taggalery')}}" class="btn btn-success"><i class="bi bi-tags-fill"></i> Tags manager</a>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>

                    <div class="row">

                        @foreach ($galeries as $galery)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{env('ASSETS_URL')}}storage/{{$galery->picture}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5>Tag: {{$galery->taggaleries->name}}</h5>
                                        <h6 class="card-title">{{$galery->crated_at}}</h6>

                                        <form action="{{route('admin.galery.update')}}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" value="{{$galery->id}}" name="id" hidden>
                                            <div class="form-floating mb-2">
                                                <select class="form-select" id="taggalery" name="taggalery">
                                                    @foreach ($taggaleries as $taggalery)
                                                        <option value="{{$taggalery->id}}" @if ($taggalery->id == $galery->taggaleries->id) selected @endif>
                                                            {{$taggalery->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="taggalery">Tag</label>
                                            </div>
                                            <div class="form-floating mb-2">
                                                <input type="text" class="form-control" id="comment" name="comment" value="{{$galery->comment}}">
                                                <label for="comment">Comment</label>
                                            </div>
                                            <input type="submit" value="Update" class="btn btn-primary" style="float: left; margin-right: 10px;">
                                        </form>

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
        @include('admin.partials.accessdenied')
    @endif

@endsection
