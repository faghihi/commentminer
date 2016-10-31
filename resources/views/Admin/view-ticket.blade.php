<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>تیکت شماره ی {{$Tickets[0]['Ticket_Id']}}</title>

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
    <a href="/AdminPannel" style="float: left" class="navbar-brand first-child-md">Comment miner</a>

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
        <li><a href="/AdminPannel">تیکت</a></li>
        <li class="active">پاسخ</li>
      </ol>
      <div class="card card-user-cover">
        <div class="card">
          <div class="card-block">
            <div class="media m-b-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/110/guy-8.jpg" alt="avatar" class="img-circle" width="45">
                </a>
              </div>
              <div class="media-body media-middle">
                <div><a href="#">{{$UserName}}</a><br><span>{{$Tickets[0]['Subject']}}</span></div>
                <small class="text-muted">{{$Tickets[0]['Date']}}</small>
              </div>
              <div class="media-left media-middle text-md-left">
                <div class="btn-group-vertical">
                  <a href="#hiddenReply"><button id="showReplyBar" type="button" class="btn btn-white btn-xs"><i class="material-icons md-36">reply</i>پاسخ</button></a>
                  <a href="/AdminCloseItem?ticket={{$Code}}"><button type="button" class="btn btn-white btn-xs text-success"><i class="material-icons md-36">done_all</i>بستن</button></a>
                </div>
            </div>
            <p class="m-a-0">{{$Tickets[0]['Text']}}</p>
            <br>
          </div>
          <div class="small bg-faded" style="padding:0.3rem 1rem;">
            {{--<a href="#"><i class="fa fa-comments-o"></i> مشاهده همه</a>--}}
            {{--<span class="text-muted">10 پاسخ</span>--}}
          </div>
          <ul class="list-group list-unstyled">
              <?php $i=0 ?>
              @foreach($Tickets as $ticket)
                 @if($i==0)
                     <?php $i++?>
                      @else
                        <li class="list-group-item media m-a-1">
                          <div class="media-left">
                            <a href="#">
                                @if($ticket['Sender_Type']!='1')
                                    <i class="material-icons md-48 ">account_circle</i>
                                @endif
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="" class="comment-author">
                                @if($ticket['Sender_Type']=='1')
                                    پشتیبانی
                                    @else
                                    {{$UserName}}
                                    @endif
                            </a><br>
                            <p>{{$ticket['Text']}}</p>
                            <div class="small text-muted">{{$ticket['Date']}}</div>
                          </div>
                        </li>
                      @endif
              @endforeach
            <li id="hiddenReply" class="m-a-1">
              <form action="/AdminAnswerTicket?ticket={{$Code}}" method="post">
                <div class="form-group">
                    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                    <textarea name="Text" class="form-control" placeholder="..." rows="6"></textarea>
                  <button type="submit" class="btn btn-primary btn-block" type="button"><i class="material-icons md-36">comment</i></button>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="assets/vendor/jquery.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#hiddenReply').hide();
      $('#showReplyBar').click(function () {
        $('#hiddenReply').show();
      });
    });
  </script>
  <!-- Bootstrap -->
  <script src="assets/vendor/tether.min.js"></script>
  <script src="assets/vendor/bootstrap-rtl-3.3.4/dist/js/bootstrap.min.js"></script>
  <!--<script src="assets/vendor/bootstrap.min.js"></script>-->

  <!-- AdminPlus -->
  <script src="assets/vendor/adminplus.js"></script>

  <!-- App JS -->
  <script src="assets/js/main.min.js"></script>

  <!-- Summer note -->
  <script src="assets/vendor/summernote.min.js"></script>
  <script src="assets/js/summernote.js"></script>
</body>

</html>