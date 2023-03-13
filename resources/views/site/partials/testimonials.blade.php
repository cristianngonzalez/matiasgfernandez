<!-- TESTIMONIALS -->
<div class="dizme_tm_section" id="trayectoria">
    <div class="dizme_tm_testimonials">
        <div class="dizme_tm_main_title" data-align="center">
            <span>{!!$staticcontents[2]->subtitle!!}</span>
            <h3>{!!$staticcontents[2]->maintitle!!}</h3>
            <p>{!!$staticcontents[2]->paragraph!!}</p>
        </div>
        <div class="list_wrapper">
            <div class="total">
                <div class="in">
                    <ul class="owl-carousel owl-theme">

                        @foreach ($testimonials as $testimonial)
                            <li>
                                <div class="icon">
                                    <img class="svg" src="{{env('ASSETS_URL')}}img/svg/testimonials/quote.svg" alt="" />
                                </div>
                                <div class="text">
                                    <p>{{$testimonial->testimonial}}</p>
                                </div>
                                <div class="short">
                                    <div class="image">
                                        <div class="main" data-img-url="{{$testimonial->avatar}}"></div>
                                    </div>
                                    <div class="detail">
                                        <h3>{{$testimonial->name}}</h3>
                                        <span>{{$testimonial->detail}}</span>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
                <div class="left_details">
                    <!--
                    <div class="det_image one wow fadeIn" data-wow-duration="1s" data-img-url="img/testimonials/2.jpg"></div>
                    <div class="det_image two wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-img-url="img/testimonials/1.jpg"></div>
                    <div class="det_image three wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-img-url="img/testimonials/3.jpg"></div>
                    <div class="det_image four wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" data-img-url="img/testimonials/4.jpg"></div>
                    -->
                    <span class="circle green animPulse"></span>
                    <span class="circle yellow animPulse"></span>
                    <span class="circle border animPulse"></span>
                </div>
                <div class="right_details">
                    <!--
                    <div class="det_image one wow fadeIn" data-wow-duration="1s" data-img-url="img/testimonials/5.jpg"></div>
                    <div class="det_image two wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" data-img-url="img/testimonials/6.jpg"></div>
                    <div class="det_image three wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" data-img-url="img/testimonials/7.jpg"></div>
                    -->
                    <span class="circle yellow animPulse"></span>
                    <span class="circle purple animPulse"></span>
                    <span class="circle border animPulse"></span>
                </div>
            </div>
        </div>
        <div class="brush_1 wow fadeInRight" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/testimonials/1.png" alt="" /></div>
    </div>
</div>
<!-- /TESTIMONIALS -->