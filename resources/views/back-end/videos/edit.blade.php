@extends('back-end.shared.view')
@section('activebutton')
<?php
$GLOBALS['isactive1'] = '';
$GLOBALS['isactive2'] = '';
$GLOBALS['isactive3'] = '';
$GLOBALS['isactive4'] = 'active';

 ?>
@endsection
@section('title')
  Videos
@endsection
@php

 function get_url($url)
{

$pattern='%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
   preg_match($pattern, $url, $match);

   return isset($match[1])? $match[1]:"";
}

@endphp

@section('title')

 Edit {{$TableName}}

@endsection



@section('content')



@component("back-end.shared.edit",["TableName"=>$TableName])
        <form action="{{route("$RouteName.update",["id"=>$row])}}" method="post" enctype="multipart/form-data">
            {{method_field("put")}}

            @include("back-end.$RouteName.form")
            <div align="right">
            <button  type="submit" class="btn btn-primary btn-round">
                <b>Update {{$TableName}}</b>
           </button>
            </div>
        </form>
@slot("md4")

@php $url=get_url($row->Link) @endphp

@if(isset($url)&&!empty($url))


<iframe width="370" height="300" src="https://www.youtube.com/embed/{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

@else

<video width="370" height="300" controls>

    <source src="{{url('video/'.$row->src)}}" type="video/mp4">

</video>




@endif



<img src="{{url('uploads/'.$row->image)}}" width="400">

@endslot

@endcomponent


@endsection
