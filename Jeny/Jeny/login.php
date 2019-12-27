<?php  

session_start();


if(isset($_SESSION['adminname'])){

  header("location:admin.php");
}



$conn = new mysqli("localhost","root","","jenyshop");

	$msg = "";

	if(isset($_POST['login'])){

		$email = $_POST['email'] ;
		$password = $_POST['pass'] ;
		


		$q = "select * from customer WHERE c_email='$email' AND c_password = '$password'";

 		$result = mysqli_query($conn,$q);

 		$row = mysqli_fetch_array($result);

 		

 		if($result->num_rows==1)
 		{
			$_SESSION['username'] = $row['c_name'];
			$_SESSION['c_id']=$row['c_id'];
 			header("location:index.php");
 		}

 		else {

 				$msg = "Error ! Check yout details";

 			 }
	
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-image: url(wal.jpg);">
	
	<div class="limiter" >
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="<?= $_SERVER['PHP_SELF']?>" method="POST">
					
		<a href="index.php">Back</a>
					<span class="login100-form-title p-b-32">
						Customer Login
					</span>

					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-36 form-group" data-validate = "Username is required">
						<input class="input100 " type="text" name="email" required >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12 form-group" data-validate = "Password is required">
				
						<input class="input100 " type="password" name="pass"  required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							
						</div>

						<div>
							<a href="adminlogin.php" class="txt3">
								Admin Login
							</a>
						</div>
					</div>

					
						<div class="form-group">
						<input type="submit" name="login" value="Submit" class="login100-form-btn">
					
					
					</div>
					<div>

					<h5><?=$msg;
					echo "<a href='register.php' class='login100-form-btn'>Register</a>";?></h5>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>