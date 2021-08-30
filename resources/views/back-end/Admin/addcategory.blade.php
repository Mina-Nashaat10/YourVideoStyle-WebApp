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
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">Add Category</h3>
@endsection

@section('content')
<form action ="addcategory" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="row">
    <div class="col-md-5 pr-1">
      <div class="form-group">
        <label>Name </label>
        <input type="text" class="form-control"  placeholder="Name" name="name" >
      </div>
    </div>
    <div class="col-md-3 px-1">
      <div class="form-group">
        <label>Description</label>
        <input type="text" class="form-control" placeholder="Description" name="des">
      </div>

     </div>


          <input type="file" name="icon"   class="form-control">





  </div>
    <div class="button-container">
<button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
  <i > Submit</i>
</button>


</div>
</form>
@endsection
