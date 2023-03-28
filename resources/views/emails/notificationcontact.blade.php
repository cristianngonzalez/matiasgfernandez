@include('emails.partials.header')

<div style="padding-left: 10px; padding-right:20px; min-height: 300px;  max-width: 500px;  margin-left: auto; margin-right: auto;">

    <div style="padding-left: 20px; padding-right:20px ;">
        <h1>Has recibido un mensaje</h1>
        <p>Un usuario del sitio web ha enviado un mensaje desde el formulario de contacto</p>

        <div>Asunto: {{$sub}}</div>
        <div>Email: <a href="mailto:{{$email}}">{{$email}}</a></div>
        <div>Phone: {{$phone}}</div>
        <div>Message:
            <div>{{$msg}}</div>
        </div>
    </div>

</div>

@include('emails.partials.footer')