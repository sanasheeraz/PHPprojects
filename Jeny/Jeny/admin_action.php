<?php  


$conn = new mysqli("localhost","root","","jenyshop");



  $msg = "";

 

$update = true;

    $myid="";
    $myusername="";
    $myemail = "";
    $mypassword="";
    $myphone="";
    $myaddress="";
    

    





    if(isset($_POST['close'])){
      header('location:admin_orders.php');
    }

    if(isset($_POST['close2'])){
      header('location:admin.php');
    }





// if(isset($_POST['add'])){
//  $username=$_POST['name'];
//  $email=$_POST['email'];
//  $password=$_POST['password'];
//  $phone=$_POST['phone'];
  
  
  

//  $query="INSERT INTO admin(a_name,a_email,a_password,a_phone) VALUES ('$username','$email',$password','$phone')";

//   $result = mysqli_query($conn,$query);

//   if($result){

   
//   header('location:admin.php');

   

//   }
//   else{

//    header('location:dino.php');

     
//   }
// }









?>