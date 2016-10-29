<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>پروفایل</title>

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
          <li class="sidebar-menu-item active">
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
  <div class="layout-content " data-scrollable>
    <div class="container-fluid">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li>صفحه اصلی</li>
      </ol>

      <h1 class="center">داشبورد</h1>
        <div class="card">
            <div class="card-block">
                <h4 class="card-title">کامنت ماینر</h4>
                <p>
                    به کامنت ماینر خوش آمدید
                </p>
                <hr>
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

  <!-- Theme Colors -->
  <script src="assets/js/colors.js"></script>


</body>

</html>