<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PERCUNIA FOUREM - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">PERCUNIA FACTOREM<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Settings:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Profile Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="profile.php" data-toggle="collapse" data-target="#collapseProfile"
                    aria-expanded="true" aria-controls="collapseProfile">
                    <!-- <i class="fas fa-fw fa-wrench"></i> -->
                    <i class="far fa-user"></i>
                    <span>My Profile</span>
                </a>
                <div id="collapseProfile" class="collapse" aria-labelledby="headingProfile"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Profile:</h6>
                        <a class="collapse-item" href="profile.php">Profile</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
            

            <!-- Nav Item - Payment Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePayment"
                    aria-expanded="true" aria-controls="collapsePayment">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Payment Methoed</span>
                </a>
                <div id="collapsePayment" class="collapse" aria-labelledby="headingPayment" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Payment Screens:</h6>
                        <a class="collapse-item" href="payment.process.php">Payments Process</a>
                        <a class="collapse-item" href="provided.payment.php">Provided Payments</a>
                        <a class="collapse-item" href="pending.payment.php">Pending Payments</a>
                        <a class="collapse-item" href="completed.payment.php">Completed Payments</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCharts">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
                    <div id="collapseCharts" class="collapse" aria-labelledby="headingCharts" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Charts Screens:</h6>
                        <a class="collapse-item" href="payment.process.php">Charts Process</a>
                        <a class="collapse-item" href="provided.payment.php">Provided Charts</a>
                        <a class="collapse-item" href="pending.payment.php">Pending Charts</a>
                        <a class="collapse-item" href="completed.payment.php">Completed Charts</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Referrals -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReferrals">
                     <i class="fas fa-fw fa-tree"></i> 
                    <!-- <i class="far fa-tree"></i> -->
                    <span>Referrals</span></a>
                    <div id="collapseReferrals" class="collapse" aria-labelledby="headingReferrals" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Referrals Screens:</h6>
                        <a class="collapse-item" href="login.html">Genealogy</a>
                        <a class="collapse-item" href="referrallink.php">My Referrals</a>
                        <a class="collapse-item" href="resetpassword.php">Forgot Pasword</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Updates -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUpdates">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <i class="far fa-bell"></i>
                    <span>Updates</span></a>
                    <div id="collapseUpdates" class="collapse" aria-labelledby="headingUpdates" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Updates Screens:</h6>
                        <a class="collapse-item" href="updates.php">Updates</a>
                        <div class="collapse-divider"></div>
                        <!-- <a class="collapse-item" href="blank.html">Blank Page</a>  -->
                    </div>
                </div>
            </li>
             
            <!-- Nav Item - ReferralLink -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReferralLink">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <i class="fas fa-link"></i>
                    <span>Referral Link</span></a>
                    <div id="collapseReferralLink" class="collapse" aria-labelledby="headingReferralLink" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Referral Link Screens:</h6>
                        <a class="collapse-item" href="login.html">Referral Link</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

              <!-- Nav Item - ChangePassword -->
              <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseChangePassword">
                    <!-- <i class="fas fa-fw fa-chart-area"></i> -->
                    <i class="far fa-edit"></i>
                    <span>Change Password</span></a>
                    <div id="collapseChangePassword" class="collapse" aria-labelledby="headingChangePassword" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Change Password Screens:</h6>
                        <a class="collapse-item" href="resetpassword.php">Change Password</a>
                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables
            <li class="nav-item active">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-4 d-none d-lg-inline text-white-800 large">BASSEY ENO</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <div class="container-fluid">
         <div class="row">
            
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-info">
              <div class="card-header text-white bg-info">
                <h3 class="card-title">REGISTRATION DETAILS</h3>
                <div 
                class="card-tools" style="text-align: right;">
                <a href="updates.profile.php" class="badge badge-primary p-3">Change Details</a>
            </div>

              </div>
        
            <div class="card-body card-profile">
                <div class="text-center">
              <img class="profile-user-img img-responsive img-circle" src="/img/img-placeholder.png" alt="User profile picture">
                </div>
              <h3 class="profile-username text-center">Olutayo Adedeji</h3>

            <!--  <p class="text-muted text-center"><a href="/customer/users/changeAvatar/1005124" class="btn btn-primary"><b>Change Avatar</b></a></p>-->

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Username</b> <a class="pull-right">HenryTee</a>
                </li>
                <li class="list-group-item">
                  <b>Email Id</b> <a class="pull-right">henrybfp4ever@yahoo.com</a>
                </li>
                <li class="list-group-item">
                  <b>Skype Id</b>                   <div class="input-group mb-3 pull-right">
                  <input type="text" class="form-control rounded-0" id="skype_id" placeholder="Enter your Skype ID">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-info btn-flat" onclick="saveSkypeid()">Save</button>
                  </span>
                </div>                </li>
                <li class="list-group-item">
                  <b>Joined</b> <a class="pull-right">04-02-2021</a>
                </li>
                <li class="list-group-item">
                  <b>IP Address</b> <a class="pull-right">197.210.226.61</a>
                </li>
                <li class="list-group-item">
                  <b>Country</b> <a class="pull-right">Nigeria</a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right">8078522644</a>
                </li>
                <li class="list-group-item">
                  <b>Invited By</b> <span class="pull-right">Brownsville &nbsp; <a href="mailto:kayodebrown7@gmail.com">kayodebrown7@gmail.com</a></span>
                </li>
              </ul>

              
            </div>
            </div>
            
            <!-- /.card -->
  <!-- /.card -->
          <div class="card card-info">
              <div class="card-header bg-info">
                <h3 class="card-title text-white">Security</h3>
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <div class="card-body">
                    
                  <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Account Password</b> <a href="/customer/users/change_password" class="pull-right text-danger"><i class="fa fa-pencil-square-o"></i>  </a> &nbsp;&nbsp;  <a class="float-right">***************  </a>
                    
                  </li>
                 <!-- <li class="list-group-item">
                    <b>Secret Question</b> <a class="float-right"></a> 
                  </li>
                  <li class="list-group-item">
                    <b>Secret Answer</b>
                    <a href="/customer/users/change_secret" class="pull-right text-danger"><i class="fa fa-pencil-square-o"></i>  </a> &nbsp;&nbsp; <a class="float-right">***************  </a>
                  </li>-->
                  <li class="list-group-item">
                    <b>Last 5 different login IP's</b> 
                  </li>
                                   <li class="list-group-item">
                    16-Mar-2021 15:29:43	<a class="float-right">197.210.226.61</a>
                  </li>
                                   <li class="list-group-item">
                    16-Mar-2021 14:21:18	<a class="float-right">197.210.55.107</a>
                  </li>
                                   <li class="list-group-item">
                    16-Mar-2021 12:15:55	<a class="float-right">197.210.226.61</a>
                  </li>
                                   <li class="list-group-item">
                    16-Mar-2021 11:31:50	<a class="float-right">197.210.226.61</a>
                  </li>
                                   <li class="list-group-item">
                    15-Mar-2021 20:55:59	<a class="float-right">102.130.65.118</a>
                  </li>
                                  </ul>
               
                </div>
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              
            </div>
            <!-- /.card -->



          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header bg-info">
                <h3 class="card-title text-white">Profile Options</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                    <h6>Control what you share with others.</h6>
                    
                    <div class="form-group row">
                        <div class="col-md-10"><span class="text-blue" data-toggle="tooltip" data-placement="left" title="Show My Email"><i class="fa fa-question-circle"></i> </span><b>Email Address</b></div>
                    <label for="show_email" class="switch col-md-2">
                        
                        <input class="pull-right" type="checkbox" name="show_email" id="show_email" onclick="myFunction('show_email')">
                        <span class="slider round"></span>
                        </label>
                  </div> 
                    
                    <div class="form-group row">
                        <div class="col-md-10"><span class="text-blue" data-toggle="tooltip" data-placement="left" title="Show My Avatar"><i class="fa fa-question-circle"></i> </span><b>Avatar</b></div>
                    <label for="show_avatar" class="switch col-md-2">
                        
                        <input class="pull-right" type="checkbox" name="show_avatar" id="show_avatar" onclick="myFunction('show_avatar')">
                        <span class="slider round"></span>
                        </label>
                  </div>
                  <div class="form-group row">
                        <div class="col-md-10"><span class="text-blue" data-toggle="tooltip" data-placement="left" title="Show My Social Network Links"><i class="fa fa-question-circle"></i> </span><b>Social Links</b></div>
                    <label for="show_social_links" class="switch col-md-2">
                        
                        <input class="pull-right" type="checkbox" name="show_avatar" id="show_social_links" onclick="myFunction('show_social_links')">
                        <span class="slider round"></span>
                        </label>
                  </div>
                    <div class="form-group row">
                        <div class="col-md-10"><span class="text-blue" data-toggle="tooltip" data-placement="left" title="Show My Skype Id"><i class="fa fa-question-circle"></i> </span><b>Skype Id</b></div>
                    <label for="show_skype_id" class="switch col-md-2">
                        
                        <input class="pull-right" type="checkbox" name="show_avatar" id="show_skype_id" onclick="myFunction('show_skype_id')">
                        <span class="slider round"></span>
                        </label>
                  </div>
                  <div class="form-group row">
                        <div class="col-md-10"><span class="text-blue" data-toggle="tooltip" data-placement="left" title="Show My Phone Number"><i class="fa fa-question-circle"></i> </span><b>Phone No</b></div>
                    <label for="show_mobile" class="switch col-md-2">
                        
                        <input class="pull-right" type="checkbox" name="show_avatar" id="show_mobile" onclick="myFunction('show_mobile')">
                        <span class="slider round"></span>
                        </label>
                  </div>
                  
                 <!-- <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                        </div>
                        <div class="custom-control custom-checkbox">
                          <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>
                          <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                        </div>
                      </div>-->
                </div>
                <!-- /.card-body -->
                
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
          <div class="card card-info">
              <div class="card-header bg-info">
                <h3 class="card-title text-white">Social Networks</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             
                <div class="card-body">
                    <h6>Any social network links listed here will be displayed on your public profile page.</h6>
                  <ul class="list-group list-group-unbordered mb-3">
                                      </ul>
               
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-social">Add Link</button>
                  
                </div>
                <!-- /.card-footer -->
              
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
               
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>