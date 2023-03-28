@include('emails.partials.header')

<div style="padding-left: 20px; padding-right:20px ;  min-height: 300px; max-width: 500px;  margin-left: auto; margin-right: auto;">
    
    <div style="padding-left: 20px; padding-right:20px ;">
    
        <p>Hola {{$comment_name}}, Matías Fernández respondio al comentario que has hecho en un articulo.</p>

        @include('emails.partials.blogcard')

        <h3 style="padding: 0px; margin-bottom: 3px;">Tu comentario</h3>
        <p style="margin-top: 0px; padding-top: 0px;">{{$comment_comment}}</p>
        <div style="padding-left: 20px; margin-top: 5px;">
            <div class="blog-comment-reply-contanier-picture" style="float: left; margin-right: 10px">
                <img src="https://www.matiasgfernandez.com/public/img/slider/small-avatar.png" style="width: 35px; border-radius: 40px;" alt="Matias Fernandez">
            </div>
            <div class="blog-comment-reply">
                <p style="margin-bottom: 0px;"><strong>Matías Fernández</strong></p>
                <p style="margin-top: 4px;">{{$reply}}</p>
            </div>
        </div>

    </div>
    
</div>

@include('emails.partials.footer')