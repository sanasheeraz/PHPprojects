<?php  


$conn = new mysqli("localhost","root","","jenyshop");

  $msg = "";

$update = false;

    $myid = "";
    $myname = "";
    $mydes = "";
    $myimage = "";
    $myprice = "";
    $mycategory = "";
    $mytype = "";
    $mykeywords = "";


  $sql="SELECT * FROM `category`";
$result=mysqli_query($conn,$sql);



  $sql5="SELECT * FROM `product_type`";
$result5=mysqli_query($conn,$sql5);

$image;




    if(isset($_POST['close'])){
      header('location:addproduct.php');
    }



//insert data
if(isset($_POST['add']))
{
   
     $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    $name=$_POST['name'];
    $desc=$_POST['description'];
    $price=$_POST['price'];
    $category=$_POST['category'];
    $type=$_POST['type'];
    $keywords=$_POST['keywords']; 


    $query="INSERT INTO `products`(`pro_name`, `pro_des`, `pro_price`, `cat_id`, `pro_image` ,`pro_type`,'keywords') VALUES ('$name' , '$desc','$price','$category', '$image', '$type' , $keywords )";

    $q = "INSERT INTO products(pro_name, pro_des, pro_price, cat_id, pro_image ,pro_type,keywords) VALUES ('$name' , '$desc','$price','$category', '$image', '$type' , '$keywords')";

    $result = mysqli_query($conn,$q);

    if($result){

      $msg = " Category added successfully! ";



    }
    header('location:addproduct.php');
    

    


}


if(isset($_POST['up'])){

    $id=$_POST['id'];

 
   $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    $name=$_POST['name'];
    $desc=$_POST['description'];
    $price=$_POST['price'];
    $category=$_POST['category'];
    $type=$_POST['type'];
    $keywords=$_POST['keywords'];

  if($image == ""){

    $q = " update products set  pro_name='$name' , pro_des='$desc' , pro_price='$price' , cat_id='$category' ,keywords='$keywords' , pro_type='$type'  where pro_id=$id ";

 $query = mysqli_query($conn,$q);
 if($query){


 header('location:addproduct.php');
 

}

  }
  else{

 $q = " update products set  pro_name='$name' , pro_des='$desc' , pro_price='$price' , cat_id='$category' , keywords='$keywords' , pro_type='$type' , pro_image = '$image' where pro_id=$id ";

 $query = mysqli_query($conn,$q);
 if($query){


 header('location:addproduct.php');
 

}

}


}





if(isset($_GET['delete'])){
$id = $_GET['delete'];

$query = " DELETE FROM `products` WHERE pro_id = $id ";

mysqli_query($conn, $query);

header('location:addproduct.php');
  
}



if(isset($_GET['edit'])){


  $id=$_GET['edit'];

  $result1 = $conn->query("select * from products WHERE pro_id = $id ") or die($conn->error());
  if($result1 && count($result1)==1){

    $row1 = $result1->fetch_array();

    $myid = $row1['pro_id'];
    $myname = $row1['pro_name'];
    $mydes = $row1['pro_des'];
    $myimage = $row1['pro_image'];
    $myprice = $row1['pro_price'];
    $mycategory = $row1['cat_id'];
    $mytype = $row1['pro_type'];
    $mykeywords = $row1['keywords'];
  

    $update=true;
    
  }

}

 



?>