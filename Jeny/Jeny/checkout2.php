<?php
session_start();

include 'connection.php';
$total_amount=$_SESSION['t'];
$Quantity=$_SESSION['qty_array'];
$cId=$_SESSION['c_id'];
$q="INSERT INTO orders(O_Total_Amount,O_Customer) VALUES('$total_amount','$cId')";
$index=0;
$result=mysqli_query($conn,$q);
if($result)
{
	$sql="SELECT * FROM products  WHERE pro_id IN (".implode(',', $_SESSION['cart']).")";
				$result=mysqli_query($conn,$sql);
				while ($row =mysqli_fetch_assoc($result))
				{
					$r= mysqli_query($conn,"SELECT max(O_Id) from orders");
					$O_Id = mysqli_fetch_row($r);
					$highest_id = $O_Id[0];
					$id=$row['pro_id'];
					$name=$row['pro_name'];
					$p=$row['pro_price'];
					//$quan=implode(',', $Quantity);
					$quan=$_SESSION['qty_array'][$index];
					echo "<script>alert('$quan')</script>";
					$q1="INSERT INTO invoice(O_Id,Pro_Id,Pro_Name,Pro_PerUnittPrice,Pro_Quantity) VALUES ('$highest_id','$id','$name','$p','$quan')";
					$result1= mysqli_query($conn,$q1);
					if($result1)
					{
						echo "Successfull".$index;
						$index++;
						unset($_SESSION['cart']);
						header('location:thankyou.php');
						}
						else
						{
							echo "Try Again";
							echo mysqli_error($conn);
							}
				}
				
				}
				else
				{
					echo "Fail";
					}

?>