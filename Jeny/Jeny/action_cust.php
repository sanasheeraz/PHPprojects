<?php  


$conn = new mysqli("localhost","root","","jenyshop");

  $msg = "";

  if(isset($_POST['add'])){

    $username = $_POST['name'] ;
    $password = $_POST['password'] ;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    


    $q = "INSERT INTO customer(c_name,c_email,c_password,c_phone,c_address) VALUES ('$username','$email','$password','$phone','$address')";

    $result = mysqli_query($conn,$q);

    if($result){

      $msg = " Customer added Succesfull ! ";


header('location:addcustomer.php');
    }
    else{
      $msg = "Error ! Check yout details";
      header('location:addcustomer.php');

      
    }
    
    

    

}

$update = false;

    $myid="";
    $myusername="";
    $myemail = "";
    $mypassword="";
    $myphone="";
    $myaddress="";
    

    





    if(isset($_POST['close'])){
      header('location:addcustomer.php');
    }

    if(isset($_POST['close2'])){
      header('location:admin.php');
    }


if(isset($_POST['up'])){

 
  $id=$_POST['id'];
  $username=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  
  

  
 $q = " update customer set  c_name='$username' , c_email='$email' , c_password='$password' , c_phone='$phone',c_address='$address' where c_id=$id ";

 $query = mysqli_query($conn,$q);
 if($query){


 header('location:addcustomer.php');
 

}
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




if(isset($_GET['delete'])){
$id = $_GET['delete'];

$query = "DELETE FROM `customer` WHERE c_id=$id";

mysqli_query($conn,$query);

header('location:addcustomer.php');
  
}



if(isset($_GET['edit'])){


  $id=$_GET['edit'];

  $result = $conn->query("select * from customer WHERE c_id = $id ") or die($conn->error());
  if(count($result)==1){

    $row = $result->fetch_array();

    $myid = $row['c_id'];
    $myusername = $row['c_name'];
    $myemail = $row['c_email'];
    $mypassword = $row['c_password'];
    $myphone = $row['c_phone'];
    $myaddress = $row['c_address'];
  

    $update=true;
    
  }

}




?>