<!--Alerts------------------>
@if( isset($success) )
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{$success}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if( isset($warning) )
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{$warning}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(isset($_GET['success']))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{$_GET['success']}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
@if(isset($_GET['warning']))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{$_GET['warning']}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<!--End Alerts------------------>