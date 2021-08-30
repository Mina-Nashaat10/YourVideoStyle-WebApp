 @extends('back-end.shared.view')
@section('activebutton')
<?php
$GLOBALS['isactive1'] = '';
$GLOBALS['isactive2'] = '';
$GLOBALS['isactive3'] = 'active';
$GLOBALS['isactive4'] = '';

 ?>
@endsection
@section('headername')
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">Videos Categories</h3>
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
@section('content')
<?php foreach ($all as $key => $value): ?>
  <a title="{{$value->name}}" href="http://127.0.0.1:8000/Category/{{$value->id}}"type="submit" class="btn btn-primary btn-circle btn-x2" style="
    width: 110px;
    height: 110px;
    padding: 30px 14px;
    font-size: 24px;
    line-height: 1.33;
    background: white;
    border-radius: 70px;" ><img src="../icons/{{$value->icon}}" width="45"></i></a>
<?php endforeach; ?>

<div class="latest-video latest-video container-fluid">
<div class="container">
    <div class="row no-margin video-title">
        <h6>
            <i class="fas fa-book"></i>
            {{$type}}</h6>
    </div>
    <div class="video-row row">
      <?php foreach ($catvideos as $key => $value): ?>
        <div class="col-lg-3 col-md-4 col-sm-6 ">
         <a href="Video/{{$value->id}}">
            <div class="video-card">
                <img src="/uploads/{{$value->image}}" width="200" height="150"alt="error">
                <div class="row details no-margin">
                    <h6>{{$value->name}} {{$value->des}}</h6>
                    <p></p>
                </div>
            </div>
            </a>
        </div>
      <?php endforeach; ?>
    </div>
</div>
</div>

@endsection
