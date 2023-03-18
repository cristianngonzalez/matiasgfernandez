@include('emails.partials.header')

<div style="padding-left: 20px; padding-right:20px; min-height: 300px; max-width: 500px; margin-left: auto; margin-right: auto;">

    <div style="padding-left: 20px; padding-right:20px ;">
    
        <p>Alguien ha comentado un articulo.</p>

        @include('emails.partials.blogcard')

        <h3 style="padding: 0px; margin-bottom: 3px;">Comentario</h3>
        <p style="margin-top: 0px; padding-top: 0px;">{{$comment}}</p>

        <a href="https://www.matiasgfernandez.com/admin/comments" 
            style="
                text-decoration: none; 
                background: black; 
                color: white;
                padding: 5px;
                border-radius: 5px;
            "
        >Ver comentarios sin responder</a>

    </div>

</div>

@include('emails.partials.footer')
  