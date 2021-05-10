 <?php
     session_start();
     require('php-includes/connect.php');

     ?>





 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
      <meta charset="utf-8">
      <title>register form</title>
      <link rel="stylesheet" type="text/css" href="css/style2.css">
 </head>

 <body>
      <div class="reg_form">
           <h1>Registration<img src="img/logo2.jpg" alt="my logo">
           </h1>
           <form method="post" action="process_register.php">
                <div class="reg_txt_field">
                     <input type="text" name="fname" required>
                     <span></span>
                     <label>First name</label>
                </div>
                <div class="reg_txt_field">
                     <input type="text" name="lname" required>
                     <span></span>
                     <label>Last name</label>
                </div>
                <div class="reg_txt_field">
                     <input type="text" name="email" required>
                     <span></span>
                     <label>Email</label>
                </div>
                <?php
                    if (isset($_GET['pin'])) {

                         $pin = mysqli_real_escape_string($con, $_GET['pin']);
                         $result = mysqli_query($con, "SELECT email FROM `pin_request` WHERE `pin` = '$pin' ");

                         if (mysqli_num_rows($result) > 0) {
                              $row = mysqli_fetch_array($result);

                    ?>


                          <div class="reg_txt_field">
                               <input type="text" name="sponsor_id" <?php if ($row) { echo 'readonly="readonly"';  } ?> value="<?php echo $row['email'] ?>">
                               <span></span>
                               

                          </div>


                <?php  }
                    } ?>

                <?php
                    if (isset($_GET['pin'])) {

                         $pin = mysqli_real_escape_string($con, $_GET['pin']);
                    ?>


                     <input type="hidden" name="pin" value="<?php echo $pin; ?>">
                     <span></span>

                <?php
                    } ?>


                <div class="reg_txt_field">
                     <input type="text" name="username" required>
                     <span></span>
                     <label>Username</label>
                </div>
                <div class="reg_txt_field">
                     <input type="password" name="password" required>
                     <span></span>
                     <label>Password</label>
                </div>


                <!-- <input type="hidden" name="side" value="left">
                     <span></span> -->

                <!-- <div class="reg_pass">Forget Password?</div> -->
                <input type="submit" value="Register" name="Register">
                <div class="reg_link">
                     Already a member? <a href="#">Login!</a>
                </div>
           </form>
      </div>
 </body>

 </html>