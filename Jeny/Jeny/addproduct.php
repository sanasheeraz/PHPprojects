<?php  


 include("header2.php");
 include("action_pro.php");
 ?>

<H6 style="margin-left: 7%; margin-top: 3%;">Admin / Product /</H6>
<h6><a href="admin.php"  style="float: right; margin-right: 5%; text-decoration: none; color: black;"><i class="fa fa-times fa-lg"></i></a></h6>


<div style="margin-top: 8%; margin-left: 27%;">

  <h2><?php echo $msg; ?></h2>

	<!-- <h1 style="margin-left: 20%; color:#333333;">Add Admin</h1> -->
		<?php if($update == true){ ?> <h1 style="margin-left: 18%; color:#333333;">Update Product</h1><?php } else{ ?>
			<h1 style="margin-left: 18%; color:#333333;">Add Product</h1> <?php } ?>

	


<form action="action_pro.php" method="POST" enctype="multipart/form-data" >

				
<div class="inputWithIcon">
	<input type="hidden" name="id"  value="<?php echo $myid;?>">

<input type="text" name="name" value="<?php echo $myname;?>" placeholder="&nbsp;&nbsp;Enter product name" maxlength="20"required>
  <i class="fa fa-briefcase fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">
	
	<input type="text" name="description" value="<?php echo $mydes;?>" placeholder="&nbsp;&nbsp;Enter description " required>
	<i class="fa fa-ioxhost fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">
	
	<input type="text" name="price" value="<?php echo $myprice;?>" placeholder="&nbsp;&nbsp;Enter price " required>
	<i class="fa fa-credit-card fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">
  
  <input type="text" name="keywords" value="<?php echo $mykeywords;?>" placeholder="&nbsp;&nbsp;Enter Keywords " required>
  <i class="fa fa-search fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">


		<label style="color: grey; padding:5px;margin-top:5px;">Category : </label>
                        <select name="category">
                          <?php if($update == false){ ?> <option style="padding: 20px; margin: 5px;">Select</option> <?php }  ?>
      
                            
                            <?php
                              while ($row = mysqli_fetch_array($result,MYSQLI_NUM)) {
                                if($update==true){
                                  if($row["0"] == $mycategory)
                                    echo "<option value=".$row["0"]." selected>".$row["1"]."</option>";
                                  else
                                echo "<option value=".$row["0"].">".$row["1"]."</option>";
                                }
                                else
                                echo "<option value=".$row["0"].">".$row["1"]."</option>";
                            }
                            ?>
                        </select><br><br>
</div>

<div class="inputWithIcon ">


    <label style="color: grey; padding:5px;margin-top:-5px;"> Pro Type : </label>
                        <select name="type">
                          <?php if($update == false){ ?> <option style="padding: 20px; margin: 5px;">Select</option> <?php }  ?>
      
                            
                            <?php
                              while ($row5 = mysqli_fetch_array($result5,MYSQLI_NUM)) {
                                if($update==true){
                                  if($row5["0"] == $mytype)
                                    echo "<option value=".$row5["0"]." selected>".$row5["1"]."</option>";
                                  else
                                echo "<option value=".$row5["0"].">".$row5["1"]."</option>";
                                }
                                else
                                echo "<option value=".$row5["0"].">".$row5["1"]."</option>";
                            }
                            ?>
                        </select><br><br>
</div>


<div class="inputWithIcon ">

	
	<input type="file" name="image" >
	
<?php if($update == true){ ?>
	<br><br>

<img src="images/<?php echo $myimage;  ?>" height="80px;" width="100px;" style="margin: 0px 5px 5px 5px;">

             
<?php
     }
 ?>


	
</div>




<div class="form-group btn_class">





<?php if($update == true ){?>
		<input type="submit" name="up" class="btn  btn-block " value="Update" >
		
	<?php } else {?>
	<input type="submit" name="add" class="btn  btn-block" value="Add" >
	<!-- <input type="submit" name="close2" class="btn  btn-block" value="Close" > -->


<?php } ?>



</div>


 </form>


<?php if($update == true ){?>
		<a href="addproduct.php" style="text-decoration: none"><input type="submit" name="close" class="btn  btn-block " value="Close" ></a>
		
	<?php } ?>
 


 




 </div>
  

<?php 

  include("footer2.php");

?>

<div class="mt-5">


 
      
      <table class="table  table-stripped tbl">
    <thead>
      <tr>
        <th>#</th>
        
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Category</th>
        <th>Type</th>

        <th>Image</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
            <?php

 $query = "select * from products ";

 $result = mysqli_query($conn,$query);

 while($res = mysqli_fetch_array($result)){
 ?>
      <tr>
        <td><?php echo $res['pro_id'];  ?></td>
        
        <td><?php echo $res['pro_name'];  ?></td>
        <td><?php echo $res['pro_des'];  ?></td>
        <td><?php echo $res['pro_price'];  ?></td>
                   <?php $i=$res['cat_id'];
              $q1="SELECT * from category where cat_id='$i'";
              $r1=mysqli_query($conn,$q1);
              $r2=mysqli_fetch_row($r1);
            ?>
        <td><?php echo $r2['1'] ; ?></td>

                    <?php $i=$res['pro_type'];
              $q2="SELECT * from product_type where id='$i'";
              $r3=mysqli_query($conn,$q2);
              $r4=mysqli_fetch_row($r3);
            ?>
        <td><?php echo $r4['1'] ;  ?></td>
        <td><img src="images/<?php echo $res['pro_image'];  ?>" height="50px;" width="50px;"></td>
      
         <td>
     

     <a href="addproduct.php?edit=<?php echo $res['pro_id']; ?>" class="p-2"  style="text-decoration: none; color: black;"><i class="fa fa-edit"></i></a>

  <a href="addproduct.php?delete=<?php echo $res['pro_id']; ?>" class="p-2"  onClick="return confirm('Do you want to delete this Product ? ')" style="text-decoration: none; color: black;"><i class="fa fa-trash" style="color: black;"></i></a>
     
 </td>


 
      </tr>
      
   
     <?php 
 
 }
 ?>





  </table>
  </div>
