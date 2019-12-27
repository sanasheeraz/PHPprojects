<?php 

//ob_start();
include("header.php");

?>    

<?php
if(isset($_POST['save']))
{
	
  $ind=$_POST['indexes'];
  // foreach($_POST['indexes'] as $key)
  foreach( $ind as $key => $n ) { 
    $i=$_POST['qty_'.$n];
    
    
    $_SESSION['qty_array'][$n]=$i;
  }
  

	//echo $_SESSION['qty_array'][$key];
	$_SESSION['message']='Cart updated successfully';
	//header('location:cart.php');
}

?>
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                        <?php 


      $total =0;
      if(!empty($_SESSION['cart']) )
      {
        include 'connection.php';
        $index =0;
		//echo "sadnaskdnaksd";
		//var_dump($_SESSION['qty_array'][24]);
        if(!isset($_SESSION['qty_array']))
        {
          echo "hello";
          $_SESSION['qty_array']=array_fill(0, count ($_SESSION['cart']),1);
        }
        $sql="SELECT * FROM products  WHERE pro_id IN (".implode(',', $_SESSION['cart']).")";
        $result=mysqli_query($conn,$sql);
        while ($row =mysqli_fetch_assoc($result)) 
        {
          ?>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="images/<?php echo $row['pro_image'];?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $row['pro_name'];?></h2>
                    </td>
                    <td>Rs&nbsp;<?php echo number_format($row['pro_price'],2);?></td>
                   
                    <td>
                      <div class="input-group mb-3" style="max-width: 120px;">
                        <!-- <div class="input-group-prepend">
                          <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                        </div> -->
                        <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                        <input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index];?>" name="qty_<?php echo $index;?>">
                        <!-- <div class="input-group-append">
                          <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                        </div> -->
                      </div>

                    </td>
                    <td>Rs &nbsp;<?php echo number_format($_SESSION['qty_array'][$index]*$row['pro_price'],2);?></td>
                    <td><a href="delectCart.php?id=<?php echo $row['pro_id'];?>&index=<?php echo $index; ?>" class="btn btn-primary height-auto btn-sm">X</a></td>
                    <?php $total+=$_SESSION['qty_array'][$index]*$row['pro_price']; ?>
                  </tr>

<?php

        $index ++;
        $_SESSION['t']=$total;
           
        }
      }
      else
      {
        ?>
        <tr>
          <td colspan="4" class="text-center">No Item in Cart</td>
        </tr>
        <?php
      }
      ?>
                
                </tbody>
              </table>
            </div>
          
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button type="submit" class="btn btn-primary btn-sm btn-block" name="save">Update Cart</button>
              </div>
              <div class="col-md-6">
                <a href="shop.php" class="btn btn-outline-primary btn-sm btn-block" style="padding-top: 10px;" > Continue Shopping</a>
                <a href="clearCart.php" class="btn btn-outline-primary btn-sm btn-block" style="padding-top: 10px;" > Clear Cart</a>
              </div>
            </div>
            
            </form>
           
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">RS&nbsp;<?php echo number_format($total,2);?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <a class="btn btn-primary btn-lg btn-block" href="checkout3.php">Proceed To Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include("footer.php");
exit;
?>