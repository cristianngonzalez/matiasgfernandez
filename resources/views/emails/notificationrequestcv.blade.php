@include('emails.partials.header')

<div style="padding-left: 10px; padding-right:20px; min-height: 300px;">

    <div style="padding-left: 20px; padding-right:20px ;">
        <h1>Alguien ha solicitado su curriculum</h1>

        <table>
            <tr>
                <td>Correo: <a href="mailto:{{$email}}"></a>{{$email}}</td>
            </tr>
        </table>
    </div>
    
</div>

@include('emails.partials.footer')
  