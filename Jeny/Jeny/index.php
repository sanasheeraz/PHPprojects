<?php



 include("header.php");



?>

<style type="text/css">
  
.addcart a{
 

padding: 8px 30px 8px 30px;
background: #467DFF;
border-radius: 5px;
color: white;
font-size: 12px;
font-weight: bold;




}

.addcart a:hover{
 
 background:#E9E9E9;
 color: #467DFF;




}


</style>

<!--Slid Sec-->
      

 <!--        <div class="row align-items-center">
          <div class="col-lg-5 text-center">
            <div class="featured-hero-product w-100">
              <h1 class="mb-2">Madewell</h1>
              <h4>Summer Collection</h4>
              <div class="price mt-3 mb-5"><strong>1,499</strong> <del>$1,999</del></div>
              <p><a href="#" class="btn btn-outline-primary rounded-0">Shop Now</a> <a href="#" class="btn btn-primary rounded-0">Shop Now</a></p>
            </div>  
          </div> -->
          <div class="" style="margin-top: 5%;">
            <img src="images/new/back10.jpg" alt="Image" class="img-fluid img-1">
          </div>
          
      
      
      
    
  
    <div class="products-wrap border-top-0">
      <div class="container-fluid">
                <div class="row">
          <div class="title-section text-center col-12" id="style_h" >
            <h2 class="text-uppercase"  style="margin-top: 7%; margin-bottom: 5%;">Featured Products</h2>
          </div>
        </div>
        <div class="row no-gutters products">

          <?php

              include 'connection.php';

              $query="SELECT * FROM products where pro_type='1' ";
              $result=mysqli_query($conn,$query);
              while($row=mysqli_fetch_array($result)){
          ?>
          <div class="col-md-4 col-lg-3">
            <a href="item.php?id=<?php echo $row['pro_id'];  ?>" class="item">
              <div class="img" style="width: 100%; height: 300px; padding: 10px;">
              <img src="images/<?php echo $row['pro_image'];  ?>" alt="Image" class="img-fluid"style="height: 100%; width: 90%; margin: 10px;">
              </div>
              </a>
              <div class="item-info mt-3" >
                <h3 style="color: black;"><?php echo $row['pro_name'] ?></h3>
                            <?php
            $i=$row['cat_id'];
              $q1="SELECT * from category where cat_id='$i'";
              $r1=mysqli_query($conn,$q1);
              $r2=mysqli_fetch_row($r1);
            ?>
            <span class="collection d-block"><?php echo $r2[1] ?></span>
                <strong class="price" style="color: black; font-size: 18px;"> Rs &nbsp;<?php echo $row['pro_price']; ?> &nbsp;/-</strong>
             <!--    <div class="addcart"><a href="#">Add Cart</a></div> -->
              </div>

            <div style="width: 150px; margin: 0 auto; background: #207dff; text-align: center; padding: 10px; margin-top: 5px; margin-bottom: 10px; " onMouseOver="this.style.color='gray'"
        onMouseOut="this.style.color='green'">
<a href="addCart.php?id=<?php echo $row['pro_id']; ?>" style=" color: white; text-decoration: none; font-weight:bold; "><i class="fa fa-lg fa-shopping-cart"></i>Add Cart</a>
</div>
          </div>
          

          <?php } ?>



        </div>
      </div>
    </div>
    

   <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" style="width: 100%; height: 500px; margin-top: 20px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="1000">
      <img class="d-block w-100" src="images/new/back4.jpg" alt="First slide" style="width: 100%; height: 500px;">
    </div>
    <div class="carousel-item" data-interval="1000">
      <img class="d-block w-100" src="images/new/back2.jpg" alt="Second slide" style="width: 100%; height: 500px;">
    </div>
    <div class="carousel-item" data-interval="1000">
      <img class="d-block w-100" src="images/new/back9.jpg" alt="Third slide" style="width: 100%; height: 500px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="products-wrap border-top-0">
      <div class="container-fluid">
                <div class="row">
          <div class="title-section text-center col-12" id="style_h" >
            <h2 class="text-uppercase"  style="margin-top: 7%; margin-bottom: 5%;">NEW ARRIVALS</h2>
          </div>
        </div>
        <div class="row no-gutters products">

          <?php

              include 'connection.php';

              $query2="SELECT * FROM products where pro_type='2' order by rand() limit 4 ";
              $result2=mysqli_query($conn,$query2);
              while($row2=mysqli_fetch_array($result2)){
          ?>
          <div class="col-md-3 col-lg-3">
            <a href="item.php?id=<?php echo $row2['pro_id'];  ?>" class="item">
              <div class="img" style="width: 100%; height: 300px; padding: 10px;">
              <img src="images/<?php echo $row2['pro_image'];  ?>" alt="Image" class="img-fluid"style="height: 100%; width: 90%; margin: 10px;">
              </div>
              </a>
              <div class="item-info mt-3" >
                <h3 style="color: black;"><?php echo $row2['pro_name'] ?></h3>
                            <?php
            $i=$row2['cat_id'];
              $q1="SELECT * from category where cat_id='$i'";
              $r1=mysqli_query($conn,$q1);
              $r2=mysqli_fetch_row($r1);
            ?>
            <span class="collection d-block"><?php echo $r2[1] ?></span>
                <strong class="price" style="color: black; font-size: 18px;"> Rs &nbsp;<?php echo $row2['pro_price']; ?> &nbsp;/-</strong>
             <!--    <div class="addcart"><a href="#">Add Cart</a></div> -->
              </div>

            <div style="width: 150px; margin: 0 auto; background: #207dff; text-align: center; padding: 10px; margin-top: 5px; margin-bottom: 10px; " onMouseOver="this.style.color='gray'"
        onMouseOut="this.style.color='green'">
<a href="addCart.php?id=<?php echo $row2['pro_id']; ?>" style=" color: white; text-decoration: none; font-weight:bold; "><i class="fa fa-lg fa-shopping-cart"></i>Add Cart</a>
</div>
          </div>
          

          <?php } ?>



        </div>
      </div>
    </div>

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


<!--     <div class="site-blocks-cover inner-page py-5"  data-aos="fade">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 ml-auto order-lg-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#New Summer Collection 2019</h2>
            <h1>New Denim Coat</h1>
            <p><a href="#" class="btn btn-black rounded-0">Shop Now</a></p>
            </div>
          </div>
          <div class="col-lg-6 order-1 align-self-end">
            <img src="images/model_5.png" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div> -->


              <div class="" style="margin-top: 5%;">
            <img src="images/new/back7.jpg" alt="Image" class="img-fluid img-1">
          </div>

    <?php include("footer.php");?>