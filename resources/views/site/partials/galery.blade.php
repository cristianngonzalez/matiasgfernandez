<!-- Galery -->
<div class="dizme_tm_section" id="galeria">
    <div class="dizme_tm_portfolio">
        <div class="container">
            <div class="dizme_tm_main_title" data-align="center">
                <span>Mi Galeria</span>
                <h3></h3>
                <p></p>
            </div>
            <div class="portfolio_filter">
                <ul>
                    <li><a href="#" class="current" data-filter="*">Todas</a></li>
                    @foreach ($taggaleries as $taggalery)
                        <li><a href="#" data-filter=".{{$taggalery->name}}">{{$taggalery->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="dizme_tm_portfolio_titles"></div>
            <div class="portfolio_list wow fadeInUp" data-wow-duration="1s">
                <ul class="gallery_zoom grid">

                    @foreach ($galeries as $galery)
                        <li class="{{$galery->taggaleries->name}} grid-item">
                            <div class="inner">
                                <div class="zoom" data-title="" data-category="{{$galery->taggaleries->name}}">
                                    <a class="popup-youtube" href="{{env('ASSETS_URL')}}storage/{{$galery->picture}}">
                                        <img src="{{env('ASSETS_URL')}}storage/{{$galery->picture}}" alt="{{$galery->comment}}" />
                                        <div class="main" data-img-url="{{env('ASSETS_URL')}}storage/{{$galery->picture}}"></div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="brush_1 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/portfolio/1.png" alt="" /></div>
        <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/portfolio/2.png" alt="" /></div>
    </div>
</div>
<!-- /galery -->