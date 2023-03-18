    @extends('layouts.app')

@section('content')


@if(Auth::user()->admin)

    <div class="container">
        <div class="row">

            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/blogs.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="{{route('admin.blogs')}}"><h5 class="card-title">Blogs</h5></a>
                      <p class="card-text">You can edit, delete, and update your blogs and it's categories.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/comments.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="{{route('admin.comments')}}"><h5 class="card-title">Comments</h5></a>
                      <p class="card-text">Your blogs has comments.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/users.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="{{route('admin.users')}}"><h5 class="card-title">Users</h5></a>
                      <p class="card-text">Your site has users, as admin you can set and remove them as admin.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/linkedin.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('admin.socialnetworks')}}"><h5 class="card-title">Social networks</h5></a>
                      <p class="card-text">You can edit your social networks links.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/youtube.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('admin.video')}}"><h5 class="card-title">Videos</h5></a>
                      <p class="card-text">You can edit your social networks links.</p>
                    </div>
                </div>
            </div>

            
            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/content.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('admin.staticcontent')}}"><h5 class="card-title">Static content</h5></a>
                        <p class="card-text">Your website has titles, paragraphs and others statics content that you can edit here.</p>
                    </div>
                </div>
            </div>
            

            
            <div class="col-md-3 mb-2 position-relative">
                <div class="card" style="width: 100%;">

                    <span class="translate-middle badge rounded-pill bg-danger" id="message-admin-badge">
                        {{$unread_messages}}+
                        <span class="visually-hidden">unread messages</span>
                      </span>

                    <img src="{{env('ASSETS_URL')}}img/svg/icons/messages.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('admin.messages')}}"><h5 class="card-title">Messages</h5></a>
                      <p class="card-text">Your site has a contact form where you can receive messages, and you can send message from your admin here.</p>
                    </div>
                </div>
                
            </div>
            
            <div class="col-md-3 mb-2 position-relative">
                <div class="card" style="width: 100%;">

                    <span class="translate-middle badge rounded-pill bg-danger" id="message-admin-badge">
                        {{$unanswered_request}}+
                        <span class="visually-hidden">unread messages</span>
                      </span>

                    <img src="{{env('ASSETS_URL')}}img/svg/icons/cv_request.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('admin.requestcv')}}"><h5 class="card-title">Cv requests</h5></a>
                      <p class="card-text">You can admin who want to have your cv and sent it.</p>
                    </div>
                </div>
            </div>

            
            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/galery.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('admin.galery')}}"><h5 class="card-title">Galery</h5></a>
                      <p class="card-text">You can upload media content to your site.</p>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/timeline.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{route('admin.timeline')}}"><h5 class="card-title">Timeline</h5></a>
                      <p class="card-text">You can add or remove experiences of your timeline.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 mb-2">
                <div class="card" style="width: 100%;">
                    <img src="{{env('ASSETS_URL')}}img/svg/icons/testimonials.svg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="{{route('admin.testimonials')}}"><h5 class="card-title">Testimonials</h5></a>
                      <p class="card-text">You can admin who want to have your cv and sent it.</p>
                    </div>
                </div>
            </div>
            

        </div>
    </div>

@else
    @include('admin.partials.accessdenied')
@endif

@endsection
