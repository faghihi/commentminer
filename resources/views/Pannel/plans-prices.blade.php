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
@include('Pannel/nav')
<!-- // END Navbar -->
<!-- Sidebar -->
@include('Pannel/Sidebar',array('active'=>'price'))
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
                        <div class="col-lg-12" >
                            @endif
                            <div class="plan best_value table-hover">
                                <div class="header">
                                    <div class="title"> {{$plan['Name']}} </div>
                                    <small>{{$plan['Desc']}}</small>
                                </div>
                                <div class="features-list">
                                    <ul class="features ">
                                        <li class="feature-info">
                                            {{$plan['MaxCount']}} درخواست مجاز
                                        </li>
                                        <?php
                                            $count=0;
                                            if(isset($plan['Fi'])){
                                            foreach ($plan['Fi'] as $feature)
                                            {
                                                $count++;
                                                ?>
                                             <li><i class="material-icons md-24" id="tik">check</i> {{$feature}}</li>
                                            <?php
                                                }
                                            }
                                                for($count;$count<=$Max;$count++){
                                                    ?>
                                            <li><i class="material-icons md-24">clear</i></li>
                                            <?php
                                                }
                                            ?>
                                        <li>
                                            <div class="price">
                                                <?php
                                                    $price=$plan['Price'];
                                                    if($price >= 1000){
                                                        $price=$price/1000;
                                                        $brand="هزار";
                                                    }
                                                    else {
                                                        $brand="";
                                                    }
                                                ?>
                                                @if($price!=0)
                                                        <h3>{{$price}} {{$brand}} تومان</h3>
                                                    @else
                                                        <h3>رایگان</h3>
                                                    @endif
                                                    <br>
                                                <h5><span>به مدت {{$plan['Period']/30}}</span> ماه</h5>

                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <footer><a href="/bankmessage?plan={{$plan['PlanId']}}" class="btn btn-rounded btn-success btn-lg">خرید</a></footer>
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