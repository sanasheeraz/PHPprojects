<?php include("header.php");?>
</br>
</br>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row mt-4">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Search Results</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-lg-9 order-2 order-lg-1">

            <div class="row align">
              <div class="col-md-12 mb-5">

                <?php if(isset($_GET['category'])){ ?>
                <div class="float-md-left"><h2 class="text-black h5">All Products</h2></div>
              <?php } else{?>
                <div class="float-md-left"><h2 class="text-black h5">Related Products</h2></div>

              <?php } ?>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                   
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mb-5">
              <div class="products-wrap border-top-0">
  <div class="container-fluid">
    <div class="row no-gutters products" >

 <?php
        if(isset($_GET['search'])){
              include 'connection.php';

              $search_key=$_GET['search_query'];

              $query="SELECT * FROM products where keywords like '%$search_key%' order by rand() limit 6";
              $result=mysqli_query($conn,$query);
              while($row=mysqli_fetch_array($result)){
          ?>

      <div class="col-6 col-md-6 col-lg-6 border-top" style="border-bottom: none; border-top: none; ">
        <a href="item.php?id=<?php echo $row['pro_id'] ?>" class="item">
          <img src="images/<?php echo $row['pro_image'];  ?>" alt="Image" class="img-fluid" >
          </a>
          <div class="item-info">
            <h3><?php echo $row['pro_name'] ?></h3>
            <?php
            $i=$row['cat_id'];
              $q1="SELECT * from category where cat_id='$i'";
              $r1=mysqli_query($conn,$q1);
              $r2=mysqli_fetch_row($r1);
            ?>
            <span class="collection d-block"><?php echo $r2[1] ?></span>

            <strong class="price">Rs&nbsp;<?php echo $row['pro_price'] ?>/-</strong>
            <div style="width: 150px; margin: 0 auto; background: #207dff; text-align: center; padding: 10px; margin-top: 5px; margin-bottom: 10px; " onMouseOver="this.style.color='gray'"
        onMouseOut="this.style.color='green'">
<a href="addCart.php?id=<?php echo $row['pro_id']; ?>" style=" color: white; text-decoration: none; font-weight:bold; "><i class="fa fa-lg fa-shopping-cart"></i>Add Cart</a>
</div>
          </div>
       
      </div>


    <?php
    } 
    
    } else { 

    ?>

    <h1> No Result Found </h1>

    <?php 
  } 
  ?>
    





    </div>
  </div>
</div>
            </div>
           
          </div>

          <div class="col-lg-3 order-1 order-lg-2 mb-5 mb-lg-0">
            <div class="border p-4 mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">Categories</h3>
              <ul class="list-unstyled mb-0">

                 <?php

              include 'connection.php';

              $queryC="SELECT * FROM category  ";
              $resultC=mysqli_query($conn,$queryC);
              while($rowC=mysqli_fetch_array($resultC)){
                $cat= $rowC['cat_id'];
          ?>
                <li class="mb-1"><a href="shop.php?category=<?php echo $rowC['cat_id'];  ?>" class="d-flex"><span><?php echo $rowC['cat_name'];  ?></span></a> <!-- <span class="text-black ml-auto">(2,220)</span></a></li> -->
              <?php } ?>  
              
              </ul>
            </div>

            <div class="border p-4 mb-4">
              <h3 class="mb-3 h6 text-uppercase text-black d-block">New Arrivals</h3>
              <div class="mb-4">
                
                
                <ul class="list-unstyled mb-0">

                 <?php

              include 'connection.php';

              $queryD="SELECT * FROM products where pro_type='2' order by rand() limit 6   ";
              $resultD=mysqli_query($conn,$queryD);
              while($rowD=mysqli_fetch_array($resultD)){
                $cat= $rowD['pro_id'];
          ?>
                <li class="mb-1"><a href="item.php?id=<?php echo $rowD['pro_id'];  ?>" class="d-flex"><span><?php echo $rowD['pro_name'];  ?></span> <!-- <span class="text-black ml-auto">(2,220)</span></a></li> -->
              <?php } ?>  
              
              </ul>
              </div>

             
              <div class="mb-4">
                <h3 class="mb-3 h6 k"></h3>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class="  d-inline-block mr-2"></span>
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class=" color d-inline-block rounded-circle mr-2"></span></a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class=" color d-inline-block rounded-circle mr-2"></span> 
                </a>
                <a href="#" class="d-flex color-item align-items-center" >
                  <span class=" color d-inline-block rounded-circle mr-2"></span> 
                </a>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Categories</h2>
          </div>
        </div>
        <div class="row">
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

<?php include("footer.php")?>