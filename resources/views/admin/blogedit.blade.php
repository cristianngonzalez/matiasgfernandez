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
                          <li class="breadcrumb-item">Edit blog</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>Edit blog</h1>
                    <hr>

                    <form action="{{route('admin.blogs.update')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('POST')
                        <input type="text" name="id" value="{{$blog->id}}" hidden>

                        <div class="form-floating mb-3">
                            <input type="title" class="form-control" name="title" id="blog-title" value="{{$blog->title}}" required>
                            <label for="blog-title">Blog title</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" name="category" id="category" aria-label="Floating label select example" required>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $blog->category_id) selected @endif>
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                            <label for="category">Category</label>
                        </div>

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Atention!</strong> Your blog already has a cover, but you can change it just by uploading an image here, if you want to keep the current image just ignore the image field.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="picture-file" id="picture-file">
                            <label for="picture-file">Picture file</label>
                        </div>

                        <textarea name="blog">{{$blog->blog}}</textarea>
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
                        <!--End tiny script-->
                        <input type="submit" value="Update blog" class="btn btn-success mt-3">
                    </form>

                    

                </div>

                <div class="col-md-12 mt-4">
                    <h1>Comments</h1>
                    <hr>

                    @foreach ($comments as $comment)

                        <div class="card mb-2" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">{{$comment->name}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{$comment->email}}</h6>
                                <p class="card-text">{{$comment->comment}}</p>
                                
                                <form action="{{route('admin.comment.delete')}}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <input type="text" name="id" value="{{$comment->id}}" hidden>
                                    <input type="text" name="blog_id" value="{{$blog->id}}" hidden>
                                    <input type="submit" value="Delete" class="card-link" style="border: none; background: transparent; padding: 0px; margin: 0px; color: red;">
                                </form>
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
