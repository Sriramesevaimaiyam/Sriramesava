
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tn Digital Seva. This website belongs to Tn Digital Seva. Content owned and updated by  Tn Digital Seva.">
        <meta name="author" content="VIGOUS">

        <title>Dashboard -  Sriram E-Seva</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="https://www.tndigitalseva.in/assets/web/img/logo-sm.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <!-- Icons -->
        <link href="https://www.tndigitalseva.in/assets/panel/vendor/nucleo/css/nucleo.css" rel="stylesheet">
        <link href="https://www.tndigitalseva.in/assets/panel/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
        <!-- Argon CSS -->
        <link type="text/css" href="https://www.tndigitalseva.in/assets/panel/css/argon.css?v=1.0.0" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

        <!--  <link type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">-->
        <style>
            html, body {
                overflow-x: hidden;
            }
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0;
            }
            .modal-header-danger {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #d9534f;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }
            .errmsg
            {
                color: red;
            }

            .uppercase_input{
                text-transform:uppercase;
            }
            input.invalid,textarea.invalid,select.invalid {
                background-color: #ffdddd;
            }
            .navbar .notification {
                position: absolute;
                top: 0px;
                border: 1px solid #fff;
                right: 10px;
                font-size: 10px;
                background: #f44336;
                color: #fff;
                min-width: 15px;
                padding: 0 5px;
                height: 15px;
                border-radius: 12px;
                text-align: center;
                line-height: 12px;
                vertical-align: middle;
                display: block;
            }
        </style>
        <script src="https://www.tndigitalseva.in/assets/panel/vendor/jquery/dist/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
        <script src="https://jquery.bassistance.de/validate/additional-methods.js"></script>
              <!--  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
                <style>
              .dataTables_wrapper .dataTables_filter {
                  float: right;
                  text-align: right;
                  visibility: hidden;
              }
          </style>-->
        <script>
            var base_url = "https://www.tndigitalseva.in/";
            var site_url = "https://www.tndigitalseva.in/";
        </script>
    </head>
        <body>
        <!-- Sidenav -->
                    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
                <div class="container-fluid">
                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Brand -->
                    <a class="" href="https://www.tndigitalseva.in/" style="width:200px;height:56px;">
                        <img src="https://www.tndigitalseva.in/assets/web/img/logo-lg.png" class="navbar-brand-img" alt="..." style="width:200px;height:56px;">
                    </a>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <li>
    <!--                            <h2>TNDS00</h2>-->
                            <h2>Hi, Sri Ram E-Sevai  Maiyam</h2>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <li>
                                                            <!--<h6>Valid Upto: 31-12-2100</h6>-->
                                                        </li>
                    </ul>

                    <ul class="nav align-items-center d-md-none">
                        <!--                        <li class="nav-item dropdown">
                                                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ni ni-bell-55" onclick="update_notifications();"></i><span class="notification  notification-data-count" onclick="update_notifications();">0</span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right notification-data" aria-labelledby="navbar-default_dropdown_1">
                        
                                                    </div>
                                                </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="https://www.tndigitalseva.in/uploads/profile/profile_image_1756947120-10-202216-35-08191364ljdx2XV_400x400.jpg">
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="https://www.tndigitalseva.in/users/profile" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <!--                            <a href="./examples/profile.html" class="dropdown-item">
                                                                <i class="ni ni-settings-gear-65"></i>
                                                                <span>Settings</span>
                                                            </a>
                                                            <a href="./examples/profile.html" class="dropdown-item">
                                                                <i class="ni ni-calendar-grid-58"></i>
                                                                <span>Activity</span>
                                                            </a>
                                                            <a href="./examples/profile.html" class="dropdown-item">
                                                                <i class="ni ni-support-16"></i>
                                                                <span>Support</span>
                                                            </a>-->
                                <div class="dropdown-divider"></div>
                                <a href="https://www.tndigitalseva.in/logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- Collapse -->
                    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                        <!-- Collapse header -->
                        <div class="navbar-collapse-header d-md-none">
                            <div class="row">
                                <div class="col-6 collapse-brand">
                                    <a href="https://www.tndigitalseva.in/">
                                        <img src="https://www.tndigitalseva.in/assets/web/img/logo-lg.png">
                                    </a>
                                </div>
                                <div class="col-6 collapse-close">
                                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Form -->
                        <form class="mt-4 mb-3 d-md-none">
                            Hi, Sri Ram E-Sevai  Maiyam                            <div class="input-group input-group-rounded input-group-merge">
                                <input type="search" class="form-control form-control-rounded form-control-prepended" id="search_box_mobile" placeholder="Search" aria-label="Search">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                                                <!-- Navigation -->
                        <ul class="navbar-nav">
                                                            <!--                                <li class="nav-item">
                                                                    <a class="nav-link" href="#">
                                                                        <i class="ni ni-money-coins text-primary"></i> <b>Smart Wallet: 0</b>
                                                                    </a>
                                                                </li>-->
                                                                                                        <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/srirameseva/">
                                            <i class="ni ni-shop text-primary"></i> Dashboard
                                        </a>
                                    </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="https://www.tndigitalseva.in/my-bookmarks">
                                                <i class="ni ni-book-bookmark text-primary"></i> My Bookmarks
                                            </a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/srirameseva/services">
                                                <i class="ni ni-archive-2 text-primary"></i> Public Services
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/srirameseva/notification">
                                                <i class="ni ni-notification-70 text-primary"></i> Current Notification
                                            </a>
                                        </li>
                                                                                <!--                                        <li class="nav-item">
                                                                                    <a class="nav-link" href="https://www.tndigitalseva.in/premium">
                                                                                        <i class="ni ni-app text-primary"></i> Legal Services
                                                                                    </a>
                                                                                </li>-->

                                                                                <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/srirameseva/serviceforms">
                                                <i class="ni ni-collection text-primary"></i> Service Forms
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/srirameseva/customers">
                                                <i class="ni ni-bullet-list-67 text-primary"></i> Customer Report
                                            </a>
                                        </li>     
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/srirameseva/billing">
                                                <i class="fa fa-list-alt text-primary"></i> Billing Report</a>
                                        </li> 
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="https://www.tndigitalseva.in/services/agency">
                                                <i class="ni ni-image text-primary"></i> Advertisement Ads
                                            </a>
                                        </li> -->
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" href="https://www.tndigitalseva.in/tools">
                                                <i class="ni ni-settings text-primary"></i> System Softwares
                                            </a>
                                        </li>  -->
                                                                                                                           <!--<li class="nav-item">
                                                                                        <a class="nav-link" href="https://www.tndigitalseva.in/services/tutorial">
                                                                                            <i class="ni ni-button-play text-primary"></i> Tutorial Video
                                                                                        </a>
                                                                                    </li>-->
                                                                                        <!-- <li class="nav-item">
                                                    <a class="nav-link " href="https://www.tndigitalseva.in/services/market"><i class="ni ni-tv-2 text-primary"></i> Market Place</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " href="https://www.tndigitalseva.in/services/how"><i class="ni ni-spaceship text-primary"></i> How to use</a>
                                                </li> -->
<!--                                        <li class="nav-item dropdown">
                                            <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ni ni-bullet-list-67 text-primary"></i> Business
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                                <a class="nav-link " href="https://www.tndigitalseva.in/services/market"><i class="ni ni-tv-2 text-primary"></i> Market Place</a>
                                                <a class="nav-link " href="https://www.tndigitalseva.in/services/how"><i class="ni ni-spaceship text-primary"></i> How to use</a>
                                                <a class="nav-link" href="https://www.tndigitalseva.in/services/request">
                                                    <i class="ni ni-bullet-list-67 text-primary"></i>  Update Request
                                                </a>
                                            </div>
                                        </li>-->

                                                                                <!--                                        <li class="nav-item">
                                                                                    <a class="nav-link" href="https://www.tndigitalseva.in/services/products">
                                                                                        <i class="ni ni-tv-2 text-primary"></i> Services <span class="badge badge-success">
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: pending_service_requests</p>
<p>Filename: includes/header.php</p>
<p>Line Number: 548</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/tndigitalseva/public_html/application/views/includes/header.php<br />
			Line: 548<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/tndigitalseva/public_html/application/views/dashboard.php<br />
			Line: 1<br />
			Function: view			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/tndigitalseva/public_html/application/controllers/Login.php<br />
			Line: 687<br />
			Function: view			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /home/tndigitalseva/public_html/index.php<br />
			Line: 292<br />
			Function: require_once			</p>

		
	

</div></span> 
                                                                                        <i class="ni ni-archive-2 text-primary"></i> Shopping zone 
                                                                                    </a>
                                                                                </li>-->
                                                                                <!--<li class="nav-item">
                                            <a class="nav-link" href="https://www.tndigitalseva.in/services/csp">
                                                <i class="ni ni-app text-primary"></i> CSP Services
                                            </a>
                                        </li>-->
                                        <!--                                        <li class="nav-item">
                                                                                    <a class="nav-link" href="javascript:void(0)" data-toggle="modal" data-target="#servicerequestModal">
                                                                                        <i class="ni ni-tv-2 text-primary"></i> Service Request
                                                                                    </a>
                                                                                </li> -->
                                        
                                        <!--                                        <li class="nav-item">
                                                                                    <a class="nav-link " href="https://www.tndigitalseva.in/services/package"><i class="ni ni-chart-bar-32 text-primary"></i> Package Details</a>
                                                                                </li>-->
                                         
                                        <!--<li class="nav-item">
                                            <a class="nav-link" href="https://www.tndigitalseva.in/customers">
                                                <i class="ni ni-books text-primary"></i> Data Bank</a>
                                        </li>-->

                                        <!--                                            <li>
                                                                                        <a class="nav-link" href="https://t.me/joinchat/AAAAAEbUnvox2LyotXbRLA" target="_blank">
                                                                                            <i class="fa fa-comment text-info"></i> Join Telegram
                                                                                        </a>
                                                                                    </li>-->
                                        
                                    

                        </ul>
                        <!-- Divider -->
                        <!--        <hr class="my-3">-->
                        <!-- Heading -->
                        <!--        <h6 class="navbar-heading text-muted">Documentation</h6>-->
                        <!-- Navigation -->
                        <!--        <ul class="navbar-nav mb-md-3">
                                  <li class="nav-item">
                                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                                      <i class="ni ni-spaceship"></i> Getting started
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
                                      <i class="ni ni-palette"></i> Foundation
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
                                      <i class="ni ni-ui-04"></i> Components
                                    </a>
                                  </li>
                                </ul>-->
                    </div>
                </div>
            </nav>
                    <!-- Main content -->
        <div class="main-content">
            <!-- Top navbar -->
            <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="">Dashboard</a>
                    <!-- Form -->
                    <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" id="search_box" placeholder="Search" type="text">
                            </div>
                        </div>
                    </form>
                    <!-- User -->
                    <ul class="navbar-nav align-items-center d-none d-md-flex">
                        <!--                        <li class="nav-item dropdown">
                                                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ni ni-bell-55" onclick="update_notifications();"></i><span class="notification  notification-data-count" onclick="update_notifications();">0</span>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                                        <div class="list-group list-group-flush notification-data">
                                                        </div>
                                                    </div>
                                                </li>-->
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="https://www.tndigitalseva.in/uploads/profile/profile_image_1756947120-10-202216-35-08191364ljdx2XV_400x400.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">Sri Ram E-Sevai  Maiyam</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome!</h6>
                                </div>
                                <a href="https://www.tndigitalseva.in/users/profile" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>My profile</span>
                                </a>
                                <!--<a href="./examples/profile.html" class="dropdown-item">
                                  <i class="ni ni-settings-gear-65"></i>
                                  <span>Settings</span>
                                </a>
                                <a href="./examples/profile.html" class="dropdown-item">
                                  <i class="ni ni-calendar-grid-58"></i>
                                  <span>Activity</span>
                                </a>
                                <a href="./examples/profile.html" class="dropdown-item">
                                  <i class="ni ni-support-16"></i>
                                  <span>Support</span>
                                </a>-->
                                <div class="dropdown-divider"></div>
                                <a href="https://www.tndigitalseva.in/logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- Header -->  

<!-- Header -->
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
            <div  id="alertMessage" class="row">
        <div class="col-md-12">
                        
                                  
        </div>
            
    </div>        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--7">
                            <!-- Card stats -->
                <div class="row">

                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Pending</h5>
                                        <span class="h2 font-weight-bold mb-0">0</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Process</h5>
                                        <span class="h2 font-weight-bold mb-0">0</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Return</h5>
                                        <span class="h2 font-weight-bold mb-0">0</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Reject</h5>
                                        <span class="h2 font-weight-bold mb-0">0</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Complete</h5>
                                        <span class="h2 font-weight-bold mb-0">2</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Hold</h5>
                                        <span class="h2 font-weight-bold mb-0">3</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Refunded</h5>
                                        <span class="h2 font-weight-bold mb-0">0</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Total Application</h5>
                                        <span class="h2 font-weight-bold mb-0">962</span>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"></path>
   <path d="M5 8h4"></path>
   <path d="M9 16h4"></path>
   <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"></path>
   <path d="M14 9l4 -1"></path>
   <path d="M16 16l3.923 -.98"></path>
</svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0" style="height:100%">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Last Month</h5>
                                    </div>
                                    <div class="col-6">
                                        Payment<br> 99621                                    </div>
                                    <div class="col-6">
                                        Profit<br> 0                                    </div>
                                    <div class="col-6">
                                        Expenses<br> -50492                                    </div>
                                    <div class="col-6">
                                        Total<br> 49129                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0" style="height:100%">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title text-uppercase text-muted mb-0">This Month</h5>
                                    </div>
                                    <div class="col-6">
                                        Payment<br> 45572                                    </div>
                                    <div class="col-6">
                                        Profit<br> 0                                    </div>
                                    <div class="col-6">
                                        Expenses<br> -12377                                    </div>
                                    <div class="col-6">
                                        Total<br> 33195                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
					
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0" style="height:100%">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Last Week</h5>
                                    </div>
                                    <div class="col-6">
                                        Payment<br> 12261                                    </div>
                                    <div class="col-6">
                                        Profit<br> 0                                    </div>
                                    <div class="col-6">
                                        Expenses<br> -3943                                    </div>
                                    <div class="col-6">
                                        Total<br> 8318                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
					
				
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0" style="height:100%">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title text-uppercase text-muted mb-0">This Week</h5>
                                    </div>
                                    <div class="col-6">
                                        Payment<br> 9622                                    </div>
                                    <div class="col-6">
                                        Profit<br> 0                                    </div>
                                    <div class="col-6">
                                        Expenses<br> -6101                                    </div>
                                    <div class="col-6">
                                        Total<br> 3521                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
					
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0" style="height:100%">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Yesterday</h5>
                                    </div>
                                    <div class="col-6">
                                        Payment<br> 0                                    </div>
                                    <div class="col-6">
                                        Profit<br> 0                                    </div>
                                    <div class="col-6">
                                        Expenses<br> 0                                    </div>
                                    <div class="col-6">
                                        Total<br> 0                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
					
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0" style="height:100%">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Today</h5>
                                    </div>
                                    <div class="col-6">
                                        Payment<br> 0                                    </div>
                                    <div class="col-6">
                                        Profit<br> 0                                    </div>
                                    <div class="col-6">
                                        Expenses<br> 0                                    </div>
                                    <div class="col-6">
                                        Total<br> 0                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    
                    <div class="col-xl-3 col-lg-6" style="margin-top:50px;">
                        <div class="card card-stats mb-4 mb-xl-0" style="height:100%">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Today Transaction</h5>
                                    </div>
                                    <div class="col-6">
                                        Open Balance<br> 0                                    </div>
                                    <div class="col-6">
                                        UPI<br> 0                                    </div>
                                    <div class="col-6">
                                        Paid<br> 0                                    </div>
                                    <div class="col-6">
                                        Cash<br> 0                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
                </div>
<!-- Modal -->
<div id="record_transaction" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Create Transaction</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="https://www.tndigitalseva.in/ledger/create_admin_transactions" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Description</label><br>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12">
                            <label>Type</label><br>
                            <select name="type" class="form-control">
                                <option></option>
                                <option>CREDIT</option>
                                <option>DEBIT</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label>Amount</label><br>
                            <input type="number" step="0.1" name="amount" class="form-control">
                        </div>
                        <div class="col-md-12 text-right">
                            <input type="submit" class="btn btn-primary btn-sm" value="Create">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--7">
    <div id="pdf_editor"></div>
<div class="modal fade" id="confirm-delete-js" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to delete? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger btn-ok btn-ok-js">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-delete-multi-js" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to delete? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger btn-ok btn-ok-multi-js">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-customer-delete-js" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to delete? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger btn-ok btn-ok-customer-js">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-delete-gst-purchase" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to delete? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger btn-ok btn-ok-gst-purchase">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-delete-gst-sales" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to delete? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button class="btn btn-danger btn-ok btn-ok-gst-sales">Delete</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to delete? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-activate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-success">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to Activate?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-success btn-ok">Activate</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-de-activate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to De Activate?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-danger btn-ok">De Activate</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="error_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="exampleModalLabel" class="modal-title">Error</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <h3><p id="error_modal_text" style="color:red;"></p></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ok</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-accept-wallet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to Accept Wallet Request?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-success btn-ok" onclick="confirm_accept_wallet(this)">Accept</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirm-reject-wallet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="exampleModalLabel" class="modal-title">Are you sure?</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Do you really want to Reject Wallet Request?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-danger btn-ok">Reject</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="low_balance_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header  modal-header-danger">
                <h4 id="exampleModalLabel" class="modal-title">Low Balace</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <p>Unable to process. Due to low balance!</p>
            </div>
            <div class="modal-footer">
                <!--                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a href="#" class="btn btn-danger btn-ok">Reject</a>-->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="receipt_amoun_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <form id="receipt_amoun_form" action="" method="post">
            <div class="modal-content">
                <div class="modal-header  modal-header-primary">
                    <h4 id="exampleModalLabel" class="modal-title">Amount</h4>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <input type="number" name="receipt_amount" id="receipt_amount" class="form-control" placeholder="Amount">
                        <span class="badge badge-danger" id="receipt_amount_alert" style="display:none;">Required</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-success" value="Submit" onclick="process_receipt();">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal fade" id="processing" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-confirm modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="exampleModalLabel" class="modal-title">Processing...</h4>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><i class="ni ni-fat-remove"></i></button>
            </div>

            <div class="modal-body">
                <center>
                    <img src="https://www.tndigitalseva.in/assets/images/uploading.gif" width="100%">
                    <br>
                    <p>Processing data Please wait...</p>
                </center>

            </div>
            <div class="modal-footer">
                <!--                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-danger btn-ok btn-ok-js">Delete</button>-->
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer">
    <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-2"></div>
        <div class="col-xl-8">
            <div class="copyright text-center text-xl-left text-muted">
<!--                <center>  &copy; 2018 <a href="https://www.tndigitalseva.in/" class="font-weight-bold ml-1" target="_blank">TN Digital Seva Pvt Ltd. All rights reserved</a></center>-->
            </div>
        </div>
        <div class="col-xl-2">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                    <a href="https://www.vigous.in/" class="nav-link" target="_blank">.</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
</div>
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="https://www.tndigitalseva.in/assets/panel/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

<script src="https://www.tndigitalseva.in/assets/panel/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional JS -->
<script src="https://www.tndigitalseva.in/assets/panel/vendor/chart.js/dist/Chart.min.js"></script>
<script src="https://www.tndigitalseva.in/assets/panel/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="https://www.tndigitalseva.in/assets/panel/js/argon.js?v=1.0.0"></script>
<!--TOAST-->
<link href="https://www.tndigitalseva.in/assets/panel/css/toast.style.min.css" rel="stylesheet">
<script src="https://www.tndigitalseva.in/assets/panel/js/toast.script.js"></script>
<script src="https://www.tndigitalseva.in/assets/panel/js/jquery.tabletoCSV.js"></script>
<script>
                        function addToast(toast_message) {
                            $.Toast("", toast_message, "success", {
                                has_icon: true,
                                has_close_btn: true,
                                stack: true,
                                fullscreen: false,
                                timeout: 8000,
                                sticky: false,
                                has_progress: true,
                                rtl: false,
                            });
                            $(".toast-item-wrapper").slideDown("slow");
                        }


                        function processing_form() {
                            $('#processing').modal('show');
                        }
                        $(document).ready(function () {
                            $('.datepicker').on('changeDate', function (ev) {
                                $(this).datepicker('hide');
                            });
                        });

                        $.ajax({
                            url: "https://www.tndigitalseva.in/users/get_notifications/",
                            type: "GET",
                            dataType: "JSON",
                            success: function (data)
                            {

                                var notifications = data.length;

                                $(".notification-data").html("");
                                var count = 0;
                                for (var i = 0; i < notifications; i++) {
                                    var profile = "https://www.tndigitalseva.in/" + data[i].profile_image;
                                    var name_color = "";
                                    // if (data[i].status == 0) {
                                    //     name_color="text-white"
                                    // }
                                    var notification_markup = '<div class="row align-items-center">'
                                            + '<div class="col-auto">'
                                            + '<img alt="Image placeholder" src="' + profile + '" class="avatar rounded-circle">'
                                            + '</div>'
                                            + '<div class="col ml--2">'
                                            + '<div class="d-flex justify-content-between align-items-center">'
                                            + '<div>'
                                            + '<h4 class="mb-0 text-sm ' + name_color + '">' + data[i].notifier_name + '</h4>'
                                            + '</div>'
                                            + '<div class="text-right text-muted">'
                                            //+'<small>2 hrs ago</small>'
                                            + '</div>'
                                            + '</div>'
                                            + '<p class="text-sm mb-0">' + data[i].description + '</p>'
                                            + '</div>'
                                            + '</div>';
                                    // if (data[i].status == 0) {
                                    // 	     $(".notification-data").append('<a class="list-group-item list-group-item-action bg-primary text-white" href="#">' + notification_markup + '</a>');
                                    //     count++;
                                    // }
                                    // else{
                                    $(".notification-data").append('<a class="list-group-item list-group-item-action" href="#">' + notification_markup + '</a>');
                                    //}
                                }
                                if (count > 0) {
                                    addToast(count + " new notifications");
                                }
                                $(".notification-data-count").text(count);
                                console.log("data ", data);
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                console.log("Error get data from ajax");
                            }
                        });
                        $.ajax({
                            url: "https://www.tndigitalseva.in/recharge/check_status/",
                            type: "GET",
                            dataType: "JSON",
                            success: function (data)
                            {
                                console.log("data ", data);
                            },
                            error: function (jqXHR, textStatus, errorThrown)
                            {
                                console.log("Error get data from ajax");
                            }
                        });
                        function update_notifications() {

                            $.ajax({
                                url: "https://www.tndigitalseva.in/users/update_notifications/",
                                type: "GET",
                                dataType: "JSON",
                                success: function (data)
                                {
                                    console.log("data ", data);
                                    $.ajax({
                                        url: "https://www.tndigitalseva.in/users/get_notifications/",
                                        type: "GET",
                                        dataType: "JSON",
                                        success: function (data)
                                        {
                                            var notifications = data.length;

                                            //$(".notification-data").html("");
                                            var count = 0;
                                            for (var i = 0; i < notifications; i++) {
                                                // $(".notification-data").append('<a class="dropdown-item" href="#">' + data[i].description + '</a><div class="dropdown-divider"></div>');
                                                if (data[i].status == 0) {
                                                    count++;
                                                }
                                            }
                                            $(".notification-data-count").text(count);
                                            console.log("data ", data);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown)
                                        {
                                            console.log("Error get data from ajax");
                                        }
                                    });
                                },
                                error: function (jqXHR, textStatus, errorThrown)
                                {
                                    console.log("Error get data from ajax");
                                }
                            });
                        }
                        $('#confirm-delete').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        });

                        $('#confirm-delete-js').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok-js').attr('value', $(e.relatedTarget).data('href'));
                        });
                        $('#confirm-delete-multi-js').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok-multi-js').attr('value', $(e.relatedTarget).data('href'));
                        });
                        $('#confirm-customer-delete-js').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok-customer-js').attr('value', $(e.relatedTarget).data('href'));
                        });
                        $('#confirm-delete-gst-purchase').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok-gst-purchase').attr('value', $(e.relatedTarget).data('href'));
                        });
                        $('#confirm-delete-gst-sales').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok-gst-sales').attr('value', $(e.relatedTarget).data('href'));
                        });

                        $('#confirm-activate').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        });
                        $('#confirm-de-activate').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        });
                        $('.btn-ok-js').on('click', function (e) {

                            delete_sub_service($(this).val());
                        });
                        $('.btn-ok-multi-js').on('click', function (e) {
                            delete_multi_service($(this).val());
                        });
                        $('.btn-ok-customer-js').on('click', function (e) {

                            delete_customer_data($(this).val());
                        });
                        $('.btn-ok-gst-purchase').on('click', function (e) {
                            delete_gst_purchase($(this).val());

                        });
                        $('.btn-ok-gst-sales').on('click', function (e) {

                            delete_gst_sales($(this).val());
                        });
                        $('#confirm-accept-wallet').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        });
                        $('#confirm-reject-wallet').on('show.bs.modal', function (e) {
                            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                        });
                        function receipt(url, amount) {
                            $("#receipt_amount").val(amount);
                            document.getElementById("receipt_amoun_form").action = url;
                            $('#receipt_amoun_modal').modal('show');
                        }
                        function process_receipt() {
                            if ($("#receipt_amount").val() != "") {
                                $('#processing').modal('show');
                                $('#receipt_amoun_form').submit();
                            } else {
                                $("#receipt_amount").focus();
                                $("#receipt_amount_alert").css("display", "block");
                            }
                            event.preventDefault();
                        }
                        function low_balance() {
                            $('#low_balance_modal').modal('show');
                        }
                        function confirm_accept_wallet(data) {
                            $("#confirm-accept-wallet").modal("hide");
                            $("#processing").modal("show");
                        }
                        function exportTableToExcel(tableID, filename = '') {
                            $("#" + tableID).tableToCSV();
                            /** var downloadLink;
                             var dataType = 'application/vnd.ms-excel';
                             var tableSelect = document.getElementById(tableID);
                             var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
                             // Specify file name
                             filename = filename?filename+'.xls':'excel_data.xls';
                             
                             // Create download link element
                             downloadLink = document.createElement("a");
                             
                             document.body.appendChild(downloadLink);
                             
                             if(navigator.msSaveOrOpenBlob){
                             var blob = new Blob(['\ufeff', tableHTML], {
                             type: dataType
                             });
                             navigator.msSaveOrOpenBlob( blob, filename);
                             }else{
                             // Create a link to the file
                             downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
                             
                             // Setting the file name
                             downloadLink.download = filename;
                             
                             //triggering the function
                             downloadLink.click();
                             }*/
                        }
                        function exportTableToPdf(table_id, file_name) {
                            var divToPrint = document.getElementById(table_id);
                            newWin = window.open("");
                            newWin.document.write(divToPrint.outerHTML);
                            newWin.print();
                            newWin.close();
                        }
