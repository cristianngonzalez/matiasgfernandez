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
                          <li class="breadcrumb-item"><a href="{{route('admin.blogs')}}">Blogs</a></li>
                          <li class="breadcrumb-item">Category manager</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>Category manager</h1>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('admin.galery')}}" class="btn btn-success"><i class="bi bi-image-fill"></i> Blogs manager</a>
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
                            @foreach ($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>
                                        <form action="{{route('admin.category.update')}}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" value="{{$category->id}}" name="id" hidden>

                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-sm" value="{{$category->name}}" name="name" >
                                                <input type="submit" value="Update" class="btn btn-outline-secondary btn-sm">
                                            </div>
                                        </form>
                                    </td>

                                    <td>
                                        <form method="POST" action="{{ route('admin.category.delete') }}">
                                                @csrf
                                                @method('post')
                                                <input type="text" name="id" value="{{$category->id}}" hidden>
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                    <h2>Add a new category</h2>
                    <hr>
                    <form action="{{route('admin.category.set')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" id="name" required>
                            <label for="name">Category name</label>
                        </div>

                        <input type="submit" value="Add tag" class="btn btn-success">
                    </form>

                </div>

            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
