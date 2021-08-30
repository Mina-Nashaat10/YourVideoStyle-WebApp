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
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">All Users</h3>
@endsection

@section('content')
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col" class="text-center">id</th>
      <th scope="col" class="text-center">Name</th>
      <th scope="col" class="text-center">E-mail</th>
      <th scope="col" class="text-center">group</th>

      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($all as $key => $value): ?>
      <tr>
        <td scope="row" class="text-center">{{$value->id}}</td>
        <td class="text-center">{{$value->name}}</td>
        <td class="text-center">{{$value->email}}</td>

        <td class="text-center">{{$value->group}}</td>
        <td class="text-center">
          <a href="edituser/{{$value->id}}" type="button" class="btn btn-dark">Edit</a>
          <a href="deleteuser/{{$value->id}}" type="button" class="btn btn-dark">Del</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div style="margin:5px 0px 5px 25px; font-weight:bold; font-size:20px;">
  Add Anthor User ?
  <a href="add"type="button">Add</a>
</div>

@endsection
