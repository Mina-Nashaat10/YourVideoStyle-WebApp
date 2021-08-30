@extends("back-end.shared.view")
@section('activebutton')
<?php
$GLOBALS['isactive1'] = '';
$GLOBALS['isactive2'] = 'active';
$GLOBALS['isactive3'] = '';
$GLOBALS['isactive4'] = '';

 ?>
@endsection
@section('title')
  Users
@endsection
@section('headername')
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">Edit User</h3>
@endsection
@section('content')
 <?php if (count($errors) > 0): ?>
   <div class="alert alert-danger">
     <ul>
       <?php foreach ($errors->all() as $value): ?>
         <li>{{$value}}</li>
       <?php endforeach; ?>
     </ul>
   </div>
 <?php endif; ?>
<form style="margin:0px 50px 0px 30px;" action="http://127.0.0.1:8000/edit/{{$oneuser->id}}" method="POST">
  {{ csrf_field() }}
  <div class="form-group" style="margin:10px 0px 10px 0px;">
    <input style="font-size:14px; padding: 15px 15px 15px 30px;" type="name" class="form-control" value="{{Request::old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name     old name : {{$oneuser->name}}" name="name"  required>
  </div>

  <div class="form-group" style="margin:10px 0px 10px 0px;">
    <input style="font-size:14px;padding: 15px 15px 15px 30px; " type="email" class="form-control" value="{{Request::old('email')}}" id="exampleInputEmail1" name="email" placeholder="E-mail     old email : {{$oneuser->email}}" required>
  </div>


  <div class="form-group" style="margin:10px 0px 10px 0px;">
    <input style="font-size:14px;padding: 15px 15px 15px 30px; " type="password" class="form-control" value="{{Request::old('pass')}}" id="exampleInputPassword1"  name="pass" placeholder="Password     old password : {{$oneuser->password}}" required>

  </div>

  <div class="form-group" style="margin:10px 0px 10px 0px;">
    <input style="font-size:14px; padding: 15px 15px 15px 30px;" type="password" class="form-control" value="{{Request::old('cpassword')}}" id="exampleInputPassword1" placeholder="Confirm Password"  name="cpassword" required>
  </div>
  <input type="submit" class="btn btn-primary btn-round-lg btn-lg" style="margin:5px 0px 5px 380px;">
</form>

@endsection
