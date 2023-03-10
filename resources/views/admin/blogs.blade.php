@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


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
                                        <a href="{{route('site.blog')}}?id={{$blog->id}}" class="btn btn-sm btn-info" target="_blank">Visitar</a>
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
