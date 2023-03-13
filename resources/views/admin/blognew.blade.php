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
                          <li class="breadcrumb-item">New blog</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-12">
        
                    <h1>New blog</h1>
                    <hr>

                    <form action="{{route('admin.blogs.set')}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('POST')

                        <div class="form-floating mb-3">
                            <input type="title" class="form-control" name="title" id="blog-title" required>
                            <label for="blog-title">Blog title</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" name="category" id="category" aria-label="Floating label select example" required>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <label for="category">Category</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" name="picture-file" id="picture-file" required>
                            <label for="picture-file">Picture file</label>
                        </div>

                        <textarea name="blog"></textarea>
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
                        <input type="submit" value="Publish blog" class="btn btn-success mt-3">
                    </form>

                    

                </div>
            </div>
        </div>

    @else
        @include('admin.partials.accessdenied')
    @endif

@endsection
