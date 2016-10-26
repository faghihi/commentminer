<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>Forms</title>

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Required by summernote -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">

  <!-- Summernote WYSIWYG -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css">
  <link rel="stylesheet" href="examples/css/summernote.min.css">

  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="assets/vendor/bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css">

</head>

<body class="layout-container ls-top-navbar si-r3-md-up">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

  <!-- Toggle sidebar -->
  <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="sidebar" data-target="#sidebarRight"><span class="material-icons">menu</span></button>

  <!-- Brand -->
  <a href="index.blade.php" style="float: left" class="navbar-brand first-child-md">Comment miner</a>

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
                <a class="nav-link" href="index.blade.php">
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
                <a class="nav-link" href="index.blade.php">
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
        <a class="dropdown-item" href="edit.blade.php"><i class="material-icons md-18">lock</i>&nbsp;<span class="icon-text">ویرایش پروفایل</span></a>
        <!--<a class="dropdown-item" href="#"><i class="material-icons md-18">person</i>&nbsp;<span class="icon-text">پروفایل</span></a>-->
        <a class="dropdown-item" href="#">خروج</a>
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
      <a class="sidebar-menu-button" href="index.blade.php">
        <i class="sidebar-menu-icon material-icons">home</i> داشبورد
      </a>
    </li>
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="plans-prices.blade.php">
        <i class="sidebar-menu-icon material-icons">credit_card</i>خرید سرویس&zwnj;ها
      </a>
    </li>
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="invoice.blade.php">
        <i class="sidebar-menu-icon material-icons">receipt</i>  سرویس&zwnj;های من
      </a>
    </li>
    <li class="sidebar-menu-item active">
      <a class="sidebar-menu-button" href="/Tickets">
        <i class="sidebar-menu-icon material-icons">assignment</i> تیکت
        <span class="sidebar-menu-label tooltip-right label label-primary">2</span>
      </a>
    </li>
    <li class="sidebar-menu-item">
      <a class="sidebar-menu-button" href="edit.blade.php">
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
        <li><a href="index.blade.php">صفحه اصلی</a></li>
        <li><a href="/Tickets">تیکت</a></li>
        <li class="active">تیکت جدید</li>
      </ol>
      <div class="card">
        <div class="card-block">
          <h4>ایجاد تیکت جدید</h4>
          <form method="post" action="/MakeTicket">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group row">
              <label for="inputName" class="col-sm-1 form-control-label">ایمیل</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="inputName" placeholder="{{$UserName}}" disabled>
              </div>
              {{--<label for="inputEmail" class="col-sm-1 form-control-label">Email</label>--}}
              {{--<div class="col-sm-5">--}}
                {{--<input type="email" class="form-control" id="inputEmail" placeholder="Email" disabled>--}}
              {{--</div>--}}
            </div>
            <div class="form-group row">
              <label class="col-sm-1" for="selectPart">بخش</label>
              <div class="col-sm-6">
                <select class="form-control" id="selectPart">
                  <option>پشتیبانی</option>
                </select>
              </div>
              {{--<div class="col-sm-2 text-md-left">--}}
                {{--<div class="checkbox">--}}
                  {{--<label>--}}
                    {{--<input type="checkbox"> پیام فوری--}}
                  {{--</label>--}}
                {{--</div>--}}
              {{--</div>--}}
            </div>
            <div class="form-group row">
              <label for="inputSubject" class="col-sm-1 form-control-label">موضوع</label>
              <div class="col-sm-11">
                <input type="text" name="Subject" class="form-control" id="inputSubject" placeholder="...">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <h5>پیام </h5>
                <textarea name="Text" class="form-control" placeholder="..." rows="6"></textarea>
              </div>
            </div>
            <div class="form-group row m-b-0">
              <div class="col-sm-12 text-md-left">
                <button type="submit" class="btn btn-primary">ارسال</button>
              </div>
            </div>
          </form>
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

  <!-- Vendor JS -->
  <script src="assets/vendor/summernote.min.js"></script>
  <script src="assets/js/summernote.js"></script>


</body>

</html>