@extends('layouts.app')

@section('content')
    @if(Auth::user()->admin)


        <style>
            #message-text-container{
                min-height: 250px;
            }
        </style>

        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-12 mt-2">
                    @include('admin.partials.alerts')
                </div>

                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('admin')}}">Admin</a></li>
                          <li class="breadcrumb-item"><a href="{{route('admin.messages')}}">Messages</a></li>
                          <li class="breadcrumb-item">Message</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>Message</h1>
                    </div>
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <form action="{{route('admin.messages.reply')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="text" name="id" value="{{$message->id}}" hidden>
                                    <input type="submit" value="Reply" class="btn btn-success">
                                </form>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('admin.taggalery')}}" class="btn btn-danger"><i class="bi bi-trash"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>


                <div class="col-md-12">

                    <fieldset disabled>

                        <div class="input-group flex-nowrap mb-1">
                            <span class="input-group-text" id="addon-wrapping">Subject</span>
                            <input type="text" class="form-control" value="{{$message->subject}}">
                        </div>
                        <div class="input-group flex-nowrap mb-1">
                            <span class="input-group-text" id="addon-wrapping">Sender</span>
                            <input type="text" class="form-control" value="{{$message->email}}">
                        </div>
                        <div class="input-group flex-nowrap mb-1">
                            <span class="input-group-text" id="addon-wrapping">Name</span>
                            <input type="text" class="form-control" value="{{$message->name}}">
                        </div>
                        <div class="input-group flex-nowrap mb-1">
                            <span class="input-group-text" id="addon-wrapping">Phone</span>
                            <input type="text" class="form-control" value="{{$message->phone}}">
                        </div>
                        <div class="input-group flex-nowrap mb-2">
                            <span class="input-group-text" id="addon-wrapping">Date</span>
                            <input type="text" class="form-control" value="{{$message->updated_at}}">
                        </div>
                        
                        <div class="form-floating">
                            <textarea class="form-control" id="message-text-container">{{$message->message}}</textarea>
                            <label for="message-text-container">Message</label>
                        </div>

                    </fieldset>

                </div>

                <div class="col-md-12 mt-4">
                    <h2>Replies</h2>

                    @foreach ($replies as $reply)
                        <div class="card mb-3" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Reply sent {{$reply->created_at}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$reply->subject}}</h6>
                                <p class="card-text">{!!$reply->reply!!}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>


        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
