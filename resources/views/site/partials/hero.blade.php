<!-- HERO -->
<div class="dizme_tm_section" id="home">
    <div class="dizme_tm_hero">
        <div class="background" data-img-url="{{asset('img/slider/2.png')}}"></div>
        <div class="container">
            <div class="content">
                <div class="details">
                    <div class="name">
                        <h3>Matías Fernández</h3>
                    </div>
                    <div class="job">
                        <p>25 años diseñando, implementando y liderando <span class="greenText">estrategias de marketing y comerciales</span>.</p><br>
                        <p>En los ultimos años me he enfocado en la disrupcion digital, como así también cerca del ecosistema <span class="purpleText">emprendedor & startups</span>.</p>
                    </div>
                    <div class="button">
                        <div class="dizme_tm_button">
                            <a class="anchor" href="#about"><span>Start Game</span></a>
                        </div>
                        <div class="social">
                            <ul>

                                @foreach ($socialnetworks as $socialnetwork)
                                    <li>
                                        <a href="{{$socialnetwork->link}}" target="_blank">
                                            <i class="{{$socialnetwork->icon}}"></i>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="avatar">
                    <div class="image">
                        <img src="img/slider/avatar-2.png" alt="" />
                        <span class="skills illustrator anim_moveBottom"><img class="svg" src="{{asset('img/arrows//arrow-1.svg')}}" alt="" /></span>
                        <span class="skills figma anim_moveBottom"><img class="svg" src="{{asset('img/arrows/arrow-2.svg')}}" alt="" /></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="dizme_tm_down">
            <a class="anchor" href="#about">
                <svg width="26px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
                    <path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#000;stroke-width:20px;"/>
                    <path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#000;stroke-width:20px;"/>
                </svg>
            </a>
        </div>
    </div>
</div>
<!-- HERO -->