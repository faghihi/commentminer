<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Vector Maps</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Vector Maps -->
  <link rel="stylesheet" href="assets/vendor/jquery-jvectormap.css">
  <link rel="stylesheet" href="examples/css/jvectormap.min.css">

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
          <a href="maps-vector.blade.php" class="dropdown-item active">Vector Maps</a>
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
        <li><a href="#">Maps</a></li>
        <li class="active">Vector</li>
      </ol>

      <div class="card-columns">
        <div class="card">
          <div class="card-block">
            <h4>Markers on the world map</h4>
            <div id="world-map-markers" data-toggle="vector-world-map-markers" class="overflow-hidden height-350"></div>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <h4>Gross domestic product (GDP) by country</h4>
            <div id="world-map-gdp" data-toggle="vector-world-map-gdp" class="overflow-hidden height-350"></div>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <h4>USA unemployment</h4>
            <div id="usa-unemployment" data-toggle="vector-usa-unemployment" class="overflow-hidden height-350"></div>
            <p class="h5" id="usa-unemployment-slider-year">Data for
              <strong>2009</strong>
            </p>

            <div id="usa-unemployment-slider" class="slider-single slider-primary"></div>
            <p>The following example demonstrates the visualization of unemployment statistics in the USA by states and metropolitan areas in a 5-years time-period. The step-by-step process of creation of such a map is described in the <a href="/tutorials/data-visualization/">tutorial</a>.
              The code in Ruby used to convert data could be found in <a href="https://github.com/bjornd/jvectormap-examples/tree/master/us-unemployment">this repository</a>.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <h4>Regions selection</h4>
            <div id="regions-selection" data-toggle="vector-region-selection" class="overflow-hidden height-350"></div>
            <p>The following example demonstrates the feature of jVectorMap that allows selection of regions and/or markers by user or programmatically. Specific styles could be assigned for the selected items. User selection is saved between page reloads
              in the local storage.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <h4>French presidential election, 2007</h4>
            <div data-toggle="vector-france-elections">
              <div id="france-2007" class="overflow-hidden height-350"></div>
              <div class="jvm-legend">
                <span class="jvm-legend-item jvm-legend-item-ump"></span>
                <span>Nicolas Sarkozy</span>
                <span class="jvm-legend-item jvm-legend-item-ps"></span>
                <span>Segolene Royal</span>
              </div>
              <div class="separator"></div>

              <h4 class="separator bottom">French presidential election, 2012</h4>

              <div id="france-2012" class="overflow-hidden height-350"></div>
              <div class="jvm-legend">
                <span class="jvm-legend-item jvm-legend-item-ps"></span>
                <span>Francois Hollande</span>
                <span class="jvm-legend-item jvm-legend-item-ump"></span>
                <span>Nicolas Sarkozy</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <h4>Generate random colors</h4>
            <button type="button" id="update-colors-button" class="btn btn-primary">Generate colors</button>
            <hr/>
            <div id="random-colors-map" data-toggle="vector-random-colors" class="overflow-hidden height-350"></div>
            <p>The following example demonstrates how to set colors directly for the map. The map is painted to the random colors upon loading. You can click "Update colors" to generate new colors for the map.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <h4>Map of the mall</h4>
            <div id="mall-map" data-toggle="vector-mall-map" class="overflow-hidden height-350"></div>
            <p>Example of custom map created from SVG using converter available <a href="http://svgto.jvectormap.com/">here</a>. Please note that if you use map generated from SVG you need to position markers by pixel coordinates, not by latitude and longitude
              as in case of map generated from GIS data.</p>
          </div>
        </div>
        <div class="card">
          <div class="card-block">
            <h4>Reverse projection</h4>
            <p>This example demonstrates the ability to convert pixel coordinates on map to the repsective latitude and longitude coordinates. Click on the map adds marker to the clicked point, click on the added marker removes it.</p>

            <div id="projection-map" data-toggle="vector-projection-map" class="overflow-hidden height-350"></div>
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

  <!-- Theme Colors -->
  <script src="assets/js/colors.js"></script>

  <!-- Vector Maps Library -->
  <script src="assets/vendor/jquery.jvectormap.min.js"></script>

  <!-- Vector Maps Data -->
  <script src="assets/data/vector-maps/custom/jquery-jvectormap-world-mill-en.js"></script>
  <script src="assets/data/vector-maps/custom/jquery-jvectormap-de-merc-en.js"></script>
  <script src="assets/data/vector-maps/custom/jquery-jvectormap-es-merc-en.js"></script>
  <script src="assets/data/vector-maps/custom/jquery-jvectormap-fr-merc-en.js"></script>
  <script src="assets/data/vector-maps/custom/jquery-jvectormap-us-aea-en.js"></script>
  <script src="assets/data/vector-maps/custom/jquery-jvectormap-us-lcc-en.js"></script>
  <script src="assets/data/vector-maps/custom/mall-map.js"></script>
  <script src="assets/data/vector-maps/data/gdp-data.js"></script>

  <!-- Initialize Vector Maps -->
  <script src="examples/js/vector-maps.min.js"></script>

  <!-- Initialize Charts -->
  <script src="examples/js/chart.js"></script>

</body>

</html>