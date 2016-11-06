<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>طرح&zwnj;های من</title>

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="examples/css/sweetalert.min.css">

  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="assets/vendor/bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css">
</head>

<body class="layout-container ls-top-navbar si-r3-md-up">
<!-- Navbar -->
@include('Pannel/nav')
<!-- // END Navbar -->
<!-- Sidebar -->
@include('Pannel/Sidebar',array('active'=>'service'))
<!-- // END Sidebar -->

  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <ol class="breadcrumb hidden-print">
        <li><a href="/Pannel">صفحه اصلی</a></li>
        <li class="active">سرویس&zwnj;های من</li>
      </ol>

      <h2 class="center">سرویس&zwnj;ها</h2>
      <p class="center lead">مشاهده و تغییر سرویس های خریداری شده.</p>
      <div class="alert  alert-info alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>راهنمایی</strong>
        <p>برای اطلاع از جزییات سرویس روی نام آن کلیک کنید.</p>
        <p><i class="material-icons md-18">autorenew</i> تغییر شناسه سرویس</p>
        <p><i class="material-icons md-18">update</i>تمدید سرویس</p>
        {{--<p><i class="material-icons md-18">delete</i>حذف سرویس</p>--}}
      </div>
      <!-- Table -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="center" style="font-size: 2em;">
              سرویس های من
            {{--</div>--}}
            {{--<ul class="pager">--}}
            {{--<li disabled><a href="#">جدیدتر</a></li>--}}
            {{--<li disabled><a href="#">قدیمی تر</a></li>--}}
            {{--</ul>--}}
          </div>
            <div class="col-md-3 text-md-right">
              <div class="form-group">
                <label class="m-r-1">فیلتر:</label>
                <select class="c-select">
                  <option selected value="0">همه</option>
                  <option value="1">فعال ها</option>
                  <option value="2">غیر فعال ها</option>
                </select>
              </div>
              {{--نمایش :--}}
              {{--<button class="btn-success btn-rounded"> فعال ها </button>--}}
              {{--<button class="btn-danger btn-rounded">غیر فعال ها </button>--}}
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered m-b-0">
            <thead>
            <tr>
              <th class="center">شماره سرویس</th>
              <th class="center">شناسه سرویس</th>
              <th style="width:60px;" class="center">درخواست ها</th>
              <th>شماره پلن</th>
              <th class="center">شروع طرح</th>
              <th class="center">پایان طرح</th>
              <th class="center">وضعیت</th>
              <th class="center">عملیات&zwnj;ها</th>
            </tr>
            </thead>
            <tbody>
            <?php $count=1; ?>
            @foreach($Services as $service)
              @if($service['IsActive']==1)
                <?php $class='enable_one'?>
              @else
                <?php $class='off_one'?>
              @endif
            <tr class="{{$class}}">
              <td class="center">{{$service['ServiceId']}}</td>
              <td class="center">{{$service['Token']}}</td>
              <td class="center">{{$service['Count']}}</td>
              <td>
                {{--<a href="#" data-toggle="modal" data-target="#myModal">--}}
                <P>
                   <span>{{$service['PlanId']}}&nbsp;
                     {{--<small>فلان سرویس</small>--}}
                   </span>
                </P>
              </td>
              <td class="center">{{$service['StartDate']}}</td>
              <td class="center">{{$service['FinishDate']}}</td>
              <td class="center">
                @if($service['IsActive']==1)
                  <span class="label label-pill label-success">فعال</span>
                @else
                  <span class="label label-pill label-danger">تمام&zwnj;شده</span>
                @endif
              </td>
              <td class="center">
                <a href="/ChangeInfo?service={{$service['ServiceId']}}"  data-toggle="tooltip" title="تغییر شناسه" class="btn btn-white btn-xs try-sweet-successMessage"><i class="material-icons md-18">autorenew</i></a>
                <a href="/bankremessage?service={{$service['ServiceId']}}"  data-toggle="tooltip" title="تمدید سرویس" class="btn btn-success btn-xs "><i class="material-icons md-18">update</i></a>
                {{--<a href="#" class="btn btn-danger btn-xs try-sweet-delete"><i class="material-icons md-18">delete</i></a>--}}
              </td>
            </tr>
              <?php $count++;?>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <!-- // END Table -->

    </div>
  </div>
  <!-- Modal -->
  {{--<div class="modal fade" id="myModal" tabindex="1" role="dialog"  >--}}
    {{--<div class="modal-dialog" role="document">--}}
      {{--<div class="modal-content">--}}
        {{--<div class="modal-header">--}}
          {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
            {{--<span aria-hidden="true">&times;</span>--}}
          {{--</button>--}}
          {{--<h4 class="modal-title" id="myModalLabel"><span>سرویس شماره 3&nbsp;<small>vesta.ir</small></span></h4>--}}
        {{--</div>--}}
        {{--<div class="modal-body">--}}
          {{--<div class="card">--}}
            {{--<div class="card-block">--}}
              {{--<h5 class="card-title">تاریخ شروع:</h5>--}}
              {{--<p class="card-text">1395/07/11</p>--}}
              {{--<h5 class="card-title">تاریخ پایان:</h5>--}}
              {{--<p class="card-text">1395/09/11</p>--}}
              {{--<h5 class="card-title">قیمت:</h5>--}}
              {{--<p class="card-text">48,000 تومان</p>--}}
              {{--<h5 class="card-title">کد سرویس:</h5>--}}
              {{--<p class="card-text">22bjeb2j3b</p>--}}
              {{--<h5 class="card-title">وضعیت:</h5>--}}
              {{--<p class="card-text">فعال</p>--}}
              {{--<h5 class="card-title">تمدید:</h5>--}}
              {{--<p class="card-text">نشده</p>--}}

            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
        {{--<div class="modal-footer">--}}
          {{--<button type="button" class="btn btn-primary" data-dismiss="modal">خروج</button>--}}
        {{--</div>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
  <!-- End Modal -->

  <!-- jQuery -->
  <script src="assets/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/vendor/tether.min.js"></script>
  <script src="assets/vendor/bootstrap-rtl-3.3.4/dist/js/bootstrap.min.js"></script>
  <!--<script src="assets/vendor/bootstrap.min.js"></script>-->

  <!-- AdminPlus -->
  <script src="assets/vendor/adminplus.js"></script>

  <!-- App JS -->
  <script src="assets/js/main.min.js"></script>
  <script src="assets/js/sweetalert.js"></script>
  <script src="assets/js/custom.js"></script>
  <!-- Vendor JS -->
  <script src="assets/vendor/sweetalert.min.js"></script>

</body>

</html>