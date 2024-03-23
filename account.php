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
        $notices = $row['notices'];
    }


   $admin_result = mysqli_query($connection, "SELECT * FROM admin");

    if ($row = mysqli_fetch_array($admin_result)) {
        $bitcoinadd = $row['bitcoinadd'];
        $ethadd = $row['ethadd'];
        
        
    }
       
       $result = mysqli_query($connection, "SELECT * FROM `users` WHERE `user_id` = '".$user_id."'");
 if ($notices = $row['notices']) {
           $code = 4;
          }  
if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $depositbal = $_POST['depositbal'];
    $user_email = $_POST['user_email'];
    $image = $_POST['image'];
    $gateway = $_POST['gateway'];
   

    
        $updatepass = "UPDATE `users` SET `user_email`='".$user_email."',`depositbal`='".$depositbal."',`gateway`='".$gateway."',`image`='".$image."',`user_name`='".$user_name."'WHERE user_id = '".$user_id."'";
        mysqli_query($connection, $updatepass);
}
        ?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 00:31:36 GMT -->
<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c3d4f0a2-cddf-4b18-b2d3-fc02cab7583b";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script><!-- /Added by HTTrack -->
<head>
    <title>Banklyforextrade | Account Update </title>
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
    <!-- Favicon icon -->
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
                                            <a href="login.php" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                                            <i class="feather icon-log-out"></i> Logout
  <form id="logout-form" action="" method="POST" style="display: none;">
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
	 <!-- Content Wrapper. Contains page content -->
     <div class="pcoded-content">
                          <!-- [ breadcrumb ] start -->
                          <div class="page-header card">
                              <div class="row align-items-end">
                                  <div class="col-lg-8">
                                      <div class="page-header-title">
                                          <i class="feather icon-credit-card bg-c-blue"></i>
                                          <div class="d-inline">
                                              <h5>Update Account</h5>
                                             <?php            if ($code == 4) {             echo "<div class='alert alert-danger'><b><center>$notices</b></center></div>";           }    ?>
                                              
                                             
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-4">
                                      <div class="page-header-breadcrumb">
                                          <ul class=" breadcrumb breadcrumb-title">
                                              <li class="breadcrumb-item">
                                                  <a href="/dashboard"><i class="feather icon-home"></i></a>
                                              </li>
                                             
                                              <li class="breadcrumb-item">
                                                  <a href="#">Update Account</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- [ breadcrumb ] end -->
                      <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-body start -->
                                <div class="page-body">
                                <div class="card">
            	        </div>
                                   <div class="row">
                                            <div class="col-sm-8" style="margin:20px auto">
                                                	<form  method="post" action="">
                                                <!-- Material tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Update Account</h5>
                                                    </div>
               
                                                    <div class="card-block">
                                                        <!-- Row start -->
                                                                                                        <!-- Row end -->
                                                        <!-- Row start -->
                                                        <div class="row">
                                                        
                                                            <div class="col-lg-12 col-xl-12">
                                                                <div class="sub-title"></div>
                                                                <!-- Nav tabs -->
                                                                       
                                                                <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#home5" role="tab">Bank Transfer</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#profile5" role="tab">Bitcoin</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages5" role="tab">Ethereum</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#settings5" role="tab">Litecoin</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                
                                                                                                     
                                                                <div class="tab-content tabs-left-content card-block">
                                                                    <div class="tab-pane active" id="home5" role="tabpanel">
                                                                           <div class="form-group row">
                    <label for="inputuser_email3" class="col-sm-4 col-form-label">Bank Name*</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputuser_email3" placeholder="Bank Name" name="bank_name" value="" >
                    </div>
                  </div>
				  
				  <div class="form-group row">
                    <label for="inputuser_email3" class="col-sm-4 col-form-label">Account Name*</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputuser_email3" placeholder="Account Name" name="account_name" value="">
                    </div>
                  </div>
				  
				  <div class="form-group row">
                    <label for="inputuser_email3" class="col-sm-4 col-form-label">Account Number*</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputuser_email3" placeholder="Account Number" name="account_number" value="">
                    </div>
                  </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="profile5" role="tabpanel">
                                                                         <div class="form-group row">
                    <label for="inputuser_email3" class="col-sm-4 col-form-label">BTC Address*</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputuser_email3" placeholder="BTC Address" name="btcaddress" value="">
                    </div>
                  </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="messages5" role="tabpanel">
                                                                           <div class="form-group row">
                    <label for="inputuser_email3" class="col-sm-4 col-form-label">ETH Address*</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputuser_email3" placeholder="ETH Address" name="ethaddress" value="">
                    </div>
                  </div>
                                                                    </div>
                                                                    <div class="tab-pane" id="settings5" role="tabpanel">
                                                                           <div class="form-group row">
                    <label for="inputuser_email3" class="col-sm-4 col-form-label">LTC Address*</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="inputuser_email3" placeholder="LTC Address" name="ltc_address" value="">
                      <input type="hidden" name="id" value="476">
					<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
                    </div>
                  </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <!-- Row end -->
                                                    </div>
                                                    <div class="row">
