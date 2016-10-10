<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Learning Course</title>

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
      <li class="sidebar-menu-item active">
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
        <li class="active">The MVC architectural pattern</li>
      </ol>

      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-block">
              <h4 class="card-title">The MVC architectural pattern</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum dicta eius enim inventoreus optio ratione veritatis. Beatae deserunt illum ipsam magniima mollitia officiis quia tempora</p>
              <hr>
              <!-- 4:3 aspect ratio -->
              <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" width="100%" height="300"></iframe>
            </div>
          </div>

          <!-- Lessons -->
          <div class="card">
            <div class="list-group list-group-fit">
              <div class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <div class="text-muted">1.</div>
                  </div>
                  <div class="media-body">
                    <a href="#">Installation</a>
                  </div>
                  <div class="media-right">
                    <small class="text-muted-light">2:03</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item active">
                <div class="media">
                  <div class="media-left">
                    2.
                  </div>
                  <div class="media-body">
                    <a href="#">The MVC architectural pattern</a>
                  </div>
                  <div class="media-right">
                    <small class="text-muted-light">25:01</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <div class="text-muted">3.</div>
                  </div>
                  <div class="media-body">
                    <a href="#">Database Models</a>
                  </div>
                  <div class="media-right">
                    <small class="text-muted-light">12:10</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <div class="text-muted">4.</div>
                  </div>
                  <div class="media-body">
                    <a href="#">Database Access</a>
                  </div>
                  <div class="media-right">
                    <small class="text-muted-light">1:25</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <div class="text-muted">5.</div>
                  </div>
                  <div class="media-body">
                    <a href="#">Eloquent Basics</a>
                  </div>
                  <div class="media-right">
                    <small class="text-muted-light">22:30</small>
                  </div>
                </div>
              </div>
              <div class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <div class="text-muted">6.</div>
                  </div>
                  <div class="media-body">
                    <a href="#">Take Quiz</a>
                  </div>
                  <div class="media-right">
                    <small class="text-muted-light">10:00</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <ul class="list-group list-group-fit">
              <li class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <i class="material-icons text-muted-light">today</i>
                  </div>
                  <div class="media-body media-middle">
                    19 Jun 2015
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <i class="material-icons text-muted-light">schedule</i>
                  </div>
                  <div class="media-body media-middle">
                    2
                    <small class="text-muted">hrs</small> &nbsp; 26
                    <small class="text-muted">min</small>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media">
                  <div class="media-left">
                    <i class="material-icons text-muted-light">assessment</i>
                  </div>
                  <div class="media-body media-middle">
                    Beginner
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="card">
            <div class="card-header bg-white">
              <div class="media">
                <div class="media-left media-middle">
                  <img src="assets/images/people/110/guy-6.jpg" alt="About Adrian" width="50" class="img-circle">
                </div>
                <div class="media-body media-middle">
                  <h4 class="card-title"><a href="#">Adrian Demian</a></h4>
                  <p class="card-subtitle">Instructor</p>
                </div>
              </div>
            </div>
            <div class="card-block">
              <p>Having over 12 years exp. Adrian is one of the lead UI designers in the industry Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, aut.</p>
              <a href="" class="btn btn-default btn-sm">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="" class="btn btn-default btn-sm">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="" class="btn btn-default btn-sm">
                <i class="fa fa-github"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Vendor CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">

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