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
                          <li class="breadcrumb-item"><a href="{{route('admin.messages')}}">Messages</a></li>
                          <li class="breadcrumb-item">Message</li>
                        </ol>
                    </nav>
                </div>

                <div class="row justify-content-between">
                    <div class="col-auto">
                        <h1>Reply</h1>
                    </div>
                    <div class="col-auto">
                        <div class="row">
                            <div class="col-auto">
                                <form action="{{route('admin.messages.open')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="text" value="{{$message->id}}" name="id" hidden>
                                    <input type="submit" value="Back to message" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>


                <div class="col-md-12">

                    <form action="{{route('admin.messages.reply.send')}}" method="POST">
                        @csrf
                        @method('POST')
                        <input type="text" name="message_id" value="{{$message->id}}" hidden>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="to" value="{{$message->email}}" id="picture-file" readonly required>
                            <label for="picture-file">To</label>
                        </div>
    
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="subject" id="subject" required>
                            <label for="subject">Subject</label>
                        </div>
    
                        <textarea name="message"></textarea>
                        <!--Tiny script-->
                        <script>
                            tinymce.init({
                                selector: 'textarea',
                                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                                tinycomments_mode: 'embedded',
                                tinycomments_author: 'Author name',
                                mergetags_list: [
                                    { value: 'First.Name', title: 'First Name' },
                                    { value: 'Email', title: 'Email' },
                                ]
                            });
                        </script>

                        <input type="submit" value="Send" class="btn btn-success mt-3">
                    </form>

                    

                </div>
            </div>
        </div>


        

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
