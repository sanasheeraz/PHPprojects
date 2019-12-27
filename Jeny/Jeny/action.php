<?php  


$conn = new mysqli("localhost","root","","jenyshop");

  $msg = "";

  if(isset($_POST['add'])){

    $username = $_POST['name'] ;
    $password = $_POST['password'] ;
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    


    $q = "INSERT INTO admin(a_name,a_email,a_password,a_phone) VALUES ('$username','$email','$password','$phone')";

    $result = mysqli_query($conn,$q);

    if($result){

      $msg = " Registration Succesfull ! Now you can log in . ";



    }
    header('location:addadmin.php');
    

    

}

$update = false;

    $myid="";
    $myusername="";
    $myemail = "";
    $mypassword="";
    $myphone="";
    

    





    if(isset($_POST['close'])){
      header('location:addadmin.php');
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
  
  

  
 $q = " update admin set  a_name='$username' , a_email='$email' , a_password='$password' , a_phone='$phone' where a_id=$id ";

 $query = mysqli_query($conn,$q);
 if($query){


 header('location:addadmin.php');
 

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

$query = " DELETE FROM admin WHERE a_id = $id ";

mysqli_query($conn, $query);

header('location:addadmin.php');
  
}


if(isset($_GET['edit'])){


  $id=$_GET['edit'];

  $result = $conn->query("select * from admin WHERE a_id = $id ") or die($conn->error());
  if(count($result)==1){

    $row = $result->fetch_array();

    $myid = $row['a_id'];
    $myusername = $row['a_name'];
    $myemail = $row['a_email'];
    $mypassword = $row['a_password'];
    $myphone = $row['a_phone'];
  

    $update=true;
    
  }

}




?>