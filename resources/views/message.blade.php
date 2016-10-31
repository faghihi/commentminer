<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>پیام</title>

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="assets/vendor/bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css">

</head>

<body class="layout-container ls-top-navbar si-r3-md-up">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

  <!-- Toggle sidebar -->
  <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="sidebar" data-target="#sidebarRight"><span class="material-icons">menu</span></button>

  <!-- Brand -->
  <a href="/Pannel"  class="navbar-brand first-child-md">Comment miner</a>

  <!-- Menu -->
  <ul class="nav navbar-nav pull-xs-right hidden-sm-down nav-strip-right">

    <!-- User dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false">
        <!--<img src="assets/images/people/50/guy-6.jpg" alt="Avatar" class="img-circle" width="40">-->
        <i class="material-icons md-36">account_circle</i>
      </a>
      <div class="dropdown-menu dropdown-menu-right right dropdown-menu-list" aria-labelledby="Preview">
        <a class="dropdown-item" href="/Profile"><i class="material-icons md-18">lock</i>&nbsp;<span class="icon-text">ویرایش پروفایل</span></a>
        <!--<a class="dropdown-item" href="#"><i class="material-icons md-18">person</i>&nbsp;<span class="icon-text">پروفایل</span></a>-->
        <a class="dropdown-item" href="/SingOut">خروج</a>
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
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="/Services">
        <i class="sidebar-menu-icon material-icons">receipt</i>  سرویس&zwnj;های من
      </a>
    </li>
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="/Tickets">
        <i class="sidebar-menu-icon material-icons">assignment</i> تیکت
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

      <ol class="breadcrumb">
        <li><a href="/Pannel">صفحه اصلی</a></li>
        <li class="active">پیام</li>
      </ol>
      <div class="card">
        <div class="card-block">
          <div class="row m-b-2">
            <div class="col-md-12">
              @if($Type=="bankerror")
                <div class="card card-primary center">
                  <div class="card-block">
                    <p>{{$Content}}</p>
                      <a href="/Pannel" class="btn btn-white">
                        <i class="material-icons">home</i>
                        <span class="icon-text">بازگشت به صفحه ی اصلی</span>
                      </a>
                  </div>
                </div>
              @endif
                @if($Type=="bank")
                  <div class="card card-success center">
                    <div class="card-block">
                      <p>آیا تایید میکنید که برای پرداخت خرید سرویس به بانک انتقال پیدا کنید ؟!</p>
                      <a href="/BuyService?plan={{$Content}}" class="btn btn-white">
                        <span class="icon-text">انتقال به بانک</span>
                      </a>
                    </div>
                  </div>
                @endif
                @if($Type=="bankre")
                  <div class="card card-success center">
                    <div class="card-block">
                      <p>آیا تایید میکنید که برای پرداخت  تمدید سرویس به بانک انتقال پیدا کنید ؟!</p>
                      <a href="/Renew?service={{$Content}}" class="btn btn-white">
                        <span class="icon-text">انتقال به بانک</span>
                      </a>
                    </div>
                  </div>
                @endif
                @if($Type=="payfalse")
                  <div class="card card-warning center">
                    <div class="card-block">
                      <p>{{$Content}}</p>
                      <a href="/Pannel" class="btn btn-white">
                        <i class="material-icons">home</i>
                        <span class="icon-text">بازگشت به صفحه ی اصلی</span>
                      </a>
                    </div>
                  </div>
                @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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


</body>

</html>