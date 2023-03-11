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
                        <h1>Tags manager</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('admin.galery')}}" class="btn btn-success"><i class="bi bi-image-fill"></i> Galery manager</a>
                    </div>
                </div>

                <div class="col-md-12">
                    <hr>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($taggaleries as $taggalery)
                                <tr>
                                    <th scope="row">{{$taggalery->id}}</th>
                                    <td>
                                        <input type="text" value="{{$taggalery->name}}" class="form-control form-control-sm" id="name" name="name">
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.blogs.edit') }}">
                                            @csrf
                                            @method('post')
                                            <input type="text" name="id" value="" hidden>
                                            <input type="submit" value="Edit" class="btn btn-sm btn-warning">
                                        </form>
                                    </td>

                                    <td>
                                        <form method="POST" action="{{ route('admin.blogs.delete') }}">
                                                @csrf
                                                @method('post')
                                                <input type="text" name="id" value="" hidden>
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>

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
