<?php 
$error = '';
include_once 'connect.php';
error_reporting(0);
session_start();
if ($_SESSION['user_id'] == '') {

}
$user_id = $_SESSION['users'];

   $result = mysqli_query($connection, "SELECT * FROM users WHERE user_id = '".$user_id."'");
    if ($row = mysqli_fetch_array($result)) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $user_email = $row['user_email'];
        $dashbal = $row['dashbal'];
        $depositbal = $row['depositbal'];
        $withdrawbal = $row['withdrawbal'];
        
    }

 $result = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_id` = '".$user_id."'");
 if ($notices = $row['notices']) {
           $code = 4;
          }

if (isset($_POST['submit'])) {
   $oldpassword = $_POST['oldpassword'];
   $newpassword = $_POST['newpassword'];


   if ($oldpassword == $user_password) {

         $updatepass = "UPDATE `users` SET `user_password`='".$newpassword."' WHERE user_id = '".$user_id."'";
        mysqli_query($connection, $updatepass);
        if ($updatepass) {
         $code = 'success'; 
        }



   }
   else {
    $code = "fail";
   } 
     


}



?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 00:31:36 GMT -->
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c3d4f0a2-cddf-4b18-b2d3-fc02cab7583b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script><!-- /Added by HTTrack -->
<head>
    <title>Banklyforextrade | Change Password </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->

    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />
    
  
 <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="files/bower_components/chartist/css/chartist.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/widget.css">
    
    
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="dashboard.php">
                            <img class="img-fluid" src="images/logo-removebg-preview.png" alt="Theme-Logo" />
                        </a>
                      <a class="mobile-menu" id="mobile-collapse" href="#!">
                          <i class="feather icon-menu icon-toggle-right"></i>
                      </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                     
  <ul class="nav-left">                 
        <div id="google_translate_element"></div>
                       </ul>
                        <ul class="nav-right">
                        
                            <li class="user-profile header-notification">

                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="images/ppics.png" class="img-radius" alt="User-Profile-Image">
                                        <span><?php echo $fname; ?> <?php echo $lname; ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                 
                                        <li>
                                            <a href="Profile.php">
                                            <i class="feather icon-user"></i> Profile

                                        </a>
                                        </li>
                                        <li>
                                            <a href="Notifications.php">
                                            <i class="feather icon-mail"></i> My Notification

                                        </a>
                                        </li>
                                     
                                        <li>
                                            <a href="login.php" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i> Logout
  <form id="logout-form" action="https://Banklyforextrade.com/logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
                    </form>
                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
       
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="dashboard.php" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                       
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Account</span>
                                           
                                        </a>
                                        <ul class="pcoded-submenu">
                                          
                                             <li class="">
                                                <a href="account.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Account Update</span>
                                                </a>
                                            </li>
                                                                                         
                                            <li class="">
                                                <a href="change-password.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Change Password</span>
                                                </a>
                                            </li>
                                                                                          <li class="">
                                                
                                            </li>
                                                                                    </ul>
                                    </li>
                                    <li class="">
                                        <a href="transaction.php" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-menu"></i>
        									</span>
                                            <span class="pcoded-mtext">Transaction (ROI) Log</span>
                                        </a>
                                    </li>
                                  
                                </ul>
                              <div class="pcoded-navigation-label">Account Details</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="">
                                        <a href="deposit.php" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-box"></i>
        									</span>
                                            <span class="pcoded-mtext">Deposit</span>
                                        </a>
                                       
                                    </li>
                                    <li class="">
                                        <a href="withdraw.php" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-gitlab"></i>
        									</span>
                                            <span class="pcoded-mtext">Withdrawal</span>
                                        </a>
                                      
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-package"></i>
        									</span>
                                            <span class="pcoded-mtext">Investment</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="plan.php" class="waves-effect waves-dark">
                                         Investment Plans</span>
                                                </a>
                                            </li>
                                         
                                        </ul>
                                    </li>
                                   

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-command"></i>
        									</span>
                                            <span class="pcoded-mtext">Trade</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="trades.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">New Trade</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="trade-history.php" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Trade History</span>
                                                </a>
                                            </li>
                                         

                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Others</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    
                                    <li class=" ">
                                        <a href="support.php" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-edit-1"></i>
        									</span>
                                            <span class="pcoded-mtext">Support</span>
                                           
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="Referral.php" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-feather"></i>
        									</span>
                                            <span class="pcoded-mtext"> Referrals </span>
                                        </a>
                                    </li>
                                   <li>
               <a href="login.php">
            <i class="fa fa-arrow-left"></i> <span>Logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
                                   
                                </ul>
                            
                                
                            </div>
                        </div>
                    </nav>
                    <!-- [ navigation menu ] end -->
                  		<!-- //header-ends -->
		<!-- main content start-->
    <div class="pcoded-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="page-header-title">
                                <i class="feather icon-clipboard bg-c-blue"></i>
                                <div class="d-inline">
                                    <h5>Change Password</h5>
                                    <?php            if ($code == 4) {             echo "<div class='alert alert-danger'><b><center>$notices</b></center></div>";           }    ?>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="page-header-breadcrumb">
                                <ul class=" breadcrumb breadcrumb-title">
                                    <li class="breadcrumb-item">
                                        <a href="dashboard.php"><i class="feather icon-home"></i></a>
                                    </li>
                                  
                                    <li class="breadcrumb-item">
                                        <a href="#">Change Password</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->

                <div class="pcoded-inner-content">
                  <div class="main-body">
                    <div class="page-wrapper">
                      <!-- Page body start -->
                      <div class="page-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <!-- Basic Inputs Validation start -->
                          
                            <!-- Tooltip Validation card start -->
                            <div class="card">
                              <div class="card-header">
                                <h5>Change Password</h5>
                               
                              </div>
                              <div class="card-block">
                                <form id="second" action="" method="post" novalidate>
                                    <div class="form-group row">
                                        	
                                                    </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Old Password</label>
                                    <div class="col-sm-10">
                                     
                                       <input type="password" class="form-control" id="inputuser_email3" name="old_password" placeholder="old password" required>
                                      <span class="messages popover-valid"></span>
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> New Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" required>
                                      <span class="messages popover-valid"></span>
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"> Confirm Password</label>
                                    <div class="col-sm-10">
                                      <input type="password" class="form-control" id="inputPassword3" name="password_confirmation" placeholder="Confirm Password" required>
                                      <span class="messages popover-valid"></span>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <label class="col-sm-2"></label>
                                    <div class="col-sm-10">
                                        	<input type="hidden" name="id" value="476">
                    <input type="hidden" name="current_password" value="$2y$10$aNRs8Tw1F6WnsERx1EOxf.wnfXyg/GQ2bVc0vH1XCfptOWQ7pUoYS">
					<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
                                      <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>
                            <!-- Tooltip Validation card end -->
                           
                          <!-- Form components Validation card end -->
                        </div>
                      </div>
                    </div>
                    <!-- Page body end -->
                  </div>
                </div>
              </div>
            </div>
          
 
		</div>
            </div>
        </div>
    </div>
        
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    
    <script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="files/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- Float Chart js -->
    <script src="files/assets/pages/chart/float/jquery.flot.js"></script>
    <script src="files/assets/pages/chart/float/jquery.flot.categories.js"></script>
    <script src="files/assets/pages/chart/float/curvedLines.js"></script>
    <script src="files/assets/pages/chart/float/jquery.flot.tooltip.min.js"></script>
    <!-- amchart js -->
    <script src="files/assets/pages/widget/amchart/amcharts.js"></script>
    <script src="files/assets/pages/widget/amchart/serial.js"></script>
    <script src="files/assets/pages/widget/amchart/light.js"></script>
    <!-- Google map js -->
    <script src="../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="files/assets/pages/google-maps/gmaps.js"></script>

    <!-- Custom js -->
    <script src="files/assets/js/pcoded.min.js"></script>
    <script src="files/assets/js/vertical/vertical-layout.min.js"></script>
    <script type="text/javascript" src="files/assets/pages/dashboard/crm-dashboard.min.js"></script>
    <script type="text/javascript" src="files/assets/js/script.min.js"></script>
    
    



 <!-- /WhatsHelp.io widget --> 
    <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+15612852663", 
            text: "Hello, how may we help you? Just send us a message now to get assistance.",
            abid:"+15612852663",// WhatsApp number
           
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->


<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>


<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 00:31:45 GMT -->
</html>
