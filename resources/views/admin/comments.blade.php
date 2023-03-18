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
                            <div class="card">
                                <div class="card-header">{{$comment->blog->title}}</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{$comment->name}}</h5>
                                    <h6 class="card-title"><a href="mailto:{{$comment->email}}">{{$comment->email}}</a></h6>
                                    <p class="card-text">{{$comment->comment}}</p>

                                    <form action="" method="POST">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                            <label for="floatingTextarea2">Reply</label>
                                          </div>
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
