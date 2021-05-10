<?php
include('php-includes/connect.php');
include('php-includes/check-login.php');
//$userid = $_SESSION['userid'];
$capping = 500;
// $side = mysqli_real_escape_string($con,$_GET['side']);
// $password = "123456";
// $mobile = mysqli_real_escape_string($con,$_GET['mobile']);
// $address = mysqli_real_escape_string($con,$_GET['address']);
// $account = mysqli_real_escape_string($con,$_GET['account']);


if (isset($_POST['Register']) && isset($_POST['pin'])) {
	// echo $_POST['sponsor_id'];

	// die();

	$side='';


	$pin = mysqli_real_escape_string($con, $_POST['pin']);
	$firstName = mysqli_real_escape_string($con, $_POST['fname']);
	$lastName = mysqli_real_escape_string($con, $_POST['lname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$under_userid = mysqli_real_escape_string($con, $_POST['sponsor_id']);
	$userName = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);

	

	$query = mysqli_query($con, "SELECT email FROM `pin_request` WHERE `pin` = '$pin' ");

	if (mysqli_num_rows($query) > 0) {
		$get_userid = mysqli_fetch_array($query);

		$userid = $get_userid['email'];
	}

	


	// Continue from here when you return...... Issue is from here continue from here check SQL Statement
	$get_side =mysqli_query($con, "SELECT side FROM `user` WHERE `under_userid` = '$under_userid' ");
	// echo var_dump($get_side);

	// die();
	


	if (mysqli_num_rows($get_side) == 0) {
          $side = 'left';
		
	 }else{
		
		$side= 'right';
	}

	

	

	


	$flag = 0;

	if ($pin != '' && $email != '' && $firstName != '' && $lastName != '' && $password != ''&& $userName != '' && $under_userid != '') {

		
		//User filled all the fields.
		if (pin_check($pin)) {
			//Pin is ok
			if (email_check($email)) {
				//Email is ok
				if (!email_check($under_userid)) {
					//Under userid is ok
					if (username_check($userName)) {
						//Side check
												
						$flag = 1;
						
					} else {
						echo '<script>alert("The username you selected is already available.");</script>';
					}
				} else {
					//check under userid
					echo '<script>alert("Invalid Under userid.");</script>';
				}
			} else {
				//check email
				echo '<script>alert("This user id already availble.");</script>';
			}
		} else {
			//check pin
			echo '<script>alert("Invalid pin");</script>';
		}
	} else {
		//check all fields are fill
		echo '<script>alert("Please fill all the fields.");</script>';
	}

	//Now we are heree
	//It means all the information is correct
	//Now we will save all the information
	if ($flag == 1) {

		//Insert into User profile
		$query = mysqli_query($con, "insert into user(`email`,`password`,`firstName`,`lastName`,`userName`,`under_userid`,`side` ,`mobile`,`address`,`account`) values('$email','$password','$firstName','$lastName','$userName','$under_userid','$side','','','')");

            // if($query){
			// 	echo 'Success';
			// }else{
			// 	echo 'Failed';
			// }
			// die();

		//Insert into Tree
		//So that later on we can view tree.
		$query = mysqli_query($con, "insert into tree(`userid`) values('$email')");

		//Insert to side
		$query = mysqli_query($con, "update tree set `$side`='$email' where userid='$under_userid'");

		//Update pin status to close
		$query = mysqli_query($con, "update pin_request set status='close' where pin='$pin'");

		//Inset into Icome
		$query = mysqli_query($con, "insert into income (`userid`) values('$email')");
		echo mysqli_error($con);
		//This is the main part to join a user\
		//If you will do any mistake here. Then the site will not work.

		//Update count and Income.
		$temp_under_userid = $under_userid;
		$temp_side_count = $side . 'count'; //leftcount or rightcount

		$temp_side = $side;
		$total_count = 1;
		$i = 1;
		while ($total_count > 0) {
			$i;
			$q = mysqli_query($con, "select * from tree where userid='$temp_under_userid'");
			$r = mysqli_fetch_array($q);
			$current_temp_side_count = $r[$temp_side_count] + 1;
			$temp_under_userid;
			$temp_side_count;
			mysqli_query($con, "update tree set `$temp_side_count`=$current_temp_side_count where userid='$temp_under_userid'");

			//income
			if ($temp_under_userid != "") {
				$income_data = income($temp_under_userid);
				//check capping
				//$income_data['day_bal'];
				if ($income_data['day_bal'] < $capping) {
					$tree_data = tree($temp_under_userid);

					//check leftplusright
					//$tree_data['leftcount'];
					//$tree_data['rightcount'];
					//$leftplusright;

					$temp_left_count = $tree_data['leftcount'];
					$temp_right_count = $tree_data['rightcount'];
					//Both left and right side should at least 1 user
					if ($temp_left_count > 0 && $temp_right_count > 0) {
						if ($temp_side == 'left') {
							$temp_left_count;
							$temp_right_count;
							if ($temp_left_count <= $temp_right_count) {

								$new_day_bal = $income_data['day_bal'] + 100;
								$new_current_bal = $income_data['current_bal'] + 100;
								$new_total_bal = $income_data['total_bal'] + 100;

								//update income
								mysqli_query($con, "update income set day_bal='$new_day_bal', current_bal='$new_current_bal', total_bal='$new_total_bal' where userid='$temp_under_userid' limit 1");
							}
						} else {
							if ($temp_right_count <= $temp_left_count) {

								$new_day_bal = $income_data['day_bal'] + 100;
								$new_current_bal = $income_data['current_bal'] + 100;
								$new_total_bal = $income_data['total_bal'] + 100;
								$temp_under_userid;
								//update income
								if (mysqli_query($con, "update income set day_bal='$new_day_bal', current_bal='$new_current_bal', total_bal='$new_total_bal' where userid='$temp_under_userid'")) {
								}
							}
						}
					} //Both left and right side should at least 1 user

				}
				//change under_userid
				$next_under_userid = getUnderId($temp_under_userid);
				$temp_side = getUnderIdPlace($temp_under_userid);
				$temp_side_count = $temp_side . 'count';
				$temp_under_userid = $next_under_userid;

				$i++;
			}

			//Chaeck for the last user
			if ($temp_under_userid == "") {
				$total_count = 0;
			}
		} //Loop




		echo mysqli_error($con);

		echo '<script>alert("Testing success.");</script>';
		header("Location: login.php");
	}
  








}
























//Declaration and Assignment of functions
function pin_check($pin)
{
	global $con, $userid;

	$query = mysqli_query($con, "select * from pin_request where pin='$pin' and status='open'");
	if (mysqli_num_rows($query) > 0) {
		return true;
	} else {
		return false;
	}
}
function email_check($email)
{
	global $con;

	$query = mysqli_query($con, "select * from user where email='$email'");
	if (mysqli_num_rows($query) > 0) {
		return false;
	} else {
		return true;
	}
}

function username_check($userName)
{
	global $con;

	$query = mysqli_query($con, "select * from user where userName='$userName'");
	if (mysqli_num_rows($query) > 0) {
		return false;
	} else {
		return true;
	}
}
// function side_check($email, $side)
// {
// 	global $con;

// 	$query = mysqli_query($con, "select * from tree where userid='$email'");
// 	$result = mysqli_fetch_array($query);
// 	$side_value = $result[$side];
// 	if ($side_value == '') {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }
function income($userid)
{
	global $con;
	$data = array();
	$query = mysqli_query($con, "select * from income where userid='$userid'");
	$result = mysqli_fetch_array($query);
	$data['day_bal'] = $result['day_bal'];
	$data['current_bal'] = $result['current_bal'];
	$data['total_bal'] = $result['total_bal'];

	return $data;
}
function tree($userid)
{
	global $con;
	$data = array();
	$query = mysqli_query($con, "select * from tree where userid='$userid'");
	$result = mysqli_fetch_array($query);
	$data['left'] = $result['left'];
	$data['right'] = $result['right'];
	$data['leftcount'] = $result['leftcount'];
	$data['rightcount'] = $result['rightcount'];

	return $data;
}
function getUnderId($userid)
{
	global $con;
	$query = mysqli_query($con, "select * from user where email='$userid'");
	$result = mysqli_fetch_array($query);
	return $result['under_userid'];
}
function getUnderIdPlace($userid)
{
	global $con;
	$query = mysqli_query($con, "select * from user where email='$userid'");
	$result = mysqli_fetch_array($query);
	return $result['side'];
}

?>