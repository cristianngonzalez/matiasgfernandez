
<div class="dizme_tm_section" id="service">
    <div class="dizme_tm_services">
        <div class="container">
            <div class="dizme_tm_main_title" data-align="center">
                <span>{!!$staticcontents[4]->subtitle!!}</span>
                <h3>{!!$staticcontents[4]->maintitle!!}</h3>
                <p>{!!$staticcontents[4]->paragraph!!}</p>
                <a href="{{$socialnetworks[0]->link}}" target="_blank" style="text-decoration: none; color:coral;">Conocer mas <i class="{{$socialnetworks[0]->icon}}"></i> click aquí!</a>
            </div>
            <div class="service_list">
                <ul>

                    @foreach ($academies as $academy)
                        <!---------------------------------------------------------------------------------->
                        <li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="list_inner tilt-effect">
                                <span class="icon">
                                    <img class="svg" src="{{env('ASSETS_URL')}}storage/{{$academy->logo}}" alt="" />
                                </span>
                                <div class="title">
                                    <h3>{{$academy->institution}}</h3>
                                    <span class="price">{{$academy->degree}}</span>
                                    <span>{{$academy->date}}</span>
                                </div>
                            </div>
                        </li>
                        <!---------------------------------------------------------------------------------->
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="img/brushes/service/5.png" alt="" /></div>
        <div class="brush_2 wow zoomIn" data-wow-duration="1s"><img src="img/brushes/service/6.png" alt="" /></div>
    </div>
</div>