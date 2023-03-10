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
        
                    <h1>Users</h1>
                    <hr>
        
        
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">email</th>
                            <th scope="col">Name</th>
                            <th scope="col">Admin</th>
                            <th scope="col">Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <!--Change role button-->
                                    <td>
                                        @if(Auth::user()->id == $user->id)
                                            <span class="btn btn-info btn-sm">Current</span>
                                        @else
                                            @if($user->admin)
                                                <form method="POST" action="{{ route('admin.users.removeAdmin') }}">
                                                    @csrf
                                                    @method('post')
                                                    <input type="text" name="id" value="{{$user->id}}" hidden>
                                                    <input type="submit" value="Remove admin" class="btn btn-sm btn-warning">
                                                </form>
                                            @else
                                                <form method="POST" action="{{ route('admin.users.setAdmin') }}">
                                                    @csrf
                                                    @method('post')
                                                    <input type="text" name="id" value="{{$user->id}}" hidden>
                                                    <input type="submit" value="Make admin" class="btn btn-sm btn-success">
                                                </form>
                                            @endif
                                        @endif
                                    </td>
                                    <!--End change role button-->
                                    <td>
                                        @if(Auth::user()->id == $user->id)

                                        @else
                                            <form method="POST" action="{{ route('admin.users.remove') }}">
                                                @csrf
                                                @method('post')
                                                <input type="text" name="id" value="{{$user->id}}" hidden>
                                                <input type="submit" value="Remove user" class="btn btn-sm btn-danger">
                                            </form>
                                        @endif
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
