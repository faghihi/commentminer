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

    <!-- Charts CSS -->
    <link rel="stylesheet" href="examples/css/morris.min.css">

</head>

<body class="layout-container ls-top-navbar si-r3-md-up">

  <!-- Navbar -->
        @include('Pannel/nav')
  <!-- // END Navbar -->
  <!-- Sidebar -->
  @include('Pannel/Sidebar',array('active'=>'dashboard'))
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
                <div class="center">
                    <h1 class="card-title">کامنت ماینر</h1>
                    <p>
                        به کامنت ماینر خوش آمدید
                    </p>
                </div>

                <hr>
            </div>
            <div class="card-block">
                <?php
                $count_open=0;
                $count_close=0;
                foreach($Tickets as $ticket_one){
                    if($ticket_one['Closed']==0)
                        $count_open++;
                    else
                        $count_close++;
                }
                ?>
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
                                            <strong class="text-primary">{{$count_open}}</strong> تیکت های فعال
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-stats-success">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="material-icons text-success md-36">done_all</i>
                                    </div>
                                    <div class="media-body media-middle">
                                        <h4 class="card-title m-b-0">
                                            <strong class="text-success">{{$count_close}}</strong> تیکت های بسته شده
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{--here come the service Status --}}
                    <?php
                    $count_enable=0;
                    $count_off=0;
                    foreach($Services as $service){
                        if($service['IsActive']==1)
                            $count_enable++;
                        else
                            $count_off++;
                    }
                    ?>
                    <div class="row m-b-1">
                        <div class="col-md-6">
                            <div class="card card-stats-success">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="material-icons text-success md-36">work</i>
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4 class="card-title m-b-0">
                                                <strong class="text-success">{{$count_enable}}</strong>    سرویس در حال استفاده
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-stats-danger">
                                <div class="card-block">
                                    <div class="media">
                                        <div class="media-left media-middle">
                                            <i class="material-icons text-danger md-36">clear</i>
                                        </div>
                                        <div class="media-body media-middle">
                                            <h4 class="card-title m-b-0">
                                                <strong class="text-danger">{{$count_off}}</strong>  سرویس غیر فعال
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- Stats -->
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">آمار</h4>
                    </div>
                </div>
                <div id="stats" style="height:180px;"></div>
            </div>
        </div>
        <!-- // END Stats -->
        <div class="card-group">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">سرویس های جدید</h3>
                </div>
                <div class="card-block">
                    <div class="row">
                    </div>
                    <div id="stats" style="height:300px;"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بخش پشتیبانی</h3>
                </div>
                <div class="card-block">
                    <div class="row">

                    </div>
                    <div id="stats" style="height:180px;"></div>
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

  <!-- Theme Colors -->
  <script src="assets/js/colors.js"></script>


  <!-- Charts JS -->
  <script src="assets/vendor/raphael.min.js"></script>
  <script src="assets/vendor/morris.min.js"></script>

  <!-- Initialize Charts -->
  <script src="examples/js/chart.js"></script>

</body>

</html>