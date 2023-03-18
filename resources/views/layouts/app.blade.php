<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Matias Fernandez</title>

    <link  rel="stylesheet" href="{{env('ASSETS_URL')}}css/admin.css">

    <!-- Scripts -->
    <script src="{{env('ASSETS_URL')}}js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{env('ASSETS_URL')}}/css/app.css" rel="stylesheet">


    <script src="https://cdn.tiny.cloud/1/doeso75d5cvooznsm8sq0z9c7f3mrmb6snwbpazfei028n7g/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <div id="app">


        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('admin')}}">{{ config('app.name', 'Laravel') }}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('admin')}}">Admin</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.socialnetworks')}}">Social networks</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.users')}}">Users</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Content
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{route('admin.blogs')}}">Blogs</a></li>
                      <li><a class="dropdown-item" href="{{route('admin.galery')}}">Galery</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{route('admin.timeline')}}">Timeline</a></li>
                      <li><a class="dropdown-item" href="{{route('admin.testimonials')}}">Testimonials</a></li>
                    </ul>
                  </li>
                  <a href="{{url('/')}}" target="_blank" class="btn btn-secondary">View site</a>
                </ul>

                 <!-- Right Side Of Navbar -->
                 <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>


              </div>
            </div>
          </nav>


          <main class="py-4">
                @yield('content')
          </main>
    </div>
</body>
</html>
