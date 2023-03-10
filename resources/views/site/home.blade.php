@extends('layouts.site')

@section('content')


@include('site.partials.preloader')

<!-- WRAPPER ALL -->
<div class="dizme_tm_all_wrap" data-magic-cursor="show">

    @include('site.partials.headerhome')
    
    @include('site.partials.hero')
    
    @include('site.partials.about')


    @include('site.partials.testimonials') 

    @include('site.partials.timeline')

    @include('site.partials.academy')
    
    
    @include('site.partials.galery')
    
    @include('site.partials.blogs')

    @include('site.partials.comunidad')
    
    @include('site.partials.contact')
    
    @include('site.partials.footer')
    
</div>
<!-- / WRAPPER ALL -->

@endsection
