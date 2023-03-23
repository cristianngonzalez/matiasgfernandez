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
                          <li class="breadcrumb-item">New comments</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>New comments </h1>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>

                <div class="col-md-12">
                    
                    <hr>
                    <!--Todos los comentarios que no tienen respuesta-->
                    @foreach ($comments as $comment)
                        @if ($comment->repliescomment->count() == 0)
                            <div class="card mt-2">
                                <div class="card-header">{{$comment->blog->title}}</div>
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-auto">
                                            <h5 class="card-title">{{$comment->name}}</h5>
                                        </div>
                                        <div class="col-auto">
                                            <form action="{{route('admin.comment.delete')}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <input type="text" value="{{$comment->id}}" name="id" hidden>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Delete
                                                </button>
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <h2>Are you sure to delete this comment?</h2>
                                                        </div>
                                                        <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close without delete</button>
                                                        <input type="submit" value="Delete" class="btn btn-danger">
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    
                                    <h6 class="card-title"><a href="mailto:{{$comment->email}}">{{$comment->email}}</a></h6>
                                    <p class="card-text">{{$comment->comment}}</p>

                                    <form action="{{route('admin.reply.setAsAdmin')}}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <input type="text" name="comment_id" value="{{$comment->id}}" hidden>
                                        <div class="form-floating mb-2">
                                            <textarea class="form-control" placeholder="Leave a comment here" name="reply" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Reply</label>
                                        </div>
                                        <input type="submit" class="btn btn-success" value="Reply">
                                    </form>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>

        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
