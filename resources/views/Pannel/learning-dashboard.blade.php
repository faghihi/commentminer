<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Learning Dashboard</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

</head>

<body class="layout-container ls-top-navbar si-l3-md-up">

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">

    <!-- Toggle sidebar -->
    <button class="navbar-toggler pull-xs-left hidden-md-up" type="button" data-toggle="sidebar" data-target="#sidebarLeft"><span class="material-icons">menu</span></button>

    <!-- Brand -->
    <a href="index.blade.php" class="navbar-brand first-child-md">AdminPlus</a>

    <!-- Menu -->
    <ul class="nav navbar-nav hidden-md-down">
      <li class="nav-item">
        <a class="nav-link" href="index.blade.php">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown">UI Components</a>
        <div class="dropdown-menu dropdown-menu-list" aria-labelledby="Preview">
          <a href="ui-buttons.blade.php" class="dropdown-item">Buttons</a>
          <a href="ui-cards.blade.php" class="dropdown-item">Cards</a>
          <a href="ui-tabs.blade.php" class="dropdown-item">Tabs</a>
          <a href="ui-tree.blade.php" class="dropdown-item">Tree</a>
          <a href="ui-nestable.blade.php" class="dropdown-item">Nestable</a>
          <a href="ui-notifications.blade.php" class="dropdown-item">Notifications</a>
          <a href="forms.blade.php" class="dropdown-item">Forms</a>
          <a href="ui-tables.blade.php" class="dropdown-item">Tables</a>
          <a href="charts.blade.php" class="dropdown-item">Charts</a>
          <a href="calendar.blade.php" class="dropdown-item">Calendar</a>
          <a href="maps.blade.php" class="dropdown-item">Filterable Map</a>
          <a href="maps-vector.blade.php" class="dropdown-item">Vector Maps</a>
        </div>
      </li>
    </ul>
    <!-- // END Menu -->

    <!-- Menu -->
    <ul class="nav navbar-nav pull-xs-right hidden-sm-down nav-strip-right">

      <!-- Notifications dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-caret="false" data-toggle="dropdown" role="button" aria-haspopup="false"><i class="material-icons email">mail_outline</i></a>
        <ul class="dropdown-menu dropdown-menu-right notifications" aria-labelledby="Preview">
          <li class="dropdown-title">Emails</li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index.blade.php">
              <span class="media">
					<span class="media-left media-middle"><i class="material-icons">mail</i></span>
              <span class="media-body media-middle">
						<small class="pull-xs-right text-muted">12:20</small>
						<strong>Adrian Demian</strong>
						Enhance your website with
					</span>
              </span>
            </a>
          </li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index.blade.php">
              <span class="media">
					<span class="media-left media-middle">
						<i class="material-icons">mail</i>
					</span>
              <span class="media-body media-middle">
						<small class="text-muted pull-xs-right">30 min</small>
						<strong>Michael Brain</strong>
						Partnership proposal
					</span>
              </span>
            </a>
          </li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index.blade.php">
              <span class="media">
					<span class="media-left media-middle">
						<i class="material-icons">mail</i>
					</span>
              <span class="media-body media-middle">
						<small class="text-muted pull-xs-right">1 hr</small>
						<strong>Sammie Downey</strong>
						UI Design
					</span>
              </span>
            </a>
          </li>
          <li class="dropdown-action center">
            <a href="email.blade.php">Go to inbox</a>
          </li>
        </ul>
      </li>
      <!-- // END Notifications dropdown -->

      <!-- User dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false">
          <img src="assets/images/people/50/guy-6.jpg" alt="Avatar" class="img-circle" width="40">
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
          <a class="dropdown-item" href="#"><i class="material-icons md-18">lock</i> <span class="icon-text">Edit Account</span></a>
          <a class="dropdown-item" href="#"><i class="material-icons md-18">person</i> <span class="icon-text">Public Profile</span></a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
      <!-- // END User dropdown -->

    </ul>
    <!-- // END Menu -->

  </nav>
  <!-- // END Navbar -->
  <!-- Sidebar -->
  <div class="sidebar sidebar-left si-si-3 sidebar-visible-md-up sidebar-light ls-top-navbar-xs-up sidebar-transparent-md" id="sidebarLeft" data-scrollable>
    <ul class="sidebar-menu">
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="index.blade.php">
          <i class="sidebar-menu-icon material-icons">home</i> Dashboard
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="appointments.blade.php">
          <i class="sidebar-menu-icon material-icons">today</i> Appointments
          <span class="sidebar-menu-label label label-primary">10</span>
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="invoice.blade.php">
          <i class="sidebar-menu-icon material-icons">receipt</i> Invoice
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="learning-course.blade.php">
          <i class="sidebar-menu-icon material-icons">import_contacts</i> Course
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="property.blade.php">
          <i class="sidebar-menu-icon material-icons">place</i> Property
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="tickets.blade.php">
          <i class="sidebar-menu-icon material-icons">assignment</i> Tickets
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="email.blade.php">
          <i class="sidebar-menu-icon material-icons">mail</i> Email
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="user-profile.blade.php">
          <i class="sidebar-menu-icon material-icons">person</i> User Profile
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="timeline.blade.php">
          <i class="sidebar-menu-icon material-icons">list</i> Timeline
          <span class="sidebar-menu-label label label-primary">NEW</span>
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="login-signup.blade.php">
          <i class="sidebar-menu-icon material-icons">lock</i> Login / Sign Up
        </a>
      </li>
    </ul>
  </div>
  <!-- // END Sidebar -->

  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="#">Courses</a></li>
        <li class="active">Dashboard</li>
      </ol>
      <div class="card card-stats-primary">
        <div class="card-block">
          <div class="media">
            <div class="media-left media-middle">
              <i class="material-icons text-muted-light">credit_card</i>
            </div>
            <div class="media-body media-middle">
              Your subscription ends on
              <strong>25 February 2015</strong>
            </div>
            <div class="media-right">
              <a class="btn btn-primary btn-sm" href="#">
				Upgrade
				</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="card">
            <div class="card-header">
              <div class="media">
                <div class="media-body">
                  <h4 class="card-title">Courses</h4>
                  <p class="card-subtitle">Your recent courses</p>
                </div>
                <div class="media-right media-middle">
                  <a ui-sref="website-student.courses" class="btn btn-white btn-sm" href="#/website-student/courses"> View All</a>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-fit m-b-0">
              <li class="list-group-item">
                <div class="media">
                  <div class="media-body media-middle">
                    <a class="text-subhead list-group-link" href="#/website-student/take-course">Basics of HTML</a>
                  </div>
                  <div class="media-right media-middle">
                    <div class="center">
                      <span class="label label-pill label-primary m-b-05">25%</span>
                      <progress class="progress progress-primary m-b-0" value="25" max="100" style="width:100px">25%</progress>
                    </div>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="media-body media-middle">
                    <a ui-sref="website-student.take-course" class="text-subhead list-group-link" href="#/website-student/take-course">Angular in Steps</a>
                  </div>
                  <div class="media-right media-middle">
                    <div class="center">
                      <span class="label label-pill label-success m-b-05">100%</span>
                      <progress class="progress progress-success m-b-0" value="100" max="100" style="width:100px">100%</progress>
                    </div>
                  </div>
                </div>

              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="media-body media-middle">
                    <a ui-sref="website-student.take-course" class="text-subhead list-group-link" href="#/website-student/take-course">Bootstrap Foundations</a>
                  </div>
                  <div class="media-right media-middle">
                    <div class="center">
                      <span class="label label-pill label-warning m-b-05">80%</span>
                      <progress class="progress progress-warning m-b-0" value="80" max="100" style="width:100px">80%</progress>
                    </div>
                  </div>

                </div>
              </li>
            </ul>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="media">
                <div class="media-body">
                  <h4 class="card-title">Quizzes</h4>
                  <p class="card-subtitle">Your Performance</p>
                </div>
                <div class="media-right media-middle">
                  <a class="btn btn-default btn-sm" href="#"> View Results</a>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-fit m-b-0">
              <li class="list-group-item">
                <div class="media">
                  <div class="media-body media-middle">
                    <div>
                      <a href="#">Title of quiz goes here?</a>
                    </div>
                    <small class="text-light">Course: <a href="#">Basics of HTML</a></small>
                  </div>
                  <div class="media-right center">
                    <h2 class=" m-b-0">5.8</h2>
                    <span class="text-muted-light">Good</span>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="media-body media-middle">
                    <div>
                      <a href="#">Directives &amp; Routing</a>
                    </div>
                    <small class="text-light">Course: <a href="#">Angular in Steps</a></small>
                  </div>
                  <div class="media-right center">
                    <h2 class=" m-b-0 text-success">9.8</h2>
                    <span class="text-muted-light">Great</span>
                  </div>
                </div>

              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="media-body media-middle">
                    <div> <a href="#">Responsive &amp; Retina</a> </div>
                    <small class="text-light">Course: <a href="#">Bootstrap Foundations</a></small>
                  </div>
                  <div class="media-right center">
                    <h2 class=" m-b-0 text-danger">2.8</h2>
                    <span class="text-muted-light">Failed</span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card">
            <div class="card-header bg-white">
              <h4 class="card-title">Rewards</h4>
              <p class="card-subtitle">Your latest achievements</p>
            </div>
            <div class="card-block center">
              <div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
              <div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
              <div class="btn btn-success btn-circle"><i class="material-icons">bubble_chart</i></div>
              <div class="btn btn-warning btn-circle"><i class="material-icons">keyboard_voice</i></div>
              <div class="btn btn-info btn-circle"><i class="material-icons">event_available</i></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white">
              <h4 class="card-title">Forum Activity</h4>
              <p class="card-subtitle">Latest forum topics &amp; comments</p>
            </div>
            <ul class="list-group list-group-fit">
              <li class="list-group-item">
                <div class="media m-b-0">
                  <div class="media-left media-middle">
                    <a href="#">
                      <img src="assets/images/people/110/guy-9.jpg" alt="Guy" width="40" class="img-circle">
                    </a>
                  </div>
                  <div class="media-body media-middle">
                    <p class="m-b-0">
                      <a href="#">Can someone help me with the basic Setup?</a>
                      <br>
                    </p>
                    <p class="m-b-0">
                      <small>by: <a href="#">Adrian D.</a></small>
                    </p>
                    <small class="text-muted-light">5 min ago</small>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media m-b-0">
                  <div class="media-left media-middle">
                    <a href="#">
                      <img src="assets/images/people/110/guy-5.jpg" alt="Guy" width="40" class="img-circle">
                    </a>
                  </div>
                  <div class="media-body media-middle">
                    <p class="m-b-0">
                      <a href="#">Great work Guys. How do I create a Sidebar?</a>
                      <br>
                    </p>
                    <p class="m-b-0">
                      <small>by: <a href="#">Andrew B.</a></small>
                    </p>
                    <small class="text-muted-light">1 day ago</small>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media m-b-0">
                  <div class="media-left media-middle">
                    <a href="#">
                      <img src="assets/images/people/110/woman-5.jpg" alt="Guy" width="40" class="img-circle">
                    </a>
                  </div>
                  <div class="media-body media-middle">
                    <p class="m-b-0">
                      <a href="#">Looking for the Best</a>
                      <br>
                    </p>
                    <p class="m-b-0">
                      <small>by: <a href="#">Michelle S.</a></small>
                    </p>
                    <small class="text-muted-light">2 days ago</small>
                  </div>
                </div>
              </li>
            </ul>
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

</body>

</html>