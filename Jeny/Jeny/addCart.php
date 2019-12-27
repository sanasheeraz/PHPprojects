<?php
session_start();
if(isset($_SESSION['username']))
{
	if(!in_array($_GET['id'],$_SESSION['cart']))
	{
		array_push($_SESSION['cart'], $_GET['id']);
		$_SESSION['message']='Product added to the cart';

		header('location:shop.php');

	}
	else
	{
		$_SESSION['message']='Product already in cart';
		header('location:shop.php');
	}
}else{

	header("location:login.php");
}

?>