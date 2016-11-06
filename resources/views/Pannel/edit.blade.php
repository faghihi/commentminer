<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>ویرایش</title>



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
@include('Pannel/nav')
<!-- // END Navbar -->
<!-- Sidebar -->
@include('Pannel/Sidebar',array('active'=>'edit'))
<!-- // END Sidebar -->

  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li><a href="/Pannel">صفحه اصلی</a></li>
        <li class="active">ویرایش</li>
      </ol>
        @if(isset($_GET['Test'])&& $_GET['Test']=="OK")
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>انجام شد!</strong> تغییر رمز شما انجام شد
            </div>
        @endif
        @if(isset($_GET['Test'])&& $_GET['Test']=="NO")
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>خطا!!</strong>مشکلی پیش آمده لطفا بعدا پیگیری نمایید.
            </div>
        @endif
      <div class="row">
        <div class="col-md-8 center col-md-offset-2">
          <div class="card">
            <div class="card-block">
              <h5>تغییر رمز</h5>
              <form method="post" action="/ChangePass" onsubmit="return CheckPass2()">
                <fieldset class="form-group">
                  <label for="oldPass">رمز</label>
                  <input type="password"  name="OldPassword" class="form-control" id="oldPass" placeholder="رمز فعلی">
                </fieldset>
                <fieldset class="form-group">
                  <label for="newPass">رمز جدید</label>
                  <input type="password" name="Password" class="form-control" id="newPass" placeholder="رمز">
                </fieldset>
                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                  <fieldset class="form-group">
                      <label for="rePass">تکرار رمز جدید</label>
                      <input type="password" name="RePassword" class="form-control" id="rePass" placeholder="تکرار">
                  </fieldset>
                  <div style="display: none" id="errpsw">
                      <div class="alert alert-danger alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>خطا!</strong> تکرار رمز اشتباه است.
                      </div>
                  </div>
                  <div style="display: none" id="erruser">
                      <div class="alert alert-danger alert-dismissible fade in" role="alert">
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                          <strong>خطا!</strong> رمز اشتباه است.
                      </div>
                  </div>
                <button type="submit" class="btn btn-primary">تغییر</button>
              </form>
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
    <script src="assets/js/custom.js"></script>


</body>

</html>