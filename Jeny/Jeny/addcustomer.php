<?php include 'header2.php';
 include 'action_cust.php';
 ?>



<H6 style="margin-left: 7%; margin-top: 3%;">Admin / Customer /</H6>
<h6><a href="admin.php"  style="float: right; margin-right: 5%; text-decoration: none; color: black;"><i class="fa fa-times fa-lg"></i></a></h6>


<div style="margin-top: 8%; margin-left: 27%;">

	<!-- <h1 style="margin-left: 20%; color:#333333;">Add Admin</h1> -->

	
			<?php if($update == true){ ?> <h1 style="margin-left: 12%; color:#333333;">UPDATE CUSTOMER</h1> <?php } else{ ?>
			<h1 style="margin-left: 13%; color:#333333;">ADD CUSTOMER</h1> <?php } echo $msg; ?>


<form action="action_cust.php" method="POST" >

				
<div class="inputWithIcon">
	<input type="hidden" name="id" value="<?php echo $myid; ?>">

<input type="text" name="name" value="<?php echo $myusername; ?>" placeholder="&nbsp;&nbsp;Type username" required>
  <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">
	
	<input type="text" name="email" value="<?php echo $myemail; ?>" placeholder="&nbsp;&nbsp;Type email " required>
	<i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">
	
	<input type="password" name="password" value="<?php echo $mypassword; ?>" placeholder="&nbsp;&nbsp;Type password " required>
	<i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">
	
	<input type="text" name="phone" value="<?php echo $myphone; ?>" placeholder="&nbsp;&nbsp;Type phone  " required>
	<i class="fa fa-phone fa-lg fa-fw" aria-hidden="true"></i>
</div>
<div class="inputWithIcon ">
	
	<input type="text" name="address" value="<?php echo $myaddress; ?>" placeholder="&nbsp;&nbsp;Type Address " required>
	<i class="fa fa-address-book-o fa-lg fa-fw" aria-hidden="true"></i>
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
        
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Phone</th>
        <th>Address</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    			 	<?php

 $query = "select * from customer ";

 $result = mysqli_query($conn,$query);

 while($res = mysqli_fetch_array($result)){
 ?>
      <tr>
        <td><?php echo $res['c_id'];  ?></td>
        
        <td><?php echo $res['c_name'];  ?></td>
        <td><?php echo $res['c_email'];  ?></td>
        <td><?php echo $res['c_password'];  ?></td>
        <td><?php echo $res['c_phone'];  ?></td>
        <td><?php echo $res['c_address'];  ?></td>
      
         <td>
     

     <a href="addcustomer.php?edit=<?php echo $res['c_id']; ?>" class="p-2"  style="text-decoration: none; color: black;"><i class="fa fa-edit"></i></a>

 	<a href="addcustomer.php?delete=<?php echo $res['c_id']; ?>" class="p-2"   onClick="return confirm('Do you want to delete this Customer? ')"style="text-decoration: none; color: black;"><i class="fa fa-trash" style="color: black;"></i></a>
     
 </td>


 
      </tr>
      
   
     <?php 
 
 }
 ?>





  </table>
	</div>

 <?php include 'footer2.php'; ?>