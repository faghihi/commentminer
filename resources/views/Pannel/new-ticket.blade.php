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
@include('Pannel/nav')
<!-- // END Navbar -->
<!-- Sidebar -->
@include('Pannel/Sidebar',array('active'=>'ticket'))
<!-- // END Sidebar -->

  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li><a href="/Pannel">صفحه اصلی</a></li>
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