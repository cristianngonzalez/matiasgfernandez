    @extends('layouts.app')

@section('content')


@if(Auth::user()->admin)

    <div class="container">
        <div class="row">

            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Blogs</h5>
                      <p class="card-text">You can edit, delete, and update your blogs and it's categories.</p>
                      <a href="#" class="btn btn-primary">Manage blogs</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="https://icons.getbootstrap.com/icons/newspaper/" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Users</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Manage users</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Social networks</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Manage socials networks</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card" style="width: 100%;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Content</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@else
    @include('admin.partials.accessdenied')
@endif

@endsection
