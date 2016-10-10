<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Charts CSS -->
  <link rel="stylesheet" href="examples/css/morris.min.css">

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
      <li class="nav-item active">
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
      <li class="sidebar-menu-item active">
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

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="index.blade.php">Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Data</li>
      </ol>

      <!-- Card Group -->
      <div class="card-group">

        <!-- Card -->
        <div class="card">
          <div class="p-absolute p-a-1">
            <small class="text-muted">
              <strong>TOP PLAYER</strong>
            </small>
          </div>
          <div class="card-block center">
            <img src="assets/images/people/110/guy-8.jpg" alt="guy" class="img-circle p-t-2">
            <p class="m-b-0"><a class="lead text-muted" href="#">Adrian Demian</a></p>
            <a href="#" class="text-muted"><i class="material-icons">account_box</i></a>
            <a href="#" class="text-muted"><i class="material-icons">assessment</i></a>
            <a href="#" class="text-muted"><i class="material-icons">email</i></a>
          </div>
        </div>

        <!-- Card -->
        <div class="card">
          <div class="p-absolute p-a-1">
            <small class="text-muted">
              <strong>TOP TEAMS</strong>
            </small>
          </div>
          <div class="card-block">
            <div id="donut2" style="height:200px"></div>
          </div>
        </div>

        <!-- Card -->
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Rankings</h4>
          </div>
          <ul class="list-group list-group-fit">
            <li class="list-group-item active">
              <div class="media">
                <div class="media-left text-muted">1.</div>
                <div class="media-body media-middle"><a href="#">Red Team</a></div>
                <div class="media-right media-middle">54</div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left text-muted">2.</div>
                <div class="media-body media-middle"><a href="#">Blue Team</a></div>
                <div class="media-right media-middle">34</div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left  text-muted">3.</div>
                <div class="media-body media-middle"><a href="#">Green Team</a></div>
                <div class="media-right media-middle">26</div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left text-muted">4.</div>
                <div class="media-body media-middle">
                  <a href="#">Orange Team</a>
                </div>
                <div class="media-right media-middle">16</div>
              </div>
            </li>
          </ul>
        </div>
        <!-- // END Card -->

      </div>
      <!-- // END Card Group -->

      <!-- Stats -->
      <div class="card">
        <div class="card-block">
          <div class="row">
            <div class="col-md-6">
              <h4 class="card-title">Stats</h4>
            </div>
            <div class="col-md-6 right">
              <div class="form-group pull-md-right">
                <select class="c-select form-control">
                  <option selected>This Year</option>
                  <option value="1">2015</option>
                  <option value="2">2014</option>
                </select>
              </div>
            </div>
          </div>
          <div id="stats" style="height:180px;"></div>
        </div>
      </div>
      <!-- // END Stats -->

      <!-- Table -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-md-6">
              <form action="#" class="form-inline">
                <div class="form-group">
                  <label for="#">Sort By: </label>
                  <select class="c-select form-control">
                    <option selected>Ranking</option>
                    <option value="1">Name</option>
                    <option value="2">Score</option>
                  </select>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <div class="dropdown pull-md-right">
                <a href="#" class="btn btn-primary-outline btn-rounded dropdown-toggle" data-toggle="dropdown">Action</a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item">Delete</a>
                  <a href="#" class="dropdown-item">Edit</a>
                  <a href="#" class="dropdown-item">Cancel</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered m-b-0">
            <thead>
              <tr>
                <th style="width:60px;" class="center">#</th>
                <th>Player</th>
                <th class="center">Ranking</th>
                <th class="center">Team</th>
                <th class="center">Stars</th>
                <th class="center">Status</th>
                <th class="center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="center">2111</td>
                <td>
                  <a href="#">
                    <img src="assets/images/people/50/guy-9.jpg" alt="people" class="img-circle" width="25"> Adrian Demian
                  </a>
                </td>
                <td class="center">492</td>
                <td class="center"><a href="#">Red Falcons</a></td>
                <td class="center">
                  <i class="material-icons md-18 text-primary">star</i>
                  <i class="material-icons md-18 text-primary">star</i>
                  <i class="material-icons md-18 text-primary">star</i>
                </td>
                <td class="center">
                  <i class="material-icons md-18 text-success">lens</i>
                </td>
                <td class="center">
                  <a href="#" class="btn btn-white btn-xs"><i class="material-icons md-18">edit</i></a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="material-icons md-18">close</i></a>
                </td>
              </tr>
              <tr>
                <td class="center">231</td>
                <td>
                  <a href="#">
                    <img src="assets/images/people/50/guy-8.jpg" alt="people" class="img-circle" width="25"> Johnny Brain
                  </a>
                </td>
                <td class="center">314</td>
                <td class="center"><a href="#">Blue Eagles</a></td>
                <td class="center">
                  <i class="material-icons md-18 text-primary">star</i>
                  <i class="material-icons md-18 text-primary">star</i>
                </td>
                <td class="center">
                  <i class="material-icons md-18 text-muted">lens</i>
                </td>
                <td class="center">
                  <a href="#" class="btn btn-white btn-xs"><i class="material-icons md-18">edit</i></a>
                  <a href="#" class="btn btn-danger btn-xs"><i class="material-icons md-18">close</i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <!-- // END Table -->

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

  <!-- Theme Colors -->
  <script src="assets/js/colors.js"></script>

  <!-- Charts JS -->
  <script src="assets/vendor/raphael.min.js"></script>
  <script src="assets/vendor/morris.min.js"></script>

  <!-- Initialize Charts -->
  <script src="examples/js/chart.js"></script>

</body>

</html>