<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Timeline</title>

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
      <li class="sidebar-menu-item active">
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
        <li class="active">Timeline</li>
      </ol>
      <div class="card card-user-cover">
        <div class="preview">
          <img src="assets/images/cover/preview.jpg" />
        </div>
        <div class="user">
          <a href="#" class="avatar">
            <img src="assets/images/people/110/guy-6.jpg" alt="avatar" class="img-circle" width="80">
          </a>
        </div>
        <ul class="menu">
          <li class="active"><a href="#"><i class="material-icons">person_outline</i> <span class="icon-text">Timeline</span></a></li>
          <li><a href="#"><i class="material-icons">camera</i> <span class="icon-text">Photos</span></a></li>
          <li><a href="#"><i class="material-icons">group</i> <span class="icon-text">Friends</span></a></li>
          <li class="pull-right"><a class="visible-xs visible-sm" id="chatMessages"><i class="md md-comment"></i></a></li>
        </ul>
      </div>
      <div class="card-columns">
        <!-- Post Photos -->
        <div class="card">
          <div class="card-block">
            <div class="media m-b-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/110/guy-2.jpg" alt="avatar" class="img-circle" width="45">
                </a>
              </div>
              <div class="media-body media-middle">
                <div><a href="#">Adrian</a> added some photos</div>
                <small class="text-muted">2 days ago</small>
              </div>
            </div>
            <div class="post-content">
              <a href="#">
                <img src="assets/images/timeline/place1.jpg" alt="">
              </a>
              <a href="#">
                <img src="assets/images/timeline/place2.jpg" alt="">
              </a>
              <a href="#">
                <img src="assets/images/timeline/place3.jpg" alt="">
              </a>
            </div>
          </div>
          <div class="small bg-faded" style="padding:0.3rem 1rem;">
            <a href="#"><i class="fa fa-comments-o"></i> View all</a>
            <span class="text-muted">2 comments</span>
          </div>
          <ul class="list-unstyled">
            <li class="media m-a-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/50/guy-6.jpg" class="img-circle" width="40">
                </a>
              </div>
              <div class="media-body">
                <div class="pull-right dropdown" data-show-hover="li" style="display: none;">
                  <a href="#" data-toggle="dropdown" class="toggle-button">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Edit</a>
                    </li>
                    <li><a href="#">Delete</a>
                    </li>
                  </ul>
                </div>
                <a href="" class="comment-author">Bill D.</a> <span>Hi Mary, Nice Party</span>
                <div class="small text-muted">5 days ago</div>
              </div>
            </li>
            <li class="m-a-1">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type here ...">
                <span class="input-group-btn">
					<button class="btn btn-primary" type="button"><i class="material-icons md-18">comment</i></button>
				</span>
              </div>
            </li>
          </ul>
        </div>
        <!-- // END Post Photos -->
        <!-- Widget Birthday -->
        <div class="card-primary card-block center m-b-1">
          <blockquote class="card-blockquote">
            <div class="center m-b-1">
              <i class="material-icons md-48">cake</i>
            </div>
            <p class="m-b-0">It's Andrew's Birthday Today! </p>
          </blockquote>
        </div>
        <!-- // END Widget Birthday -->
        <!-- Post Video -->
        <div class="card">
          <div class="card-block">
            <div class="media m-b-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/110/guy-8.jpg" alt="avatar" class="img-circle" width="45">
                </a>
              </div>
              <div class="media-body media-middle">
                <div><a href="#">Andrew Brain</a> traveling to Miami</div>
                <small class="text-muted">3 hrs ago</small>
              </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9 m-b-1">
              <iframe class="embed-responsive-item" src="//player.vimeo.com/video/50522981?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" style="border:none;"></iframe>
            </div>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Type here ...">
              <span class="input-group-btn">
				<button class="btn btn-primary" type="button"><i class="material-icons md-18">comment</i></button>
			</span>
            </div>
          </div>
        </div>
        <!-- // END Post Video -->
        <!-- Post Regular -->
        <div class="card">
          <div class="card-block">
            <div class="media m-b-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/110/guy-8.jpg" alt="avatar" class="img-circle" width="45">
                </a>
              </div>
              <div class="media-body media-middle">
                <div><a href="#">Andrew Brain</a> traveling to Miami</div>
                <small class="text-muted">3 hrs ago</small>
              </div>
            </div>
            <p class="m-a-0">Yay! Ready for the Party!</p>
          </div>
          <div class="small bg-faded" style="padding:0.3rem 1rem;">
            <a href="#"><i class="fa fa-comments-o"></i> View all</a>
            <span class="text-muted">10 comments</span>
          </div>
          <ul class="list-unstyled">
            <li class="media m-a-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/50/guy-6.jpg" class="img-circle" width="40">
                </a>
              </div>
              <div class="media-body">
                <div class="pull-right dropdown" data-show-hover="li" style="display: none;">
                  <a href="#" data-toggle="dropdown" class="toggle-button">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Edit</a>
                    </li>
                    <li><a href="#">Delete</a>
                    </li>
                  </ul>
                </div>
                <a href="" class="comment-author">Bill D.</a> <span>Hi Mary, Nice Party</span>
                <div class="small text-muted">5 days ago</div>
              </div>
            </li>
            <li class="media m-a-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/50/woman-5.jpg" class="img-circle" width="40">
                </a>
              </div>
              <div class="media-body">
                <div class="pull-right dropdown" data-show-hover="li" style="display: none;">
                  <a href="#" data-toggle="dropdown" class="toggle-button">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Edit</a>
                    </li>
                    <li><a href="#">Delete</a>
                    </li>
                  </ul>
                </div>
                <a href="" class="comment-author">Mary</a> <span>Thanks Bill</span>
                <div class="small text-muted">2 days</div>
              </div>
            </li>
            <li class="media m-a-1">
              <div class="media-left">
                <a href="#">
                  <img src="assets/images/people/50/guy-8.jpg" class="img-circle" width="40">
                </a>
              </div>
              <div class="media-body">
                <div class="pull-right dropdown" data-show-hover="li" style="display: none;">
                  <a href="#" data-toggle="dropdown" class="toggle-button">
                    <i class="fa fa-pencil"></i>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Edit</a>
                    </li>
                    <li><a href="#">Delete</a>
                    </li>
                  </ul>
                </div>
                <a href="" class="comment-author">Andrew</a> <span>What time did it finish?</span>
                <div class="small text-muted">21 min</div>
              </div>
            </li>
            <li class="m-a-1">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Type here ...">
                <span class="input-group-btn">
					<button class="btn btn-primary" type="button"><i class="material-icons md-18">comment</i></button>
				</span>
              </div>
            </li>
          </ul>
        </div>
        <!-- // END Post Regular -->
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