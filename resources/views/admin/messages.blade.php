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
                          <li class="breadcrumb-item">Messages</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>Messages</h1>
                    </div>
                </div>

                <div class="col-md-12">

                    <hr>

                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Date</th>
                            <!--<th scope="col"></th>-->
                            <th ></th>
                            <th ></th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($messages as $message)
                                <tr>
                                    <td>{{$message->name}}</td>
                                    <td>{{$message->email}}</td>
                                    <td>{{$message->updated_at}}</td>
                                    <td>
                                        <form action="{{route('admin.messages.open')}}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" value="{{$message->id}}" name="id" hidden>
                                            <input type="submit" class="btn btn-sm btn-success" value="Read">
                                        </form>
                                    </td>
                                    <td>
                                        @if (!$message->readed)
                                            <form action="{{route('admin.messages.markAsReaded')}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <input type="text" name="id" value="{{$message->id}}" hidden>
                                                <input type="submit" class="btn btn-sm btn-warning" value="Mark as read">
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{route('admin.messages.reply')}}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" name="id" value="{{$message->id}}" hidden>
                                            <input type="submit" value="Reply" class="btn btn-info btn-sm">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="" method="POST">
                                            <input type="submit" class="btn btn-sm btn-danger" value="Remove">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{$messages->links()}}
                    

                </div>
            </div>
        </div>


        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
