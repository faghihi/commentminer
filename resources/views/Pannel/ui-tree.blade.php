<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tree Views</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="examples/css/fancytree.min.css">

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
          <a href="ui-tree.blade.php" class="dropdown-item active">Tree</a>
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

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="index.blade.php">Home</a></li>
        <li class="active">Tree</li>
      </ol>
      <!-- // END Breadcrumb -->

      <!-- Jumbotron -->
      <div class="jumbotron">
        <p class="lead">Fancytree is a JavaScript dynamic tree view plugin for jQuery with support for persistence, keyboard, checkboxes, tables, drag and drop, and lazy loading. Fancytree is a sequel of the popular DynaTree plugin.</p>
      </div>
      <!-- // END Jumbotron -->

      <h4>Tree</h4>
      <div class="card">
        <div class="card-block">
          <div data-toggle="tree">
            <ul style="display: none;">
              <li>item1</li>
              <li>item2</li>
              <li class="folder">
                Folder
                <em>with some</em> children
                <ul>
                  <li>Sub-item 3.1
                    <ul>
                      <li>Sub-item 3.1.1</li>
                      <li>Sub-item 3.1.2</li>
                    </ul>
                  </li>
                  <li>Sub-item 3.2
                    <ul>
                      <li>Sub-item 3.2.1</li>
                      <li>Sub-item 3.2.2</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="expanded">
                Document with some children (expanded on init)
                <ul>
                  <li class="active focused expanded">Sub-item 4.1 (expanded, active and focused on init)
                    <ul>
                      <li>Sub-item 4.1.1</li>
                      <li>Sub-item 4.1.2</li>
                    </ul>
                  </li>
                  <li>Sub-item 4.2
                    <ul>
                      <li>Sub-item 4.2.1</li>
                      <li>Sub-item 4.2.2</li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <h4>With Multiple Selection</h4>
      <div class="card">
        <div class="card-block">
          <div data-toggle="tree" data-tree-checkbox data-tree-select="3">
            <ul style="display: none;">
              <li>item1</li>
              <li class="selected">item2 (selected on init)</li>
              <li class="folder">
                Folder
                <em>with some</em> children
                <ul>
                  <li>Sub-item 3.1
                    <ul>
                      <li>Sub-item 3.1.1</li>
                      <li>Sub-item 3.1.2</li>
                    </ul>
                  </li>
                  <li>Sub-item 3.2
                    <ul>
                      <li>Sub-item 3.2.1</li>
                      <li>Sub-item 3.2.2</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="expanded">
                Document with some children (expanded on init)
                <ul>
                  <li class="expanded">
                    Sub-item 4.1 (expanded on init)
                    <ul>
                      <li class="selected">Sub-item 4.1.1 (selected on init)</li>
                      <li class="selected">Sub-item 4.1.2 (selected on init)</li>
                    </ul>
                  </li>
                  <li>Sub-item 4.2
                    <ul>
                      <li>Sub-item 4.2.1</li>
                      <li>Sub-item 4.2.2</li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <h4>With Single Selection</h4>
      <div class="card">
        <div class="card-block">
          <div data-toggle="tree" data-tree-checkbox data-tree-select="1">
            <ul style="display: none;">
              <li>item1</li>
              <li class="selected">item2 (selected on init)</li>
              <li class="folder">
                Folder
                <em>with some</em> children
                <ul>
                  <li>Sub-item 3.1
                    <ul>
                      <li>Sub-item 3.1.1</li>
                      <li>Sub-item 3.1.2</li>
                    </ul>
                  </li>
                  <li>Sub-item 3.2
                    <ul>
                      <li>Sub-item 3.2.1</li>
                      <li>Sub-item 3.2.2</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="expanded">
                Document with some children (expanded on init)
                <ul>
                  <li class="expanded">Sub-item 4.1 (expanded on init)
                    <ul>
                      <li>Sub-item 4.1.1</li>
                      <li>Sub-item 4.1.2</li>
                    </ul>
                  </li>
                  <li>Sub-item 4.2
                    <ul>
                      <li>Sub-item 4.2.1</li>
                      <li>Sub-item 4.2.2</li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <h4>With Drag &amp; Drop</h4>
      <div class="card">
        <div class="card-block">
          <div data-toggle="tree" data-tree-dnd>
            <ul style="display: none;">
              <li>item1</li>
              <li class="selected">item2 (selected on init)</li>
              <li class="folder">
                Folder
                <em>with some</em> children
                <ul>
                  <li>Sub-item 3.1
                    <ul>
                      <li>Sub-item 3.1.1</li>
                      <li>Sub-item 3.1.2</li>
                    </ul>
                  </li>
                  <li>Sub-item 3.2
                    <ul>
                      <li>Sub-item 3.2.1</li>
                      <li>Sub-item 3.2.2</li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="expanded">
                Document with some children (expanded on init)
                <ul>
                  <li class="expanded">Sub-item 4.1 (expanded on init)
                    <ul>
                      <li>Sub-item 4.1.1</li>
                      <li>Sub-item 4.1.2</li>
                    </ul>
                  </li>
                  <li>Sub-item 4.2
                    <ul>
                      <li>Sub-item 4.2.1</li>
                      <li>Sub-item 4.2.2</li>
                    </ul>
                  </li>
                </ul>
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

  <!-- TREE JS -->
  <script src="https://cdn.jsdelivr.net/jquery.ui/1.11.4/jquery-ui.min.js"></script>
  <script src="assets/vendor/jquery.fancytree-all.min.js"></script>

  <!-- Initialize tree -->
  <script src="examples/js/fancytree.js"></script>

</body>

</html>