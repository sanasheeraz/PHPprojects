<?php  

session_start();

$conn = new mysqli("localhost","root","","jenyshop");

	$msg = "";

	if(isset($_POST['add_cust'])){

		$username = $_POST['username'] ;
		$password = $_POST['password'] ;
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		


		$q = "INSERT INTO customer(c_name,c_email,c_password,c_phone,c_address) VALUES ('$username','$email','$password','$phone','$address')";

 		$result = mysqli_query($conn,$q);

 		if($result){

 			$msg = " Registration Succesfull ! Now you can log in . ";
 		}
 		else{

 			$msg = " Registration Failed !  ";
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
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="<?= $_SERVER['PHP_SELF']?>" method="POST">
					<span class="login100-form-title p-b-32">
						Customer Registration
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-12 form-group">
						<input class="input100 form-control" type="text" name="username" required >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Email
					</span>
					<div class="wrap-input100 validate-input m-b-12 form-group" >
						<input class="input100 form-control" type="text" name="email" required >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12 form-group" data-validate = "Password is required">
				
						<input class="input100 form-control" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Phone
					</span>
					<div class="wrap-input100 validate-input m-b-36 form-group" >
						<input class="input100 form-control" type="text" name="phone"  required>
						<span class="focus-input100"></span>
					</div>
						<span class="txt1 p-b-11">
						Address
					</span>
					<div class="wrap-input100 validate-input m-b-36 form-group" >
						<input class="input100 form-control" type="text" name="address" required>
						<span class="focus-input100"></span>
					</div>
					
			

					
						<div class="form-group">
						<input type="submit" name="add_cust" value="Submit" class="login100-form-btn">
					
					
						</div>
					
					<h5><?php echo $msg ;
					echo "<a href='login.php' class='login100-form-btn'>Login</a>";
					?></h5>

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