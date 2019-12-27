<?php include 'header2.php';
 include 'action_cat.php';
 ?>



<H6 style="margin-left: 7%; margin-top: 3%;">Admin / Category /</H6>
<h6><a href="admin.php"  style="float: right; margin-right: 5%; text-decoration: none; color: black;"><i class="fa fa-times fa-lg"></i></a></h6>


<div style="margin-top: 8%; margin-left: 27%;">

	<!-- <h1 style="margin-left: 20%; color:#333333;">Add Admin</h1> -->

	
			<?php if($update == true){ ?> <h1 style="margin-left: 12%; color:#333333;">UPDATE CATEGORY</h1> <?php } else{ ?>
			<h1 style="margin-left: 16%; color:#333333;">ADD CATEGORY</h1> <?php } ?>


<form action="action_cat.php" method="POST" enctype="multipart/form-data" >

				
<div class="inputWithIcon">
	<input type="hidden" name="id" value="<?php echo $catid; ?>">

<input type="text" name="name" value="<?php echo $catname; ?>" placeholder="&nbsp;&nbsp;Type Category" required>
  <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
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

	<!-- <input type="submit" name="add" class="btn  btn-block" value="Add" >
	<input type="submit" name="close" class="btn  btn-block" value="Cancel" > -->


		<?php if($update == true ){?>
		<input type="submit" name="up" class="btn  btn-block " value="Update" >
		<input type="submit" name="close" class="btn  btn-block " value="Close" >
	<?php } else {?>
	<input type="submit" name="add" class="btn  btn-block" value="Add" >
	<!-- <input type="submit" name="close2" class="btn  btn-block" value="Close" > -->


<?php } ?>



</div>


 </form>

<!--  <a href="admin.php" style="text-decoration: none"><input type="submit" name="close" class="btn  btn-block " value="Close" ></a> -->


 




 </div>
  <div class="mt-5">


 
			
			<table class="table  table-stripped tbl">
    <thead>
      <tr>
        <th>#</th>
        
        <th>Category</th>
        <th>Image</th>
  
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    			 	<?php

 $query = "select * from category ";

 $result = mysqli_query($conn,$query);

 while($res = mysqli_fetch_array($result)){
 ?>
      <tr>
        <td><?php echo $res['cat_id'];  ?></td>
        
        <td><?php echo $res['cat_name'];  ?></td>
         <td><img src="images/<?php echo $res['cat_image'];  ?>" height="50px;" width="50px;"></td>

         <td>
     

     <a href="addcategory.php?edit=<?php echo $res['cat_id']; ?>" class="p-2"  style="text-decoration: none; color: black;"><i class="fa fa-edit"></i></a>

 	<a href="addcategory.php?delete=<?php echo $res['cat_id']; ?>" class="p-2"  onclick="return confirm('Do you want to delete this admin ? ') style="text-decoration: none; color: black;"><i class="fa fa-trash" style="color: black;"></i></a>
     
 </td>


 
      </tr>
      
   
     <?php 
 
 }
 ?>





  </table>
	</div>

 <?php include 'footer2.php'; ?>