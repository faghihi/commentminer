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
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

  <!-- Toggle sidebar -->
  <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="sidebar" data-target="#sidebarRight"><span class="material-icons">menu</span></button>

  <!-- Brand -->
  <a href="/Pannel" style="float: left" class="navbar-brand first-child-md">Comment miner</a>

  <!-- Menu -->
  <ul class="nav navbar-nav pull-xs-right hidden-sm-down nav-strip-right">

    <!-- Notifications dropdown -->
    <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-caret="false" data-toggle="dropdown" role="button" aria-haspopup="false"><i class="material-icons email">mail_outline</i></a>
        <ul class="dropdown-menu dropdown-menu-right right notifications" aria-labelledby="Preview">
            <li class="dropdown-title">پیام&zwnj;ها</li>
            <li class="dropdown-item email-item">
                <a class="nav-link" href="#">
          <span class="media">
                <span class="media-left media-middle"><i class="material-icons">mail</i></span>
          <span class="media-body media-middle">
                    <small class="pull-xs-left text-muted">12:20</small>
                    <strong>موضوع 1</strong>
                    Enhance your website with
                </span>
          </span>
                </a>
            </li>
            <li class="dropdown-item email-item">
                <a class="nav-link" href="/Pannel">
          <span class="media">
                <span class="media-left media-middle">
                    <i class="material-icons">mail</i>
                </span>
          <span class="media-body media-middle">
                    <small class="text-muted pull-xs-left">30 min</small>
                    <strong>موضوع 2</strong>
                    Partnership proposal
                </span>
          </span>
                </a>
            </li>
            <li class="dropdown-item email-item">
                <a class="nav-link" href="/Pannel">
          <span class="media">
                <span class="media-left media-middle">
                    <i class="material-icons">mail</i>
                </span>
          <span class="media-body media-middle">
                    <small class="text-muted pull-xs-left">1 hr</small>
                    <strong>موضوع 3</strong>
                    UI Design
                </span>
          </span>
                </a>
            </li>
            <li class="dropdown-action center">
                <a href="email.html">مشاهده&zwnj;ی همه</a>
            </li>
        </ul>
    </li>-->
    <!-- // END Notifications dropdown -->

    <!-- User dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false">
        <!--<img src="assets/images/people/50/guy-6.jpg" alt="Avatar" class="img-circle" width="40">-->
        <i class="material-icons md-36">account_circle</i>
      </a>
      <div class="dropdown-menu dropdown-menu-right right dropdown-menu-list" aria-labelledby="Preview">
        <a class="dropdown-item" href="/Profile"><i class="material-icons md-18">lock</i>&nbsp;<span class="icon-text">ویرایش پروفایل</span></a>
        <!--<a class="dropdown-item" href="#"><i class="material-icons md-18">person</i>&nbsp;<span class="icon-text">پروفایل</span></a>-->
        <a class="dropdown-item" href="/SignOut">خروج</a>
      </div>
    </li>
    <!-- // END User dropdown -->

  </ul>
  <!-- // END Menu -->

</nav>
<!-- // END Navbar -->
<!-- Sidebar -->
<div class="sidebar sidebar-right si-si-3 sidebar-visible-md-up sidebar-light ls-top-navbar-xs-up sidebar-transparent-md" id="sidebarRight" data-scrollable>
  <ul class="sidebar-menu">
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="/Pannel">
        <i class="sidebar-menu-icon material-icons">home</i> داشبورد
      </a>
    </li>
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="/Plans">
        <i class="sidebar-menu-icon material-icons">credit_card</i>خرید سرویس&zwnj;ها
      </a>
    </li>
    <li class="sidebar-menu-item active">
      <a class="sidebar-menu-button" href="/Services">
        <i class="sidebar-menu-icon material-icons">receipt</i>  سرویس&zwnj;های من
      </a>
    </li>
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="/Tickets">
        <i class="sidebar-menu-icon material-icons">assignment</i> تیکت
        @if($New==0)
          <span class="sidebar-menu-label tooltip-right label label-primary">جدید</span>
        @endif
      </a>
    </li>
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="/Profile">
        <i class="sidebar-menu-icon material-icons">create</i> ویرایش پروفایل
      </a>
    </li>
  </ul>