<div class="col-md-3" style="margin:20px auto 10px">
<button type="submit" class="btn btn-block btn-primary btn-flat" name="submit">Submit</button>
<div/>
</div>
                                                </div>
                                                <!-- Material tab card end -->
                                                </form>
                                            </div>
                                        </div>
                                 
                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->

                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
        
  <!-- /.content-wrapper -->
        <!-- send all users user_email -->
			<div id="sendmailModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">This message will be sent to all your users.</h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="https://app.achieversfx.com/dashboard/sendmail">
					   		
					   		<textarea class="form-control" name="message" row="3" required=""></textarea><br/>
                               
					   		<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
					   		<input type="submit" class="btn btn-default" value="Send">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /send all users user_email Modal -->
			
			
			<!-- Deposit Modal -->
			<div id="depositModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Make new deposit</h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="https://app.achieversfx.com/dashboard/deposit">
					   		<input style="padding:5px;" class="form-control" placeholder="Enter amount here" type="text" name="amount" required><br/>
                               
					   		<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
					   		<input type="submit" class="btn btn-default" value="Continue">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /deposit Modal -->
			
			
			<!-- Withdrawal method Modal -->
			<div id="wmethodModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Add new withdrawal method</h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="">
					   		<input style="padding:5px;" class="form-control" placeholder="Enter method name" type="text" name="name" required><br/>
					   		<input style="padding:5px;" class="form-control" placeholder="Minimum amount $" type="text" name="minimum" required><br/>
					   		<input style="padding:5px;" class="form-control" placeholder="Maximum amount $" type="text" name="maximum" required><br/>
					   		<input style="padding:5px;" class="form-control" placeholder="Charges (Fixed amount $)" type="text" name="charges_fixed" required><br/>
					   		<input style="padding:5px;" class="form-control" placeholder="Charges (Percentage %)" type="text" name="charges_percentage" required><br/>
					   		<input style="padding:5px;" class="form-control" placeholder="Payout duration" type="text" name="duration" required><br/>
					   		<select name="status" class="form-control">
					   		    <option value="">Select action</option> 
					   		    <option value="enabled">Enable</option> 
					   		    <option value="disabled">Disable</option> 
					   		</select><br/>
                             <input type="hidden" name="type" value="withdrawal">
					   		<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
					   		<input type="submit" class="btn btn-default" value="Continue">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /withdrawal method Modal -->


            			<!-- Withdrawal Modal -->
			<div id="withdrawalModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Payment will be sent to your recieving address.</h4>
			      </div>
			      <div class="modal-body">
                        <form style="padding:3px;" role="form" method="post" action="https://app.achieversfx.com/dashboard/withdrawal">
					   		<input style="padding:5px;" class="form-control" placeholder="Enter amount here" type="text" name="amount" required><br/>
                               
					   		<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
					   		<input type="submit" class="btn btn-default" value="Submit">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /Withdrawals Modal -->

			       			<!-- Plans Modal -->
			<div id="plansModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Add new plan / package</h4>
			      </div>
			      <div class="modal-body">
              <form style="padding:3px;" role="form" method="post" action="https://app.achieversfx.com/dashboard/addplan">
							<label>Plan name</label><br/>	
							<input style="padding:5px;" class="form-control" placeholder="Enter Plan name" type="text" name="name" required><br/>
								 <label>Plan price</label><br/>
								 <input style="padding:5px;" class="form-control" placeholder="Enter Plan price" type="text" name="price" required><br/>
								 <label>Plan MIN. price</label><br/>		 
            					  <input style="padding:5px;" placeholder="Enter Plan minimum price" class="form-control" type="text" name="min_price" required><br/>
            					  <label>Plan MAX. price</label><br/>		 
								  <input style="padding:5px;" class="form-control" placeholder="Enter Plan maximum price" type="text" name="max_price" required><br/>
								  <label>Minimum return</label><br/>
								<input style="padding:5px;" class="form-control" placeholder="Enter minimum return" type="text" name="minr" required><br/>
								<label>Maximum return</label><br/>
								<input style="padding:5px;" class="form-control" placeholder="Enter maximum return" type="text" name="maxr" required><br/>
								<label>Gift Bonus</label><br/>
								<input style="padding:5px;" class="form-control" placeholder="Enter Additional Gift Bonus" type="text" name="gift" required><br/>	
								 <label>Plan expected return (ROI)</label><br/>
								 <input style="padding:5px;" class="form-control" placeholder="Enter expected return for this plan" type="text" name="return" required><br/>
								 					 
								<label>top up interval</label><br/>
                               <select class="form-control" name="t_interval">
									<option>Monthly</option>
									<option>Weekly</option>
									<option>Daily</option>
									<option>Hourly</option>
								</select><br>
								 <label>top up type</label><br/>
                               <select class="form-control" name="t_type">
																		<option>Percentage</option>
																		<option>Fixed</option>
															 </select><br>
															 <label>top up amount (in % or $ as specified above)</label><br/>
															 <input style="padding:5px;" class="form-control" placeholder="top up amount" type="text" name="t_amount" required><br/>
															 <label>Investment duration</label><br/>
															 <input style="padding:5px;" class="form-control" placeholder="Investment Duration" type="text" name="expiration" required>
                               <br>
					   		<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
					   		<input type="submit" class="btn btn-default" value="Submit">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /plans Modal -->
            	<!-- Trades Modal -->
			<div id="tradesModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">Add new Trade Symbol</h4>
			      </div>
			      <div class="modal-body">
              <form style="padding:3px;" role="form" method="post" action="https://app.achieversfx.com/dashboard/addmtrade">
							<label>Trade name</label><br/>	
							<input style="padding:5px;" class="form-control" placeholder="Enter Plan name" type="text" name="name" required><br/>
								 <label>Trade Symbol</label><br/>
								 <input style="padding:5px;" class="form-control" placeholder="Enter Plan price" type="text" name="sym" required><br/>
								 <label>Trade Ask Price</label><br/>		 
            					  <input style="padding:5px;" placeholder="Enter Plan minimum price" class="form-control" type="text" name="ask_price" required><br/>
            					  <label>Trade Spread</label><br/>		 
								  <input style="padding:5px;" class="form-control" placeholder="Enter Plan maximum price" type="text" name="spread" required><br/>
								 					 
								<label>Trade Type</label><br/>
                               <select class="form-control" name="type">
									<option>forex</option>
									<option>stock</option>
									<option>crypto</option>
									<option>oil</option>
									<option>indice</option>
								</select><br>
							
					   		<input type="hidden" name="_token" value="ggZqk1Uy1pAvdKmk2SHOJA9hXdcmJCAbcGwNsICD">
					   		<input type="submit" class="btn btn-default" value="Submit">
					   </form>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /plans Modal -->
			<!-- settings update Modal -->
			<div id="s_updModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title" style="text-align:center;">This settings page was last updated by</h4>
			      </div>
			      <div class="modal-body">
                        <h3>Admin Certified</h3>
                        
                        <h4 class="modal-title" style="text-align:center;">Date/Time</h4>
                        
                        <h3>2020-09-01 09:53:56</h3>
			      </div>
			    </div>
			  </div>
			</div>
			<!-- /settings update Modal -->
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


<!--End of Tawk.to Script-->
</body>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Dec 2020 00:31:45 GMT -->
</html>
