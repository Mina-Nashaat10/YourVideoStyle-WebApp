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
@section('title')

 Add {{$TableName}}

@endsection


@section('content')




@component("back-end.shared.create",["TableName"=>$TableName])

        <form action="{{route("$RouteName.store")}}" method="post" enctype="multipart/form-data">


            @include("back-end.$RouteName.form")
            <div align="right">
            <button  type="submit" class="btn btn-primary btn-round">
                <b>Add {{$TableName}}</b>
           </button>
            </div>
        </form>
 @endcomponent

@endsection
