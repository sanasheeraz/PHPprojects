<?php  


$conn = new mysqli("localhost","root","","jenyshop");

  $msg = "";

  if(isset($_POST['add'])){

    $catname = $_POST['name'] ;

      $image = $_FILES['image']['name'];
    $target = "images/".basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    


    $q = "INSERT INTO category(cat_name,cat_image) VALUES ('$catname','$image')";

    $result = mysqli_query($conn,$q);

    if($result){

      $msg = " Category added successfully! ";



    }
    header('location:addcategory.php');
    

    

}

$update = false;

    $catid="";
    $catname="";
    $myimage="";

    

    





    if(isset($_POST['close'])){
      header('location:addcategory.php');
    }

    if(isset($_POST['close2'])){
      header('location:admin.php');
    }


if(isset($_POST['up'])){

 
  $catid=$_POST['id'];
  $catname=$_POST['name'];
  $image = $_FILES['image']['name'];
    $target = ".images/".basename($image);
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }

  
  
   if($image == ""){

    $q = " update category set  cat_name='$catname'  where cat_id=$catid  ";

 $query = mysqli_query($conn,$q);
 if($query){


 header('location:addcategory.php');
 

}

  }
  else{

 $q = " update category set  cat_name='$catname' , cat_image='$image' where cat_id=$catid " ;

 $query = mysqli_query($conn,$q);
 if($query){


 header('location:addcategory.php');
 

}

}


}



if(isset($_GET['delete'])){
$id = $_GET['delete'];

$query = " DELETE FROM category WHERE cat_id = $id ";

mysqli_query($conn, $query);

header('location:addcategory.php');
  
}


if(isset($_GET['edit'])){


  $id=$_GET['edit'];

  $result = $conn->query("select * from category WHERE cat_id = $id ") or die($conn->error());
  if(count($result)==1){

    $row = $result->fetch_array();

    $catid = $row['cat_id'];
    $catname = $row['cat_name'];
    $myimage = $row['cat_image'];


    $update=true;
    
  }

}




?>