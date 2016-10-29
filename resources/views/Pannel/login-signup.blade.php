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
        @if($error=="Activate")
          <p class="text-muted-light">اکانت شما فعال شده است از فرم زیر وارد شوید </p>
        @endif
        @if($error=="login")
          <p class="text-muted-light">رمز یا ایمیل وارد شده صحیح نمیباشد</p>
        @endif
        @if($error=="SignUp")
          <p class="text-muted-light">ایمیل فعال سازی برای شما ارسال شد </p>
        @endif
      </h2>
      <div class="card-group" dir="rtl">
        <div class="card bg-transparent">
          <div class="card-block">
            <div class="center">
              <h4 class="m-b-0"><span class="icon-text">ورود</span></h4>
              <p class="text-muted">دسترسی به حساب کاربری</p>
            </div>
            <form action="/Login" method="POST">
              <div class="form-group">
                <input type="email" name="UserName" class="form-control" placeholder="ایمیل">
              </div>
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="form-group">
                <input type="password" name="Password" class="form-control" placeholder="رمز عبور">
                <a href="/ForgotPass" class="pull-xs-left">
                  <small>فراموش کردید؟</small>
                </a>
                <div class="clearfix"></div>
              </div>
              <div class="center">
                <button type="submit" class="btn  btn-primary-outline btn-circle-large">
                  <i class="material-icons">lock</i>
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="card">
          <div class="card-block center">
            <h4 class="m-b-0">
              <i class="material-icons">person_add</i> <span class="icon-text">ثبت&zwnj;نام</span>&zwnj;
            </h4>
            <p class="text-muted">حساب کاربری جدید بسازید</p>
            <p id="errpsw" style="color: red; display: none;">رمز و تکرار آن تطابق ندارند</p>
            <p id="erruser" style="color: red; display: none;">ایمیل شما تکراری میباشد</p>
            <form action="/SignUp" method="post" onsubmit="return CheckPass()">
              <div class="form-group">
                <input type="number" name="PhoneNo" class="form-control" placeholder="شماره تماس">
              </div>
              <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
              <div class="form-group">
                <input id="Mail" type="email" name="UserName" class="form-control" placeholder="ایمیل">
              </div>
              <div class="form-group">
                <input id="pass" type="password" name="Password" class="form-control" placeholder="رمز عبور">
              </div>
              <div class="form-group">
                <input id="repass" type="password" name="RePassword" class="form-control" placeholder="تکرار رمز عبور">
              </div>
              <button type="submit" class="btn btn-primary btn-rounded">ثبت&zwnj;نام</button>
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