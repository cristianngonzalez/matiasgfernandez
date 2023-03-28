@include('emails.partials.header')

<div style="padding-left: 20px; padding-right:20px; min-height: 300px;">
  
  <div style="padding-left: 20px; padding-right:20px ;">
    {!!$msg!!}
  </div>
  
</div>

@include('emails.partials.footer')