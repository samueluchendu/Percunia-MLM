<?php 
include('includes/header.php');
include('php-includes/check-login.php');
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <?php include('includes/sidebar.php'); ?>


        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('includes/topbar.php') ?>
               
                <!-- End of Topbar -->
             
<div class="content-wrapper" style="min-height: 568px;">
      <style> .btn-app{   border: 1px solid #333;
    background-color: #292929;
    
    }
	a.disabled {
  pointer-events: none;
  cursor: default;
}
    .btn-app:hover {
    background: #292929;
    color: #444;
    border-color: #333;
}</style>
 <style>
 .small-box>.small-box-footer {
    background: rgb(224 39 39);
}
.small-box>.small-box-footer:hover {
    color: #fff;
    background: rgb(136 2 2);
}
.info-box-content>.info-box-text{
    border-radius: 4;
    padding-left: 4px;
    padding-right: 4px;
	border-radius:4px; 
}
 .list-group-unbordered>.list-group-item {  background-color: #757373;}
 
 .list-group-unbordered>.list-group-item {
    border-radius: 4;
    padding-left: 4px;
    padding-right: 4px;
	border-radius:4px;
}
.profile-username{
    background-color: darkcyan;
}
.small-box>.small-box-footer {
    position: relative;
    text-align: center;
    padding: 3px 0;
    color: rgba(255,255,255,.8);
    display: block;
    z-index: 10;
    background: rgba(0,0,0,.1);
    text-decoration: none;
}
.small-box>.small-box-footer{
    background-color: darkcyan !important;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
a:not([href]):not([tabindex]) {
    color: inherit;
    text-decoration: none;
}
.btn-app {
    border: 1px solid #333;
    background-color: darkcyan !important;

}
.btn-app {
    border-radius: 3px;
    position: relative;
    padding: 15px 5px;
    margin: 0 0 10px 10px;
    min-width: 80px;
    height: 100px;
    text-align: center;
    color: #fff;
    border: 1px solid #ddd;
    background-color: white !important;
    font-size: 12px;
    text-decoration: white;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -7.5px;
    margin-left: -7.5px;
}

</style>
<link rel="stylesheet" type="text/css" href="/css/jquery.countdown.css"> 
<!-- Content Header (Page header) -->
    <div class="content-header ">
      <div class="container-fluid">
          
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <section class="content">
      <div class="container-fluid">
           <!-- Small boxes (Stat box) -->
		   		  
		  
        		         <div class="row">
            
          <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
           
	
             <div class="text-center"> 
             <h3 class="profile-username text-center text-white">Current Level :  2</h3>
			                 <p class="text-muted text-center text-white">Level Price : ₦ 20K</p>
              <p class="text-muted text-center text-white">Level Income : ₦ 80K</p>
                <a href="/customer/users/upgrade" class="btn btn-primary btn-sm text-center"><b>LEVEL UP</b></a>
                </div>
            

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
               <div class="col-md-9">
          <!-- Application buttons -->
          <div class="box">
            
            <div class="box-body">
              
              
              <a class="btn btn-app ">
                1 LEVEL  <i class="fa fa-user"></i>
                <br>
                2 Members
              </a>
              <a  class="btn btn-app">
               2 LEVEL <i class="fa fa-user"></i>
               <br>
                0 Members
              </a>
            
              <a class="btn btn-app">
                3 LEVEL  <i class="fa fa-user"></i>
                <br>
                0 Members
              </a>
              <a class="btn btn-app">
               4 LEVEL <i class="fa fa-user"></i>
               <br>
                0 Members
              </a>
              
              <a class="btn btn-app">
                5 LEVEL  <i class="fa fa-user"></i><br>
                0 Members
              </a>
              <a class="btn btn-app">
               6 LEVEL <i class="fa fa-user"></i><br>
                0 Members
              </a>
              
              <a class="btn btn-app">
                7 LEVEL  <i class="fa fa-user"></i>
                <br>
                0 Members
              </a>
              <a class="btn btn-app">
               8 LEVEL <i class="fa fa-user"></i>
               <br>
                0 Members
              </a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="row">
         
       <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Referrals</span>
                <span class="info-box-number">0</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon   elevation-1"><i class="fa fa-tree"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">My Payment</span>
                <span class="info-box-number">2</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
           <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box mb-3">
              <span class="info-box-icon  elevation-1"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Members</span>
                <span class="info-box-number">2</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
      </div>
         
        </div>
        </div>
       
        <!-- /.row -->
      
    <!-- /.row -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
                <h3>₦ 30000</h3>
                <p>Provided Payment</p>
              </div>
              <div class="icon">
                <i class="fa fa-gift"></i>
              </div>
              <a href="/customer/users/provided" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box ">
              <div class="inner">
                <h3> ₦ 20000</h3>

                <p>Received Payment</p>
              </div>
              <div class="icon">
                <i class="fa fa-gift "></i>
              </div>
              <a href="/customer/users/completed" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3> 0</h3>

                <p>Pending Payment Request</p>
              </div>
              <div class="icon">
                <i class="fa fa-gift"></i>
              </div>
              <a href="/customer/users/pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box">
              <div class="inner">
                <h3>2</h3>

                <p>Completed Payment Request</p>
              </div>
              <div class="icon">
                <i class="fa fa-gift"></i>
              </div>
              <a href="/customer/users/completed" class="small-box-footer info">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        
        <div class="row"> 
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 1</h3>
               <p class="text-muted text-center"> Price : ₦ 10K  </p>
             
                <a href="/customer/users/upgrade" class=" "><b></b></a>
                </div>
                <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">2</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 20K</a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 2</h3>
               <p class="text-muted text-center"> Price : ₦ 20K  </p>
             
                <a href="/customer/users/upgrade" class=" "><b></b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">4</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 80K</a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 3</h3>
               <p class="text-muted text-center"> Price : ₦ 40K  </p>
             
                <a href="/customer/users/upgrade" class=" "><b></b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">8</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 320K</a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 4</h3>
               <p class="text-muted text-center"> Price : ₦ 80K  </p>
             
                <a href="/customer/users/upgrade" class=" "><b></b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">16</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 1.28M </a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      
      </div>
       <div class="row"> 
        <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 5</h3>
               <p class="text-muted text-center"> Price : ₦ 160K  </p>
             
                <a href="/customer/users/upgrade" class=""><b></b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">32</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 5.12M </a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 6</h3>
               <p class="text-muted text-center"> Price : ₦ 320K  </p>
             
                <a href="/customer/users/upgrade" class=""><b></b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">64</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 20.48M </a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 7</h3>
               <p class="text-muted text-center"> Price : ₦ 640K  </p>
             
                <a href="/customer/users/upgrade" class=" "><b></b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">128</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 81.92 M</a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
          <div class="card card-outline">
            <div class="card-body card-profile">
            <!--  <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">-->

             <div class="text-center"> 
             <h3 class="profile-username text-center text-white"> Level 8</h3>
               <p class="text-muted text-center"> Price : ₦ 1.28M  </p>
             
                <a href="/customer/users/upgrade" class=" "><b></b></a>
                </div>
                 <br>
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item bg-light">
                  <b>Referrals</b> <a class="pull-right">256</a>
                </li>
                <li class="list-group-item bg-light">
                  <b>Income</b> <a class="pull-right">₦ 327.68M </a>
                </li>
                
              </ul>

              
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      
      </div>
         
               
       
        <!-- /.row -->
        <!-- Main row -->
    
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
      <script type="text/javascript" src="/js/jquery.countdown.min.js"></script>    </section>
    <!-- /.content -->
  
   </div>   

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
    <?php include('includes/footer.php') ?>
    

</body>

</html>





























































































