<?php include 'header2.php';
 include 'admin_action.php';


 ?>



<H6 style="margin-left: 7%; margin-top: 3%;">User / Orders /</H6>
<h6><a href="admin.php"  style="float: right; margin-right: 5%; text-decoration: none; color: black;"><i class="fa fa-times fa-lg"></i></a></h6>

<div style="margin-top: 5%;">
			<table class="table  table-stripped tbl">
    <thead>
      <tr>
      	
      	 <th>Order ID</th>
        
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Product Total</th>
        <th>Order Total</th>
        
        
        
      </tr>
    </thead>
    <tbody>
    			 	<?php

 $query = "select * from orders inner join invoice on orders.O_Id=invoice.O_Id";

 $result = mysqli_query($conn,$query);

 while($res = mysqli_fetch_array($result)){
 ?>
      <tr>
       
        
        <td><?php echo $res['O_Id'];  ?></td>
        <td><?php echo $res['Pro_Name'];  ?></td>
        <td><?php echo $res['Pro_Quantity'];  ?></td>
        <td><?php echo number_format($res['Pro_PerUnittPrice'],2)  ?></td>
        <td><?php echo number_format($res['Pro_PerUnittPrice']* $res['Pro_Quantity'],2)  ?></td>
        <td><?php echo number_format($res['O_Total_Amount'],2)  ?></td>

     
      </tr>
      
   
     <?php 
 
 }
 ?>





  </table>

</div>



 
		
	


 <?php include 'footer2.php'; ?>

