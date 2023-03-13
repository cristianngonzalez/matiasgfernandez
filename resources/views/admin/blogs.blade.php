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
                          <li class="breadcrumb-item">Blogs</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Blogs</h1>
                    <hr>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Link</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <th scope="row">{{$blog->id}}</th>
                                    <td>{{$blog->title}}</td>
                                    <td>
                                        <a href="{{route('site.blog')}}?id={{$blog->id}}" class="btn btn-sm btn-info" target="_blank">Visit</a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ route('admin.blogs.edit') }}">
                                            @csrf
                                            @method('post')
                                            <input type="text" name="id" value="{{$blog->id}}" hidden>
                                            <input type="submit" value="Edit" class="btn btn-sm btn-warning">
                                        </form>
                                    </td>

                                    <td>
                                        <form method="POST" action="{{ route('admin.blogs.delete') }}">
                                                @csrf
                                                @method('post')
                                                <input type="text" name="id" value="{{$blog->id}}" hidden>
                                                <input type="text" name="picture" value="{{$blog->picture}}" hidden>
                                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$blogs->links()}}
                    
                    <a href="{{route('admin.blogs.new')}}" class="btn btn-success mt-4">Create a new blog</a>

                </div>
            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
