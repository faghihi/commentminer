<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>تیکت های فعال </title>

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

@include('Admin/nav')
<!-- Sidebar -->
<div class="sidebar sidebar-right si-si-3 sidebar-visible-md-up sidebar-light ls-top-navbar-xs-up sidebar-transparent-md" id="sidebarRight" data-scrollable>
    <ul class="sidebar-menu">
        <li class="sidebar-menu-item active">
            <a class="sidebar-menu-button" href="/AdminPannel">
                <i class="sidebar-menu-icon material-icons">assignment</i> تیکت
                @if($New==0)
                    <span class="sidebar-menu-label tooltip-right label label-primary">جدید</span>
                @endif            </a>
        </li>
    </ul>
</div>
<!-- // END Sidebar -->

  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li class="active">تیکت</li>
      </ol>
      <div class="row m-b-1">
        <div class="col-md-6">
          <div class="card card-stats-primary">
            <div class="card-block">
              <div class="media">
                <div class="media-left media-middle">
                  <i class="material-icons text-primary md-36">query_builder</i>
                </div>
                <div class="media-body media-middle">
                  <h4 class="card-title m-b-0">
                    <strong class="text-primary">{{count($Tickets)}}</strong> تیکت های فعال
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{--<div class="col-md-6">--}}
          {{--<div class="card card-stats-success">--}}
            {{--<div class="card-block">--}}
              {{--<div class="media">--}}
                {{--<div class="media-left media-middle">--}}
                  {{--<i class="material-icons text-success md-36">done_all</i>--}}
                {{--</div>--}}
                {{--<div class="media-body media-middle">--}}
                  {{--<h4 class="card-title m-b-0">--}}
                    {{--<strong class="text-success">400</strong> تیکت های بسته شده--}}
                  {{--</h4>--}}
                {{--</div>--}}
              {{--</div>--}}
            {{--</div>--}}
          {{--</div>--}}
        {{--</div>--}}
      </div>
      <div class="row">
        <div class="col-md-6">
              <h3>تیکت های اخیر </h3>
          </div>
        {{--<div class="col-md-6 text-md-left">--}}
          {{--<div class="form-group">--}}
            {{--<label class="m-r-1">فیلتر:</label>--}}
            {{--<select class="c-select">--}}
              {{--<option selected>تازه ترین ها</option>--}}
              {{--<option value="1">تاریخ ایجاد</option>--}}
              {{--<option value="2">اولویت</option>--}}
              {{--<option value="3">بسته شده ها</option>--}}
            {{--</select>--}}
          {{--</div>--}}
        {{--</div>--}}

      </div>

      <div class="card">
          <ul class="list-group list-group-fit">
              @foreach($Tickets as $ticket)
                <li class="list-group-item">
                    <div class="media">
                        <div class="media-left media-middle hidden-sm-down">
                            <img src="assets/images/people/50/guy-6.jpg" alt="" class="img-circle">
                        </div>
                        <div class="media-body media-middle">
                            <h4 class="card-title m-b-0"><a href="/AdminTicketView?ticket={{$ticket['Ticket_Id']}}">{{$ticket['Subject']}}</a></h4>
                            <small> <span class="text-muted">ایجاد شده در</span>: <span>{{$ticket['Date']}}</span></small>
                            <small class="m-l-1">
                                <span class="text-muted">کاربر</span>: <a href="#">{{$ticket['UserInfo']['UserName']}}</a>
                            </small>
                        </div>
                        <div class="media-right media-middle right">
                            <div style="width:100px" class="text-muted center">
                                <small><span class="text-muted">در جریان</span>:<BR>
                                    @if($ticket['Check']=="False")
                                        <span style="color:red">دیده نشده</span></small>
                                    @else
                                        <span>دیده شده</span></small>
                                    @endif
                            </div>

                        </div>
                    </div>
                </li>
                  @endforeach
            </ul>
      </div>
      {{--<ul class="pager">--}}
          {{--<li><a href="#">جدیدتر</a></li>--}}
          {{--<li><a href="#">قدیمی تر</a></li>--}}
      {{--</ul>--}}
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