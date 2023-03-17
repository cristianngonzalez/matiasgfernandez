@include('emails.partials.header')

<div style="padding-left: 10px; padding-right:20px; min-height: 300px;">
    <h1>Alguien ha comentado tu blog</h1>
    <p>El usuario {{$name}} con el correo {{$email}} comento tu articulo: <a href="https://www.matiasgfernandez.com/blog?id={{$blog_id}}">{{$blog_title}}</a></p>

    <p>Su comentario ha sido el siguiente: <i>{{$comment}}</i></p>

</div>

@include('emails.partials.footer')
  