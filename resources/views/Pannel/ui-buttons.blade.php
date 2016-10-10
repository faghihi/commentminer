<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Buttons</title>

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
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown">UI Components</a>
        <div class="dropdown-menu dropdown-menu-list" aria-labelledby="Preview">
          <a href="ui-buttons.blade.php" class="dropdown-item active">Buttons</a>
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
        <li><a href="index.blade.php">Home</a></li>
        <li class="active">Buttons</li>
      </ol>

      <div class="jumbotron">
        <p class="lead">Use any of the available button classes to quickly create a styled button, whether it's a regular, rounded or circle button. Group a series of buttons together on a single line with the button group. Add on optional JavaScript radio and checkbox
          style behavior.</p>
      </div>

      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Simple buttons</h5>
        </div>
        <div class="card-block">
          <button type="button" class="btn btn-white">White</button>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
          <button type="button" class="btn btn-info">Info</button>
          <button type="button" class="btn btn-warning">Warning</button>
          <button type="button" class="btn btn-danger">Danger</button>
          <button type="button" class="btn btn-link">Link</button>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Buttons with icons</h5>
        </div>
        <div class="card-block">
          <button type="button" class="btn btn-white">
            <i class="material-icons">edit</i>
            <span class="icon-text">White</span>
          </button>
          <button type="button" class="btn btn-primary">
            <i class="material-icons">home</i>
            <span class="icon-text">Primary</span>
          </button>
          <button type="button" class="btn btn-secondary">
            <i class="material-icons">list</i>
            <span class="icon-text">Secondary</span>
          </button>
          <button type="button" class="btn btn-success">
            <i class="material-icons">done</i>
            <span class="icon-text">Success</span>
          </button>
          <button type="button" class="btn btn-info">
            <i class="material-icons">map</i>
            <span class="icon-text">Info</span>
          </button>
          <button type="button" class="btn btn-warning">
            <i class="material-icons">notifications</i>
            <span class="icon-text">Warning</span>
          </button>

          <!-- Indicates a dangerous or potentially negative action -->
          <button type="button" class="btn btn-danger ">
            <i class="material-icons">error_outline</i>
            <span class="icon-text">Danger</span>
          </button>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Buttons with gradient</h5>
        </div>
        <div class="card-block">
          <button type="button" class="btn btn-primary btn-gradient">Primary</button>
          <button type="button" class="btn btn-secondary btn-gradient">Secondary</button>
          <button type="button" class="btn btn-success btn-gradient">Success</button>
          <button type="button" class="btn btn-info btn-gradient">Info</button>
          <button type="button" class="btn btn-warning btn-gradient">Warning</button>
          <button type="button" class="btn btn-danger btn-gradient">Danger</button>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Button dropdown</h4>
        </div>
        <div class="card-block">
          <div class="btn-group">
            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Default</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Rounded Buttons</h5>
        </div>
        <div class="card-block">
          <h6>Small radius</h6>
          <button type="button" class="btn btn-white btn-rounded">White</button>
          <button type="button" class="btn btn-primary btn-rounded">Primary</button>
          <!-- Secondary, outline button -->
          <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
          <!-- Indicates a successful or positive action -->
          <button type="button" class="btn btn-success btn-rounded">Success</button>
          <!-- Contextual button for informational alert messages -->
          <button type="button" class="btn btn-info btn-rounded">Info</button>
          <!-- Indicates caution should be taken with this action -->
          <button type="button" class="btn btn-warning btn-rounded">Warning</button>
          <!-- Indicates a dangerous or potentially negative action -->
          <button type="button" class="btn btn-danger btn-rounded">Danger</button>
          <hr>

          <h6>Deep radius</h6>
          <button type="button" class="btn btn-white btn-rounded-deep">White</button>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <button type="button" class="btn btn-primary btn-rounded-deep">Primary</button>
          <!-- Secondary, outline button -->
          <button type="button" class="btn btn-secondary btn-rounded-deep">Secondary</button>
          <!-- Indicates a successful or positive action -->
          <button type="button" class="btn btn-success btn-rounded-deep">Success</button>
          <!-- Contextual button for informational alert messages -->
          <button type="button" class="btn btn-info btn-rounded-deep">Info</button>
          <!-- Indicates caution should be taken with this action -->
          <button type="button" class="btn btn-warning btn-rounded-deep">Warning</button>
          <!-- Indicates a dangerous or potentially negative action -->
          <button type="button" class="btn btn-danger btn-rounded-deep">Danger</button>
          <hr>

          <h6>Circle Button with Icon</h6>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <button type="button" class="btn btn-white btn-circle">
            <i class="material-icons">email</i>
          </button>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <button type="button" class="btn btn-primary btn-circle">
            <i class="material-icons">person</i>
          </button>
          <!-- Secondary, outline button -->
          <button type="button" class="btn btn-secondary btn-circle">
            <i class="material-icons">mail_outline</i>
          </button>
          <!-- Indicates a successful or positive action -->
          <button type="button" class="btn btn-success btn-circle">
            <i class="material-icons">list</i>
          </button>
          <!-- Contextual button for informational alert messages -->
          <button type="button" class="btn btn-info btn-circle">
            <i class="material-icons">notifications</i>
          </button>
          <!-- Indicates caution should be taken with this action -->
          <button type="button" class="btn btn-warning btn-circle">
            <i class="material-icons">chevron_right</i>
          </button>
          <!-- Indicates a dangerous or potentially negative action -->
          <button type="button" class="btn btn-danger btn-circle">
            <i class="material-icons">home</i>
          </button>
          <hr>

          <h6>Large Circle Buttons with Icon</h6>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <button type="button" class="btn btn-white btn-circle-large">
            <i class="material-icons">email</i>
          </button>
          <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
          <button type="button" class="btn btn-primary btn-circle-large">
            <i class="material-icons">person</i>
          </button>
          <!-- Secondary, outline button -->
          <button type="button" class="btn btn-secondary  btn-circle-large">
            <i class="material-icons">mail_outline</i>
          </button>
          <!-- Indicates a successful or positive action -->
          <button type="button" class="btn btn-success  btn-circle-large">
            <i class="material-icons">list</i>
          </button>
          <!-- Contextual button for informational alert messages -->
          <button type="button" class="btn btn-info  btn-circle-large">
            <i class="material-icons">notifications</i>
          </button>
          <!-- Indicates caution should be taken with this action -->
          <button type="button" class="btn btn-warning  btn-circle-large">
            <i class="material-icons">chevron_right</i>
          </button>
          <!-- Indicates a dangerous or potentially negative action -->
          <button type="button" class="btn btn-danger  btn-circle-large">
            <i class="material-icons">home</i>
          </button>
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