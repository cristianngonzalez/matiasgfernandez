<!-- CONTACT -->
<div class="dizme_tm_section" id="contact">
    <div class="dizme_tm_contact">
        <div class="container">
            <div class="dizme_tm_main_title" data-align="center">
                <span>{!!$staticcontents[8]->subtitle!!}</span>
                <h3>{!!$staticcontents[8]->maintitle!!}</h3>
                <p>{!!$staticcontents[8]->paragraph!!}</p>
            </div>
            <div class="contact_inner">
                
                <div class="wow" data-wow-duration="1s">
                    <div class="fields">
                        <form action="" method="post" class="contact_form" id="contact_form" >
                            <div class="returnmessage" data-success="He recibido su mensaje, Tan pronto como pueda me comunicare contigo."></div>
                            <div class="empty_notice"><span>Por favor rellene todos los campos</span></div>
                            <div class="input_list">
                                <ul>
                                    <li><input id="name" type="text" placeholder="Su nombre" required/></li>
                                    <li><input id="email" type="text" placeholder="Su email" required/></li>
                                    <li><input id="phone" type="number" placeholder="Su telefono (opcional)" /></li>
                                    <li><input id="subject" type="text" placeholder="Asunto" required/></li>
                                </ul>
                            </div>
                            <div class="message_area">
                                <textarea id="message" placeholder="Escriba su mensaje aquí" required></textarea>
                            </div>
                            <div class="dizme_tm_button">
                                <button id="send_message"><span>Enviar</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="brush_2 wow fadeInRight" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/contact/2.png" alt="" /></div>
            </div>
            
        </div>
        <div class="brush_1 wow fadeInLeft" data-wow-duration="1s"><img src="{{env('ASSETS_URL')}}img/brushes/contact/1.png" alt="" /></div>
    </div>
</div>
<!-- /CONTACT -->