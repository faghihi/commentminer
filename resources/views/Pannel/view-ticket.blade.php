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
              @if($Close==0)
              <div class="media-left media-middle text-md-left">
                <div class="btn-group-vertical">
                  <a href="#hiddenReply"><button id="showReplyBar" type="button" class="btn btn-white btn-xs"><i class="material-icons md-36">reply</i>پاسخ</button></a>
                  <a href="/CloseItem?ticket={{$Code}}"><button type="button" class="btn btn-white btn-xs text-success"><i class="material-icons md-36">done_all</i>بستن</button></a>
                </div>
            </div>
              @endif
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
              <form action="/AnswerTicket?ticket={{$Code}}" method="post">
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