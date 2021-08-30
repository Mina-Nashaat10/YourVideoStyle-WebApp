@extends("back-end.shared.view")
@section('activebutton')
<?php
$GLOBALS['isactive1'] = '';
$GLOBALS['isactive2'] = '';
$GLOBALS['isactive3'] = '';
$GLOBALS['isactive4'] = '';

 ?>
@endsection
@section('title')
  Videos
@endsection
@section('cssfiles')
  <link href="{{ asset('css/animate1.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
  <link href="{{ asset('css/fontawsom-all1.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('jsfiles')
  <script  src="{{ asset('js/bootstrap11.min.js') }}"></script>
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}" ></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/script11.js') }}" ></script>
@endsection
@section('headername')
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">Result Search</h3>
@endsection
@section('content')
<?php if (count($finalreslt) == 0 ): ?>
  <h3>No Videos To Show</h3>
<?php else: ?>
  <div class="latest-video latest-video container-fluid">
    <div class="video-row row">
  <?php foreach ($finalreslt as $key => $value): ?>
      <div class="col-lg-3 col-md-4 col-sm-6 ">
       <a href="Category/Video/{{$value->id}}">
          <div class="video-card">
              <img src="/uploads/{{$value->image}}" width="200" height="150"alt="error">
              <div class="row details no-margin">
                  <h6 style="font-size:17px">{{$value->name}} {{$value->des}}</h6>
              </div>
          </div>
          </a>
      </div>
  <?php endforeach; ?>
</div>
</div>
<?php endif; ?>

@endsection
