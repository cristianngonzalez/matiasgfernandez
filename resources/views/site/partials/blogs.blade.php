<!-- BLOG -->
<div class="dizme_tm_section" id="blog">
    <div class="dizme_tm_news">
        <div class="container">
            <div class="dizme_tm_main_title" data-align="center">
                <span>Mi Blog</span>
                <h3>Mis mas recientes aportes</h3>
                <a href="{{route('site.blogs')}}" style="text-decoration: none; color:coral;">Ver todos mis blogs click aquí!</a>
            </div>
            <div class="news_list">
                <ul>
                    @foreach ($blogs as $blog)

                        @include('site.partials.blogcard')
                    
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="brush_1 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/news/1.png" alt="" /></div>
        <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/news/2.png" alt="" /></div>
    </div>
</div>
<!-- /BLOG -->