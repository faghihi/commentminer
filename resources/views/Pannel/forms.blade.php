<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Forms</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

  <!-- Datepicker -->
  <link rel="stylesheet" href="examples/css/bootstrap-datepicker.min.css">

  <!-- Timepicker -->
  <link rel="stylesheet" href="examples/css/bootstrap-timepicker.min.css">

  <!-- Required by summernote -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">

  <!-- Summernote WYSIWYG -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css">
  <link rel="stylesheet" href="examples/css/summernote.min.css">

  <!-- Touchspin -->
  <link rel="stylesheet" href="examples/css/bootstrap-touchspin.min.css">

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
          <a href="forms.blade.php" class="dropdown-item active">Forms</a>
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
        <li class="active">Forms</li>
      </ol>

      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-block">
              <h5>Basic Elements</h5>
              <form>
                <fieldset class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  <small class="text-help">We'll never share your email with anyone else.</small>
                </fieldset>
                <fieldset class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </fieldset>
                <fieldset class="form-group">
                  <label for="exampleSelect1">Example select</label>
                  <select class="form-control" id="exampleSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </fieldset>
                <fieldset class="form-group">
                  <label for="exampleSelect2">Example multiple select</label>
                  <select multiple class="form-control" id="exampleSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </fieldset>
                <fieldset class="form-group">
                  <label for="exampleTextarea">Example textarea</label>
                  <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </fieldset>
                <fieldset class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" class="form-control-file" id="exampleInputFile">
                  <small class="text-help">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </fieldset>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option one is this and that&mdash;be sure to include why it's great
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one
                  </label>
                </div>
                <div class="radio disabled">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled> Option three is disabled
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="card-block">
              <h4 class="margin-t-none">Input Spinner</h4>

              <p>A mobile and touch friendly input spinner component. It supports the mouse wheel and the up &amp; down keys.</p>
              <form action="#">
                <div class="form-group">
                  <input id="touch-spin-2" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-step="50" type="text" value="200" name="demo2" class="form-control" />
                </div>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="card-block">
              <h5>DatePicker</h5>
              <div class="form-group">
                <input class="datepicker form-control" type="text" value="01/28/2016" />
              </div>

              <h5>TimePicker</h5>
              <div class="form-group">
                <div class="bootstrap-timepicker">
                  <input id="timepicker3" type="text" class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-block">
              <h5>Horizontal</h5>
              <form>
                <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-3 form-control-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-3 form-control-label">Password</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3">Checkbox</label>
                  <div class="col-sm-9">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row m-b-0">
                  <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="card-block">
              <h5>Contextual colors</h5>
              <div class="form-group has-success">
                <label for="inputSuccess1">Input with success</label>
                <input type="text" class="form-control form-control-success" id="inputSuccess1">
                <small class="text-help">This is a help block message.</small>
              </div>
              <div class="form-group has-warning">
                <label for="inputWarning1">Input with warning</label>
                <input type="text" class="form-control form-control-warning" id="inputWarning1">
                <small class="text-help">This is a help block message.</small>
              </div>
              <div class="form-group has-danger">
                <label for="inputDanger1">Input with danger</label>
                <input type="text" class="form-control form-control-danger" id="inputDanger1">
                <small class="text-help">This is a help block message.</small>
              </div>

              <div class="checkbox has-success">
                <label>
                  <input type="checkbox" id="checkboxSuccess" value="option1"> Checkbox with success
                </label>
              </div>
              <div class="checkbox has-warning">
                <label>
                  <input type="checkbox" id="checkboxWarning" value="option1"> Checkbox with warning
                </label>
              </div>
              <div class="checkbox has-danger">
                <label>
                  <input type="checkbox" id="checkboxDanger" value="option1"> Checkbox with danger
                </label>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-block">
              <h5>Custom controls</h5>
              <div class="form-group">
                <label class="c-input c-checkbox">
                  <input type="checkbox">
                  <span class="c-indicator"></span> Check this custom checkbox
                </label>
              </div>
              <div class="form-group">
                <div class="c-inputs-stacked">
                  <label class="c-input c-radio">
                    <input id="radioStacked1" name="radio-stacked" type="radio">
                    <span class="c-indicator"></span> Toggle this custom radio
                  </label>
                  <label class="c-input c-radio">
                    <input id="radioStacked2" name="radio-stacked" type="radio">
                    <span class="c-indicator"></span> Or toggle this other custom radio
                  </label>
                </div>
              </div>
              <div class="form-group">
                <select class="c-select">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group">
                <label class="file">
                  <input type="file" id="file">
                  <span class="file-custom"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-block">
          <h5>Summernote Wysiwyg Editor </h5>
          <textarea id="summernote"></textarea>
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

  <!-- Vendor JS -->
  <script src="assets/vendor/jquery.bootstrap-touchspin.js"></script>
  <script src="assets/vendor/bootstrap-datepicker.min.js"></script>
  <script src="assets/vendor/bootstrap-timepicker.js"></script>
  <script src="assets/vendor/summernote.min.js"></script>

  <!-- Init -->
  <script src="examples/js/date-time.js"></script>
  <script src="examples/js/summernote.js"></script>
  <script src="examples/js/touchspin.js"></script>

</body>

</html>