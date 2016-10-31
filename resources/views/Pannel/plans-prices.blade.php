<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="assets/images/icons/icon.ico">
  <title>طرح ها</title>

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">
  <link type="text/css" href="assets/css/prices.css" rel="stylesheet">

  <!-- Bootstrap rtl -->
  <link rel="stylesheet" href="assets/vendor/bootstrap-rtl-3.3.4/dist/css/bootstrap-rtl.min.css">

</head>

<body class="layout-container ls-top-navbar si-r3-md-up">

<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

    <!-- Toggle sidebar -->
    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="sidebar" data-target="#sidebarRight"><span class="material-icons">menu</span></button>

    <!-- Brand -->
    <a href="/Pannel"  class="navbar-brand first-child-md">Comment miner</a>

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
                <a class="dropdown-item" href="/Profile"><i class="material-icons md-18">lock</i>&nbsp;<span class="icon-text">ویرایش پروفایل</span></a>
                <!--<a class="dropdown-item" href="#"><i class="material-icons md-18">person</i>&nbsp;<span class="icon-text">پروفایل</span></a>-->
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
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="/Pannel">
                <i class="sidebar-menu-icon material-icons">home</i> داشبورد
            </a>
        </li>
        <li class="sidebar-menu-item active">
            <a class="sidebar-menu-button" href="/Plans">
                <i class="sidebar-menu-icon material-icons">credit_card</i>خرید سرویس&zwnj;ها
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="/Services">
                <i class="sidebar-menu-icon material-icons">receipt</i>  سرویس&zwnj;های من
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="/Tickets">
                <i class="sidebar-menu-icon material-icons">assignment</i> تیکت
                @if($New==0)
                    <span class="sidebar-menu-label tooltip-right label label-primary">جدید</span>
                @endif            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="/Profile">
                <i class="sidebar-menu-icon material-icons">create</i> ویرایش پروفایل
            </a>
        </li>
    </ul>
</div>
<!-- // END Sidebar -->

<!-- Content -->
  <div class="layout-content plans" data-scrollable>
    <div class="container-fluid">
        <ol class="breadcrumb hidden-print">
            <li><a href="/Pannel">صفحه اصلی</a></li>
            <li class="active">طرح&zwnj;ها</li>
        </ol>
        <div class="card">
            <div class="card-block">
                <h2 class="center m-t-2 m-b-3">
                    <strong>کدام طرح؟</strong>
                </h2>
                <?php $i=0;?>
                @foreach($Plans as $plan)
                    @if($i%3==0)
                        <div class="row">
                        <div class="col-lg-12">
                            @endif
                            <div class="plan best_value">
                                <div class="header">
                                    <div class="title"> {{$plan['Name']}} </div>
                                    <BR>
                                    <div class="price">
                                        <h3>{{$plan['Price']}} تومان</h3>
                                        <small>{{$plan['Desc']}}</small> </div>
                                </div>
                                <div class="features-list">
                                    <ul class="features">
                                        <li>تعداد درخواست ها :  {{$plan['MaxCount']}}</li>
                                        <li>{{$plan['Period']/30}}ماه</li>
                                        <?php
                                            $count=0;
                                            if(isset($plan['Fi'])){
                                            foreach ($plan['Fi'] as $feature)
                                            {
                                                $count++;
                                                ?>
                                             <li>{{$feature}}</li>
                                            <?php
                                                }
                                            }
                                                for($count;$count<=$Max;$count++){
                                                    ?>
                                            <li><i class="material-icons md-24">clear</i></li>
                                            <?php
                                                }
                                            ?>

                                    </ul>
                                </div>
                                <footer><a href="/bankmessage?plan={{$plan['PlanId']}}" class="btn btn-primary btn-lg">خرید</a></footer>
                            </div>
                            @if($i%3==2)
                                </div>
                                </div>
                                <BR>
                             @endif
                        <?php $i++; ?>
                    @endforeach
            </div>
        </div>

    </div>
    <!--<div class="container-fluid">

      <ol class="breadcrumb hidden-print">
        <li><a href="#">Home</a></li>
        <li class="active">Invoice</li>
      </ol>
      <div id="invoice">
        <div class="card">
          <div class="card-button-wrapper">
            <a href="javascript:window.print()" class="btn btn-primary btn-sm hidden-print">
              <i class="material-icons md-18">print</i> Print
            </a>

          </div>
          <div class="card-block">
            <h2 class="center m-t-2 m-b-3">
              <strong>Invoice #1244</strong>
            </h2>
            <div class="row">
              <div class="col-xs-6">
                <p>
                  <strong>MOSAICPRO LTD</strong>
                  <br/> No. 12121
                  <br/> 21 Address Street, Miami, FL
                </p>
              </div>
              <div class="col-xs-6">
                <p>
                  <strong>Client:</strong>
                  <br/> Adrian Demian
                  <br/> 49th Avenue, City, USA</p>
              </div>
            </div>
          </div>
          <table class="table table-striped table-fit">
            <thead>
              <tr>
                <th>
                  Description
                </th>
                <th>
                  Hours
                </th>
                <th>
                  Unit Price
                </th>
                <th>
                  Total Price
                </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Design Services on 12 Feb 2016</td>
                <td>5</td>
                <td>$50</td>
                <td>$500</td>
              </tr>
              <tr>
                <td>Design Services on 24 Feb 2016</td>
                <td>15</td>
                <td>$50</td>
                <td>$1500</td>
              </tr>
            </tbody>
          </table>
          <div class="card-block">
            <div class="row">
              <div class="col-xs-4">
                <p>
                  <strong>Subtotal:</strong>
                </p>
                <p class="m-b-0">$2000</p>
              </div>
              <div class="col-xs-4">
                <p>
                  <strong>TAX:</strong>
                </p>
                <p class="m-b-0">20%</p>
              </div>
              <div class="col-xs-4">
                <p c>
                  <strong>Total:</strong>
                </p>
                <h2 class="text-primary m-b-0">
                  <strong>$2400</strong>
                </h2>
              </div>
            </div>

            <p class="text-muted jumbotron m-a-1 m-t-2"> Payment will be made through wire transfer. Invoice is due by 25 March 2016.</p>

          </div>
        </div>
      </div>

    </div>-->
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