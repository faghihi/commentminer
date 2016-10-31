<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>ورود/ثبت نام</title>

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
        <div class="card bg-transparent">
          <div class="card-block">
            <div class="center">
              <h4 class="m-b-0"><span class="icon-text">ورود</span></h4>
              <p class="text-muted">دسترسی به حساب کاربری</p>
            </div>
            <form action="/AdminLogin" method="POST">
              <div class="form-group">
                <input type="text" name="UserName" class="form-control" placeholder="یوزرنیم">
              </div>
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="form-group">
                <input type="password" name="Password" class="form-control" placeholder="رمز عبور">
                <div class="clearfix"></div>
              </div>
              <div class="center">
                <button type="submit" class="btn  btn-primary-outline btn-circle-large">
                  <i class="material-icons">lock</i>
                </button>
              </div>
              <br><br>
              @if($error=="login")
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>خطا !!</strong>رمز یا یوزرنیم وارد شده صحیح نمیباشد .
                </div>
              @endif
            </form>
          </div>
        </div>
      </div>
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
  <script src="assets/js/custom.js"></script>

</body>

</html>