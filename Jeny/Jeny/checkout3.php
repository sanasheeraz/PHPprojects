<?php include("header.php");
session_start();

?>
</br>
</br>
</br>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
             
            </div>
          </div>
        </div>
        <div class="row">
          </div>
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                         <?php 
      $total =0;
      if(!empty($_SESSION['cart']))
      {
        include 'connection.php';
        $index =0;
        if(!isset($_SESSION['qty_array']))
        {
          $_SESSION['qty_array']=array_fill(0, count ($_SESSION['cart']),1);
        }
        $sql="SELECT * FROM products  WHERE pro_id IN (".implode(',', $_SESSION['cart']).")";
        $result=mysqli_query($conn,$sql);
        
        ?>

                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>

                      <?php while ($row =mysqli_fetch_assoc($result)){ ?>
                      <tr>
                        <?php $total+=$_SESSION['qty_array'][$index]*$row['pro_price']; ?>
                        <td><?php echo $row['pro_name'];?><strong class="mx-2">&nbsp; X &nbsp; &nbsp;<?php echo $_SESSION['qty_array'][$index];?></strong></td>
                        <td>Rs &nbsp;<?php echo number_format($_SESSION['qty_array'][$index]*$row['pro_price'],2);?> </td>

                      </tr>
                      <?php

        $index++;
        $_SESSION['t']=$total;
           
        }?>
                              <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>RS&nbsp;<?php echo number_format($_SESSION['t'],2);?></strong></td>
                      </tr>
     <?php }
      else
      {
        
    
        
      }
      ?>



                    </tbody>
                  </table>

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">CASH ON DELIVERY</a></h3>

                    <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">KIDNLY PAY THE ORDER AMOUNT WHILE RECIEVING THE ORDER.</p>
                      </div>
                    </div>
                  </div>

               

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='checkout2.php'">Place Order</button>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='cart.php'">Back to Cart</button>
                  </div>

                </div>
              </div>
            </div>
                   
                  </tr>


          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

<?php include("footer.php");?>