<?php
require('php-includes/connect.php');
include('php-includes/check-login.php');
$email = $_SESSION['userid'];
?>
<?php
//pin request 
if (isset($_GET['generate_pin'])) {
    //$amount = mysqli_real_escape_string($con,$_GET['amount']);
    $pin = pin_generate();
    $date = date("y-m-d");


    if ($pin != '') {
        //Inset the value to pin request
        $query = mysqli_query($con, "insert into pin_request(`email`,`pin`,`date`) values('$email','$pin','$date')");
        if ($query) {
            echo '<script>alert("Pin request sent successfully");window.location.assign("referrallink.php");</script>';
        } else {
            //echo mysqli_error($con);
            echo '<script>alert("Unknown error occure.");window.location.assign("referrallink.php");</script>';
        }
    } else {
        echo '<script>alert("Please fill all the fields");</script>';
    }
}


//Generate Link Function/////

function pin_generate()
{
    global $con;
    $email = $_SESSION['userid'];
    $generated_pin = rand(100000, 999999);

    // $query = mysqli_query($con, "select * from pin_list where pin = '$generated_pin' and email= '$email'");
    $query = mysqli_query($con, "select * from pin_request where pin = '$generated_pin' and email= '$email'");

    if (mysqli_num_rows($query) > 0) {
        //pin_generate();
        echo '<script>alert("Link Already Generated");</script>';
    } else {
        return $generated_pin;
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
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1> Referral Link</h1>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="/customer/users/dashboard">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Referral Link </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card card-primary card-outline">
                                        <div class="card-header bg-info">
                                            <h3 class="card-title text-white"> Referral Link</h3>


                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0">
                                            <div class="card-body">
                                                <div class="callout callout-info">
                                                    <h5>Hi, I am a beneficiary of PERCUNIA FACTOREM. It has been a great experience. </h5>


                                                    <p> Together we can change the world. One start-off donation of N10,000 NAIRA activates the opportunity of changing your life and that of others forever. Share this opportunity with the people that matter most to you &amp; those in need of financial breakthrough. Never forget that we rise up by lifting up others.</p>
                                                    <h2>"WE BUILD TOGETHER"</h2>

                                                    <!-- START -->

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <br><br>
                                                            <table class="table table-bordered table-striped">
                                                                <tr>
                                                                    <th>S.n.</th>
                                                                    <th>Referal Link</th>

                                                                </tr>
                                                                <?php

                                                                $i = 1;
                                                                $query = mysqli_query($con, "select * from pin_request where email='$email' order by id desc Limit 1");
                                                                if (mysqli_num_rows($query) > 0) {
                                                                    while ($row = mysqli_fetch_array($query)) {
                                                                        $pin = $row['pin'];
                                                                        $date = $row['date'];
                                                                        $status = $row['status'];
                                                                ?>
                                                                        <tr>
                                                                            <td>
                                                                                <form method="get">

                                                                                    <div class="form-group">
                                                                                        <input type="submit" name="generate_pin" class="btn btn-info" value="Generate Link">
                                                                                    </div>
                                                                                </form>
                                                                            </td>
                                                                            <td><a href="register.php?pin=<?php echo $row['pin'];
                                                                                                        ?>" target="_blank">register.php?pin=<?php echo $row['pin'];
                                                                                                                                        ?></a></td>

                                                                        </tr>
                                                                    <?php
                                                                        $i++;
                                                                    }
                                                                } else {
                                                                    ?>
                                                                    <tr>
                                                                        <td>
                                                                            <form method="get">

                                                                                <div class="form-group">
                                                                                    <input type="submit" name="generate_pin" class="btn btn-info" value="Generate Link">
                                                                                </div>
                                                                            </form>
                                                                        </td>
                                                                        <td colspan="4">You have not generated any link yet.</td>
                                                                    </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </table>
                                                        </div>
                                                    </div>






                                                    <!-- END -->
                                                    <b class="text-primary">Thank You</b>
                                                    <p class="text-primary">HenryTee</p>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </section>
                    <!-- /.content -->
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Your Website 2020</span>
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