<!-- ABOUT -->
<div class="dizme_tm_section" id="about">

    @include('site.partials.game.game')

    <div class="dizme_tm_about">
        <div class="container">

            <div class="wrapper">
                <div class="left">
                    <div class="image">
                        <img src="{{env('ASSETS_URL')}}img/about/2.png" alt="" />
                        <div class="numbers project">
                            <div class="wrapper">
                                <h3><span class="dizme_tm_counter" data-from="0" data-to="25" data-speed="2000"></span></h3>
                                <span class="name">Años de<br />trayectoria</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="title wow fadeInUp" data-wow-duration="1s">
                        <span>{!!$staticcontents[1]->subtitle!!}</span>
                        <h3>{!!$staticcontents[1]->maintitle!!}</h3>
                    </div>
                    <div class="text wow fadeInUp" data-wow-duration="1s">
                        <p>{!!$staticcontents[1]->paragraph!!}</p>
                    </div>
                    <div class="dizme_tm_button wow fadeInUp" data-wow-duration="1s">
                        <a class="anchor" href="#contact"><span>Contáctame</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/about/1.png" alt="" /></div>
        <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/about/2.png" alt="" /></div>
    </div>
</div>
<!-- /ABOUT -->