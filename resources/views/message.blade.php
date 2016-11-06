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

@include('Pannel/nav')
@include('Pannel/Sidebar')

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
                        <span class="icon-text"> صفحه ی اصلی</span>
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
                        <span class="icon-text">صفحه ی اصلی</span>
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