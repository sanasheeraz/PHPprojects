<?php include("header.php");?>
</br>
</br>    

<?php 
$id =  $_GET['id'] ;

     include 'connection.php';

              $query="SELECT * FROM products where pro_id = '$id' ";
              $result=mysqli_query($conn,$query);
              while($row=mysqli_fetch_array($result)){
                  ?>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="shop.php">Shop</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php
            $i=$row['cat_id'];
              $q1="SELECT * from category where cat_id='$i'";
              $r1=mysqli_query($conn,$q1);
              $r2=mysqli_fetch_row($r1);
            ?><?php echo $r2[1] ?></strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="border" style="height: 80%;" id="head1">
              <img src="images/<?php echo $row['pro_image']  ?>" alt="Image" class="" style="height: 100% !important; width:100%;">
            </div>
          </div>
          <div class="col-md-6" id="head2">
            <h2 class="text-black"><?php echo $row['pro_name']  ?></h2>
            <p><?php echo $row['pro_des']  ?></p>
            <p><strong class="text-primary h4">Rs &nbsp;<?php echo $row['pro_price']  ?> /-</strong></p>
            
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
               
              </div>
              
              <div class="input-group-append">
                
              </div>
            </div>

            </div>
            <p><a href="addCart.php?id=<?php echo $row['pro_id']; ?>" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary">Add To Cart</a></p>

          </div>
        </div>
      </div>
    </div>

  <?php } ?>

   <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12" id="style_j">
            <h2 class="text-uppercase">Categories</h2>
          </div>
        </div>
        <div class="row" id="style_div">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              
              <?php

              include 'connection.php';

              $query3="SELECT * FROM category";
              $result3=mysqli_query($conn,$query3);
              while($row3=mysqli_fetch_array($result3)){

                $cat= $row3['cat_id'];
          ?>

              <div class="product">
                <a href="shop.php?category=<?php echo $cat ?>" class="item">
                  <div class="img" style="width: 100%; height: 300px; padding: 10px;">
                  <img src="images/<?php echo $row3['cat_image'];  ?>" alt="Image" class="img-fluid" style="height: 100%; width: 90%; margin: 10px;">
                </div>
                </a>
               <div class="item-info " style="margin-top: 5%; text-align: center;">
                    <h3 ><?php echo $row3['cat_name'] ?></h3>
                   
                    
                  </div>
                
                

              </div>

            <?php } ?>






         

            </div>
          </div>
        </div>
      </div>
    </div>

<?php include("footer.php");?>