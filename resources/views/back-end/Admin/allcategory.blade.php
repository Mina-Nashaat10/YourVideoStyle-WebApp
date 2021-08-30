@extends("back-end.shared.view")

@section('activebutton')
<?php
$GLOBALS['isactive1'] = '';
$GLOBALS['isactive2'] = '';
$GLOBALS['isactive3'] = 'active';
$GLOBALS['isactive4'] = '';

 ?>
@endsection
@section('title')
  Category
@endsection
@section('headername')
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">All Category</h3>
@endsection

@section('content')
<table  class="table table-borderd" >
   <tr>
     <!-- <th>  id </th> -->
      <th>  Name   </th>
      <th> Description </th>
      <th>  Action </th>
      <th>  </th>


   </tr>

   @foreach($categories as $row)

   <tr>

      <td>  {{ $row['name']}}</td>
      <td>  {{ $row['des']}}</td>

      <td>

       <a href="{{ url('updatecategory1/' .$row->id)}}">Edit</a>

     </td>

     <td>
       <a href="{{ url ('index/deleted/' .$row->id)}}">Delete</a>



     </td>

   </tr>



   @endforeach


</table>
<div style="margin:5px 0px 5px 25px; font-weight:bold; font-size:20px;">
  Add Anthor Category ?
  <a href="addcategory1"type="button">Add</a>
</div>
<div style="margin:5px 0px 5px 25px; font-weight:bold; font-size:20px;">
<a href="Category/1"type="button"> Categories Videos</a>
</div>
@endsection
