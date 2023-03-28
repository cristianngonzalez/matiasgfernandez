@include('emails.partials.header')

<div style="padding-left: 20px; padding-right:20px; min-height: 300px;  max-width: 500px;  margin-left: auto; margin-right: auto;">
  
  <div style="padding-left: 20px; padding-right:20px ;">
    {!!$msg!!}
  </div>
  
</div>

@include('emails.partials.footer')