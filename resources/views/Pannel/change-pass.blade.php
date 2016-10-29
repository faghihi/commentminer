<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>تغییر</title>

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

</head>

<body class="login">

  <div class="row">
    <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
      <h2 class="text-primary center m-a-2">
        <img src="assets/images/icons/icon.png" width="40"> <span class="icon-text">کامنت ماینر</span>
      </h2>
      <div class="card-group" dir="rtl">
        <div class="card">
          <div class="card-block center">
            <h4 class="m-b-0">
              <i class="material-icons">lock</i> <span class="icon-text">تغییر رمز</span>&zwnj;
            </h4>
            <p class="text-muted">رمز جدید برای ورود به حساب</p>
            <form action="/ChangeFinalForgot" method="post">
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="form-group">
                <input name="Password" type="password" class="form-control" placeholder="رمز عبور جدید">
              </div>
              <div class="form-group">
                {{--<input name="RePassword" type="password" class="form-control" placeholder="تکرار رمز عبور">--}}
              </div>
              <button type="submit" class="btn btn-primary btn-rounded">تغییر</button>
            </form>
          </div>
        </div>
      </div>
      <?php
      if(isset($_GET['OK'])){ ?>
      <div class="alert alert-success alert-dismissible fade in" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>انجام شد!</strong>برای ورود به اکانتتون از صفحه ی مربوطه اقدام نمایید.
      </div>
      <?php
      }
      ?>
    </div>
  </div>

  <!-- jQuery -->
  <script src="assets/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/vendor/tether.min.js"></script>
  <script src="assets/vendor/bootstrap.min.js"></script>

  <!-- AdminPlus -->
  <script src="assets/vendor/adminplus.js"></script>

  <!-- App JS -->
  <script src="assets/js/main.min.js"></script>

</body>

</html>