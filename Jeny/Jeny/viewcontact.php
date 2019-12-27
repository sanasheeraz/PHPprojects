<?php  


 include("header2.php");
 include("action_contact.php");
 ?>

<H6 style="margin-left: 7%; margin-top: 3%;">Admin / Contact /</H6>
<h6><a href="admin.php"  style="float: right; margin-right: 5%; text-decoration: none; color: black;"><i class="fa fa-times fa-lg"></i></a></h6>


<div style="margin-top: 8%; ">

  <!-- <h1 style="margin-left: 20%; color:#333333;">Add Admin</h1> -->

      <h1 style="margin-left: 31%; color:#333333;">CONTACT MESSEGES</h1> 

  


<div class="mt-5">


 
			
			<table class="table  table-stripped tbl">
    <thead>
      <tr>
        <th>#</th>
        
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    			 	<?php

 $query = "select * from contact ";

 $result = mysqli_query($conn,$query);

 while($res = mysqli_fetch_array($result)){
 ?>
      <tr>
        <td><?php echo $res['id'];  ?></td>
        
        <td><?php echo $res['firstname'];  ?></td>
        <td><?php echo $res['lastname'];  ?></td>
        <td><?php echo $res['email'];  ?></td>
        <td><?php echo $res['subject'];  ?></td>
        <td><?php echo $res['message'];  ?></td>
      
         <td>
     

  

 	<a href="viewcontact.php?delete=<?php echo $res['id']; ?>" class="p-2"  onclick="return confirm('Do you want to delete this message ? ') style="text-decoration: none; color: black;"><i class="fa fa-trash" style="color: black;"></i></a>
     
 </td>


 
      </tr>
      
   
     <?php 
 
 }
 ?>





  </table>
	</div>


<?php 

  include("footer2.php");

?>