//                        setInterval(function () {
//                            $.ajax({
//                                url: "https://www.tndigitalseva.in/users/get_notifications/",
//                                type: "GET",
//                                dataType: "JSON",
//                                success: function (data)
//                                {
//                                    var notifications = data.length;
//                                    $(".notification-data").html("");
//                                    var count = 0;
//                                    for (var i = 0; i < notifications; i++) {
//                                        if (data[i].status == 0) {
//                                            $(".notification-data").append('<a class="dropdown-item bg-primary" href="#">' + data[i].description + '</a><div class="dropdown-divider"></div>');
//                                            count++;
//                                        } else {
//                                            $(".notification-data").append('<a class="dropdown-item" href="#">' + data[i].description + '</a><div class="dropdown-divider"></div>');
//                                        }
//                                    }
//                                    if (count > 0) {
//                                        addToast(count + " new notifications");
//                                    }
//                                    $(".notification-data-count").text(count);
//                                    console.log("data ", data);
//                                },
//                                error: function (jqXHR, textStatus, errorThrown)
//                                {
//                                    console.log("Error get data from ajax");
//                                }
//                            });
//                            $.ajax({
//                                url: "https://www.tndigitalseva.in/recharge/check_status/",
//                                type: "GET",
//                                dataType: "JSON",
//                                success: function (data)
//                                {
//                                    console.log("data ", data);
//                                },
//                                error: function (jqXHR, textStatus, errorThrown)
//                                {
//                                    console.log("Error get data from ajax");
//                                }
//                            });
//                        }, 1000 * 60 * 1);
                        function change_per_page() {

                                window.location.href = currentUrl + "/0/" + $("#page_limit option:selected").val();
                            }
                        function reject_wallet(id) {
                            $("#input-reject-wrid").val(id);
                            $("#reject_wallet_request").modal('show');
                        }
                        function reject_processing() {
                            $('#processing').modal('show');
                            $('#reject_wallet_request_form').submit();
                            event.preventDefault();
                        }
                        function view_request(id, amount, uid) {

                            $("#view_wallet_request").modal('show');
                            $.ajax({
                                url: "https://www.tndigitalseva.in/ledger/get_wallet/" + id,
                                type: "GET",
                                dataType: "JSON",
                                success: function (data)
                                {
                                    $("#wallet_balance_amount").text(data.wallet_balance);

                                    $("#request_amount").text(data.payment_amount);
                                    $("#paid_bank").text(data.bank);
                                    $("#wallet_transaction_id").text(data.transaction_id);
                                    $("#pay_type").text(data.payment_type);
                                    $("#pay_proof").attr("href", "https://www.tndigitalseva.in/" + data.proof);

                                },
                                error: function (jqXHR, textStatus, errorThrown)
                                {
                                    alert('Error get data from ajax');
                                }
                            });
                        }
                        $(document).ready(function () {
                            $('#aadhaarno').on('keyup', function () {
                                if ($("#aadhaarno").val().length == 12) {
                                    //   $('#name_pan').focus();
                                    $("#aadhar_no_msg").text("");
                                    // document.getElementById("nextBtn").style.display = "inline";
                                } else {
                                    $("#aadhar_no_msg").text("12 digit");
                                    //     document.getElementById("nextBtn").style.display = "none";
                                }
                            });
                            $('#mobile').on('keyup', function () {
                                if ($("#mobile").val().length == 10) {
                                    //      $('#email').focus();
                                    $("#mobile_msg").text("");
                                    //   document.getElementById("nextBtn").style.display = "inline";
                                } else {
                                    $("#mobile_msg").text("10 digit");
                                    //     document.getElementById("nextBtn").style.display = "none";
                                }
                            });
                            $('#dob').on('keyup', function () {
                                if ($("#dob").val().length == 10) {
                                    //   $('#male').focus();
                                    $("#dob_msg").text("");
                                    //  document.getElementById("nextBtn").style.display = "inline";
                                } else {
                                    $("#dob_msg").text("10 digit");
                                    //  document.getElementById("nextBtn").style.display = "none";
                                }
                            });
                            $('#panno').on('keyup', function () {
                                if ($("#panno").val().length == 10) {
                                    //   $('#male').focus();
                                    $("#panno_msg").text("");
                                    // document.getElementById("nextBtn").style.display = "inline";
                                } else {
                                    $("#panno_msg").text("10 digit");
                                    //  document.getElementById("nextBtn").style.display = "none";
                                }
                            });
                            $('#ao_code').on('keyup', function () {
                                if ($("#ao_code").val().length == 12) {
                                    //$('#proof_of_address').focus();
                                    $("#ao_code_msg").text("");
                                    //  document.getElementById("nextBtn").style.display = "inline";
                                } else {
                                    $("#ao_code_msg").text("12 Character");
                                    //   document.getElementById("nextBtn").style.display = "none";
                                }
                            });

                        });
</script>
</body>

</html>