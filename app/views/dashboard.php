
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, maruti admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, maruti design, maruti dashboard bootstrap 4 dashboard template"
    />
    <meta
      name="description"
      content="Maruti is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Maruti Admin Template</title>
    <link rel="stylesheet" href="<?php echo APP_URL ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo APP_URL ?>/assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?php echo APP_URL ?>/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo APP_URL ?>/assets/css/maruti-style.css" />
    <link rel="stylesheet" href="<?php echo APP_URL ?>/assets/css/maruti-media.css" class="skin-color" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png" />
  </head>

  <body>
    <!--Header-part-->
    <div id="header">
      <h1><a href="dashboard.html">Maruti Admin</a></h1>
    </div>
    <!--close-Header-part-->

    <!--top-Header-messaages-->
    <div class="btn-group rightzero">
      <a class="top_message tip-left" title="Manage Files"
        ><i class="icon-file"></i
      ></a>
      <a class="top_message tip-bottom" title="Manage Users"
        ><i class="icon-user"></i
      ></a>
      <a class="top_message tip-bottom" title="Manage Comments"
        ><i class="icon-comment"></i
        ><span class="label label-important">5</span></a
      >
      <a class="top_message tip-bottom" title="Manage Orders"
        ><i class="icon-shopping-cart"></i
      ></a>
    </div>
    <!--close-top-Header-messaages-->

    <!--top-Header-menu-->
    <div id="user-nav" class="navbar navbar-inverse">
      <ul class="nav">
        <li class="">
          <a title="" href="#"
            ><i class="icon icon-user"></i> <span class="text">Profile</span></a
          >
        </li>
        <li class="">
          <a title="" href="login.html"
            ><i class="icon icon-share-alt"></i>
            <span class="text">Logout</span></a
          >
        </li>
      </ul>
    </div>
    <div id="search">
      <input type="text" placeholder="Search here..." />
      <button type="submit" class="tip-left" title="Search">
        <i class="icon-search icon-white"></i>
      </button>
    </div>
    <!--close-top-Header-menu-->

    <div id="sidebar">
      <a href="#" class="visible-phone"
        ><i class="icon icon-home"></i> Dashboard</a
      >
      <ul>
        <li class="active">
          <a href="#"
            ><i class="icon icon-home"></i> <span>Dashboard</span></a
          >
        </li>
        <li>
          <a href="#"
            ><i class="icon icon-signal"></i>
            <span>Charts &amp; graphs</span></a
          >
        </li>
        <li>
          <a href="#"
            ><i class="icon icon-inbox"></i> <span>Widgets</span></a
          >
        </li>
        <li>
          <a href="tables.html"
            ><i class="icon icon-th"></i> <span>Tables</span></a
          >
        </li>
        <li>
          <a href="#"
            ><i class="icon icon-fullscreen"></i> <span>Full width</span></a
          >
        </li>
        <li class="submenu">
          <a href="#"
            ><i class="icon icon-th-list"></i> <span>Forms</span>
            <span class="label label-important">3</span></a
          >
          <ul>
            <li><a href="form-common.html">Basic Form</a></li>
            <li><a href="form-validation.html">Form with Validation</a></li>
            <li><a href="form-wizard.html">Form with Wizard</a></li>
          </ul>
        </li>
        <li>
          <a href="#"
            ><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a
          >
        </li>
        <li>
          <a href="#"
            ><i class="icon icon-pencil"></i> <span>Eelements</span></a
          >
        </li>
        <li class="submenu">
          <a href="#"
            ><i class="icon icon-file"></i> <span>Addons</span>
            <span class="label label-important">4</span></a
          >
          <ul>
            <li><a href="index2.html">Dashboard2</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="chat.html">Chat option</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="content">
      <div id="content-header">
        <div id="breadcrumb">
          <a href="index.html" title="Go to Home" class="tip-bottom"
            ><i class="icon-home"></i> Home</a
          >
        </div>
      </div>
      <div class="container-fluid">
        <div class="quick-actions_homepage">
          <ul class="quick-actions">
            <li>
              <a href="#"> <i class="icon-dashboard"></i> My Dashboard </a>
            </li>
            <li>
              <a href="#"> <i class="icon-shopping-bag"></i> Shopping Cart</a>
            </li>
            <li>
              <a href="#"> <i class="icon-web"></i> Web Marketing </a>
            </li>
            <li>
              <a href="#"> <i class="icon-people"></i> Manage Users </a>
            </li>
            <li>
              <a href="#"> <i class="icon-calendar"></i> Manage Events </a>
            </li>
          </ul>
        </div>

      </div>
    </div>
    <div class="row-fluid">
      <div id="footer" class="span12">
        2020 &copy; Marutii Admin.
      </div>
    </div>
    <script src="<?php echo APP_URL?>/assets/js/excanvas.min.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/jquery.ui.custom.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/jquery.flot.min.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/jquery.flot.resize.min.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/jquery.peity.min.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/fullcalendar.min.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/maruti.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/maruti.dashboard.js"></script>
    <script src="<?php echo APP_URL?>/assets/js/maruti.chat.js"></script>

    <script type="text/javascript">
      // This function is called from the pop-up menus to transfer to
      // a different page. Ignore if the value returned is a null string:
      function goPage(newURL) {
        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-") {
            resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
        }
      }

      // resets the menu selection upon entry to this page:
      function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
      }
    </script>
  </body>
</html>
