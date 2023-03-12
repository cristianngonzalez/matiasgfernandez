<div class="dizme_tm_section" id="chanel">
    <div class="dizme_tm_services">
        <div class="container">
            <div class="dizme_tm_main_title" data-align="center">
                <span>Videos</span>
                <h3></h3>
            </div>
            <div class="service_list">
                <ul>
                    @foreach ($videos as $video)
                        <li class="wow fadeInLeft" data-wow-duration="1s">
                            <div class="video_inner tilt-effect">
                                <iframe width="560" height="315" src="{{$video->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/service/5.png" alt="" /></div>
        <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/service/6.png" alt="" /></div>
    </div>
</div>