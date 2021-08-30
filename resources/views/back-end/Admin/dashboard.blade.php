@extends("back-end.shared.view")

@section('activebutton')
<?php
$GLOBALS['isactive1'] = 'active';
$GLOBALS['isactive2'] = '';
$GLOBALS['isactive3'] = '';
$GLOBALS['isactive4'] = '';

 ?>
@endsection
@section('title')
  Dashboard
@endsection
@section('headername')
<h3 class="title" style="font-size:30px; font-weight:bold; margin:20px;">Dashboard</h3>
@endsection

<?php $i = 0; ?>
@section('content')
<h6>Primary</h6>
<div class="row">
  <?php foreach ($statistics as $key => $value): ?>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <img src="./dashboard_assets/{{$statisticsicons[$i]}}.png" width="75" height="75" style="margin-top:10px ">
            </div>
            <div class="float-right" style="margin-top:10px">
              <p class="mb-0 text-right">{{$key}} Count</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-center">{{$value}}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++;
    $noofvideos = $value;?>
  <?php endforeach; ?>
</div>

<h6>Videos Category</h6>
<div class="row">
  <?php foreach ($vc as $key => $value): ?>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="clearfix">
            <div class="float-left">
              <img src="./icons/{{$allcategoriesicon[$key]}}" width="75" height="75" style="margin-top:10px ">
            </div>
            <div class="float-right" style="margin-top:10px">
              <p class="mb-0 text-right">{{$allcategories[$key]}} Videos</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-center">{{$value}}</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++;
    ?>
  <?php endforeach; ?>
</div>

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Videos</h4>
        <div class="table-responsive">
          <table class="table table-bordered" >
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Full name
                </th>
                <th>
                  No Of Videos
                </th>
                <th>
                  Progress
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($users as $key => $value): ?>
                <tr>
                  <td class="font-weight-medium">
                    {{$i}}
                  </td>
                  <td align="center">
                    {{$users[$key]['name']}}
                  </td>
                  <td align="center">
                    {{$usersVideos[$key]}}
                  </td>
                  <?php
                    $pro = ($usersVideos[$key] / $noofvideos)*100;
                    $txt = "";
                    $i++;
                    switch ($pro) {
                      case $pro >= 0 &&  $pro<= 25:
                        $txt = "progress-bar bg-success progress-bar-striped";
                        break;
                      case $pro >= 26 &&  $pro<= 50:
                        $txt = "progress-bar bg-warning progress-bar-striped";
                        break;
                      case $pro >= 51 &&  $pro<= 75:
                        $txt = "progress-bar bg-primary progress-bar-striped";
                        break;
                      case $pro >= 76 &&  $pro<= 100:
                        $txt = "progress-bar bg-danger progress-bar-striped";
                        break;
                      default:

                        break;
                    }
                   ?>
                  <td align="center">
                    <div class="progress">
                      <div class="{{$txt}}" role="progressbar" style="width: {{$pro}}%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
<?php
/*
progress-bar bg-danger progress-bar-striped  // red from 75 to 100
progress-bar bg-success progress-bar-striped // green from 0 to 25
progress-bar bg-warning progress-bar-striped //    from 26 to 50
progress-bar bg-primary progress-bar-striped //   from 51 to 75
*/ ?>
