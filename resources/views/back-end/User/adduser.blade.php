@extends('back-end.shared.view')

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
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">Add User</h3>
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
<form style="margin:0px 50px 0px 30px;" action="http://127.0.0.1:8000/adduser" method="POST">

  {{csrf_field()}}

 <div class="form-group" style="margin:10px 0px 10px 0px;">
   <input style="font-size:14px; padding: 15px 15px 15px 30px;" type="text" class="form-control" value="{{Request::old('name')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name" name="name"  required>
 </div>

 <div class="form-group" style="margin:10px 0px 10px 0px;">
   <input style="font-size:14px;padding: 15px 15px 15px 30px; " type="email" class="form-control" value="{{Request::old('email')}}" id="exampleInputEmail1" placeholder="E-mail" name="email" required>
 </div>

 <div class="form-group" style="margin:10px 0px 10px 0px;">
   <input style="font-size:14px;padding: 15px 15px 15px 30px; " type="password" class="form-control" value="{{Request::old('pass')}}" id="exampleInputPassword1" placeholder="Password" name="pass" required>

 </div>
 <div class="form-group" style="margin:10px 0px 10px 0px;">
   <input style="font-size:14px; padding: 15px 15px 15px 30px;" type="password" class="form-control" value="{{Request::old('cpassword')}}" id="exampleInputPassword1" placeholder="Confirm Password"  name="cpassword" required>
 </div>
 <select name="group" class="browser-default custom-select" style="margin:2px 2px 2px 10px;" >
    <option value="selectuser">Select User Type</option>
    <option value="Admin">Admin</option>
    <option value="User">User</option>
 </select>
 <button class="btn btn-primary btn-round-lg btn-lg" type="submit" style="margin:5px 0px 5px 380px;"><i class="fa fa-user-plus"> Submit</i></button>

</form>





@endsection
