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
                          <li class="breadcrumb-item">CV Requests</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>CV Requests</h1>
                    </div>
                </div>

                <div class="col-md-12">

                    <hr>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                            <th scope="col"></th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{$request->email}}</td>
                                    <td>{{$request->updated_at}}</td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" name="id" value="{{$request->id}}" hidden>
                                            @if ($request->sent == true)
                                                <input type="submit" value="Send again" class="btn btn-success btn-sm">
                                            @else
                                                <input type="submit" value="Send CV" class="btn btn-success btn-sm">
                                            @endif
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" name="id" value="{{$request->id}}" hidden>
                                            
                                            <input type="submit" value="Delete request" class="btn btn-danger btn-sm">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$requests->links()}}
                    
                    <a href="{{route('admin.blogs.new')}}" class="btn btn-success mt-4">Create a new blog</a>

                </div>
            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
