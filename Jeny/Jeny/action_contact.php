<?php

$conn = new mysqli("localhost","root","","jenyshop");

if(isset($_POST['btnInsert']))
{
   

    $firstname=$_POST['c_fname'];
    $lastname=$_POST['c_lname'];
    $email=$_POST['c_email'];
    $subject=$_POST['c_subject'];
    $message=$_POST['c_message'];
      


    $query="INSERT INTO `contact`(`firstname`, `lastname`, `email`, `subject`, `message`) VALUES ('$firstname' , '$lastname','$email','$subject', '$message' )";

    $result=mysqli_query($conn,$query);


    mysqli_close($conn);

    header("location:contact.php");
}



if(isset($_GET['delete'])){
$id = $_GET['delete'];

$query = " DELETE FROM contact WHERE id = $id ";

mysqli_query($conn, $query);

header('location:viewcontact.php');
  
}



?>