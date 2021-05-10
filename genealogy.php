<?php
include('php-includes/connect.php');
include('php-includes/check-login.php');
$userid = $_SESSION['userid'];
$search = $userid;
?>
<?php
function tree_data($userid){
global $con;
$data = array();
$query = mysqli_query($con,"select * from tree where userid='$userid'");
$result = mysqli_fetch_array($query);
$data['left'] = $result['left'];
$data['right'] = $result['right'];
$data['leftcount'] = $result['leftcount'];
$data['rightcount'] = $result['rightcount'];
return $data;
}
?>
<?php 
if(isset($_GET['search-id'])){
$search_id = mysqli_real_escape_string($con,$_GET['search-id']);
if($search_id!=""){
$query_check = mysqli_query($con,"select * from user where email='$search_id'");
if(mysqli_num_rows($query_check)>0){
$search = $search_id;
}
else{
echo '<script>alert("Access Denied");window.location.assign("tree.php");</script>';
}
}
else{
echo '<script>alert("Access Denied");window.location.assign("tree.php");</script>';
} 
}
?>
<?php include('includes/header.php'); ?>

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
                    <style>
                        /* .btn-app{   border: 1px solid #333;
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
} */
                    </style>
                    <style>
                        /* .small-box>.small-box-footer {
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
} */
                    </style>
                    <link rel="stylesheet" type="text/css" href="/css/jquery.countdown.css">
                    <!-- Content Header (Page header) -->
                    <div class="content-header ">
                        <div class="container-fluid">

                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0 text-dark">GENEALOGY TREE</h1>
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
<div class="col-lg-12">
<div class="table-responsive">
<table class="table" align="center" border="0" style="text-align:center">
<tr height="150">
<?php
$data = tree_data($search);
?>
<td><?php echo $data['leftcount'] ?></td>
<td colspan="6"><i class="fa fa-user fa-4x" style="color:#1430B1"></i><p><?php echo $search; ?></p></td>
<td><?php echo $data['rightcount'] ?></td>
</tr>
<tr height="150">
<?php
$first_left_user = $data['left'];
$first_right_user = $data['right'];
?>
<?php 
if($first_left_user!=""){
?>
<td colspan="4"><a href="tree.php?search-id=<?php echo $first_left_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_left_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="5"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_left_user ?></p></td>
<?php
}
?>
<?php 
if($first_right_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $first_right_user ?>"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_right_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#D520BE"></i><p><?php echo $first_right_user ?></p></td>
<?php
}
?>
</tr>
<tr height="150">
<?php 
$data_first_left_user = tree_data($first_left_user);
$second_left_user = $data_first_left_user['left'];
$second_right_user = $data_first_left_user['right'];

$data_first_right_user = tree_data($first_right_user);
$third_left_user = $data_first_right_user['left'];
$third_right_user = $data_first_right_user['right'];



?>
<?php 
 if($second_left_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $second_left_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_left_user ?></p></a></td>
<?php 
 }
 else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
 if($second_right_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $second_right_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $second_right_user ?></p></a></td>
<?php 
 }
 else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($third_left_user!=""){
?>
<td colspan="2"><a href="tree.php?search-id=<?php echo $third_left_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_left_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
<?php 
if($third_right_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $third_right_user ?>"><i class="fa fa-user fa-4x" style="color:#361515"></i><p><?php echo $third_right_user ?></p></a></td>
<?php 
}
else{
?>
<td colspan="2"><i class="fa fa-user fa-4x" style="color:#361515"></i></td>
<?php
}
?>
</tr>

<!-- TESTING 3RD LEVEL DOWNLINES -->

<tr height="150">
<?php
$data_second_left_user = tree_data($third_left_user);
$fourth_left_user = $data_second_left_user['left'];
$fourth_right_user = $data_second_left_user['right'];

$data_second_right_user = tree_data($third_right_user);
$fifth_left_user = $data_second_right_user['left'];
$fifth_right_user = $data_second_right_user['right'];



?>
<?php 
 if($fourth_left_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_left_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $fourth_left_user ?></p></a></td>
<?php 
 }
 else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>
<!--  -->
<?php 
 if($fourth_right_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fourth_right_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $fourth_right_user ?></p></a></td>
<?php 
 }
 else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>

<!--  -->
<?php 
 if($fifth_left_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_left_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $fifth_left_user ?></p></a></td>
<?php 
 }
 else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>
<!--  -->
<?php 
 if($fifth_right_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $fifth_right_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $fifth_right_user ?></p></a></td>
<?php 
 }
 else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>

<!-- TESTING 4TH LEVEL DOWNLINES -->
<?php

$data_third_left_user = tree_data($third_left_user);
$sixth_left_user  =  $data_third_left_user['left'];
$sixth_right_user =  $data_third_left_user['right'];

$data_third_right_user = tree_data($third_right_user);
$seventh_left_user = $data_third_right_user['left'];
$seventh_right_user = $data_third_right_user['right'];
?>
<?php 
 if($sixth_left_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_left_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $sixth_left_user ?></p></a></td>
<?php 
 }
 else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>
<!--  -->
<?php 
 if($sixth_right_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $sixth_right_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $sixth_right_user ?></p></a></td>
<?php 
 }
 else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>
<?php 
if($seventh_left_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_left_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $seventh_left_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>
<?php 
if($seventh_right_user!=""){
?>
<td><a href="tree.php?search-id=<?php echo $seventh_right_user ?>"><i class="fa fa-user fa-4x" style="color:#455224"></i><p><?php echo $seventh_right_user ?></p></a></td>
<?php 
}
else{
?>
<td><i class="fa fa-user fa-4x" style="color:#455224"></i></td>
<?php
}
?>
</tr>



<!-- END OF THRID LEVEL DOWNLINES -->
</table>
</div>
</div>
</div>



                            <!-- /.row -->
                            <!-- Main row -->

                            <!-- /.row (main row) -->
                        </div><!-- /.container-fluid -->
                        <script type="text/javascript" src="/js/jquery.countdown.min.js"></script>
                    </section>
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