</div>
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
      <div class="alert  alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>راهنمایی</strong>
        <p>برای اطلاع از جزییات سرویس روی نام آن کلیک کنید.</p>
        <p><i class="material-icons md-18">autorenew</i> تعویض کد سرویس</p>
        <p><i class="material-icons md-18">update</i>تمدید سرویس</p>
        {{--<p><i class="material-icons md-18">delete</i>حذف سرویس</p>--}}
      </div>
      <!-- Table -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            {{--<div class="col-md-6">--}}
              {{--<form action="#" class="form-inline">--}}
                {{--<div class="form-group">--}}
                  {{--<label for="#">فیلتر: </label>--}}
                  {{--<select class="c-select form-control">--}}
                    {{--<option selected>همه</option>--}}
                    {{--<option value="1">فعال</option>--}}
                    {{--<option value="2">تمام شده</option>--}}
                  {{--</select>--}}
                {{--</div>--}}
              {{--</form>--}}
            {{--</div>--}}
            <!--<div class="col-md-6">
              <div class="dropdown pull-md-right">
                <a href="#" class="btn btn-primary-outline btn-rounded dropdown-toggle" data-toggle="dropdown">Action</a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item">Delete</a>
                  <a href="#" class="dropdown-item">Edit</a>
                  <a href="#" class="dropdown-item">Cancel</a>
                </div>
              </div>
            </div>-->
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered m-b-0">
            <thead>
            <tr>
              <th style="width:60px;" class="center">تعداد تاثیر ها</th>
              <th>شماره پلن</th>
              <th class="center">شناسه سرویس</th>
              <th class="center">شروع طرح</th>
              <th class="center">پایان طرح</th>
              <th class="center">وضعیت</th>
              <th class="center">عملیات&zwnj;ها</th>
            </tr>
            </thead>
            <tbody>
            <?php $count=1; ?>
            @foreach($Services as $service)
            <tr>
              <td class="center">{{$service['Count']}}</td>
              <td>
                {{--<a href="#" data-toggle="modal" data-target="#myModal">--}}
                <P>
                   <span>{{$service['PlanId']}}&nbsp;
                     {{--<small>فلان سرویس</small>--}}
                   </span>
                </P>
              </td>
              <td class="center">{{$service['Token']}}</td>
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
                <a href="/ChangeInfo?service={{$service['ServiceId']}}" class="btn btn-white btn-xs try-sweet-successMessage"><i class="material-icons md-18">autorenew</i></a>
                <a href="/Renew?service={{$service['ServiceId']}}" class="btn btn-success btn-xs "><i class="material-icons md-18">update</i></a>
                {{--<a href="#" class="btn btn-danger btn-xs try-sweet-delete"><i class="material-icons md-18">delete</i></a>--}}
              </td>
            </tr>
              <?php $count++;?>
            @endforeach
            {{--<tr>--}}
              {{--<td class="center">2</td>--}}
              {{--<td>--}}
                {{--<a href="#" data-toggle="modal" data-target="#myModal">--}}
                  {{--<span>سرویس شماره 2&nbsp;<small>vesta.ir</small></span>--}}
                {{--</a>--}}
              {{--</td>--}}
              {{--<td class="center">34erer34</td>--}}
              {{--<td class="center">1395/07/01</td>--}}
              {{--<td class="center">1395/08/01</td>--}}
              {{--<td class="center">--}}
                {{--<span class="label label-pill label-danger">تمام&zwnj;شده</span>--}}
              {{--</td>--}}
              {{--<td class="center">--}}
                {{--<a href="#" class="btn btn-white btn-xs try-sweet-successMessage"><i class="material-icons md-18">autorenew</i></a>--}}
                {{--<a href="#" class="btn btn-success btn-xs try-sweet-update"><i class="material-icons md-18">update</i></a>--}}
                {{--<a href="#" class="btn btn-danger btn-xs try-sweet-delete"><i class="material-icons md-18">delete</i></a>--}}
              {{--</td>--}}
            {{--</tr>--}}
            </tbody>
          </table>
        </div>
      </div>
      <!-- // END Table -->
      {{--<ul class="pager">--}}
        {{--<li disabled><a href="#">جدیدتر</a></li>--}}
        {{--<li disabled><a href="#">قدیمی تر</a></li>--}}
      {{--</ul>--}}

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

  <!-- Vendor JS -->
  <script src="assets/vendor/sweetalert.min.js"></script>

</body>

</html>