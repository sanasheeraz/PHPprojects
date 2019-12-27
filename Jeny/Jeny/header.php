<?php  

session_start();


//initialize cart if not set or is unset
if(!isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

$id=$_SESSION['c_id'];

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jenny Jewells</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white ">



      <div style="margin-left: 25px; margin-right: 25px;">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.php" class="js-logo-clone">Jenny Jewells</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a >Categories</a>
                  <ul class="dropdown">
                     <?php

              include 'connection.php';

              $query3="SELECT * FROM category";
              $result3=mysqli_query($conn,$query3);
              while($row3=mysqli_fetch_array($result3)){
                $cat= $row3['cat_id'];
                
          ?>
                    <li><a href="shop.php?category=<?php echo $cat ?>"><?php echo $row3['cat_name'] ?></a></li>

                  <?php } ?>

                  
                  </ul>
                </li>
                <li><a href="index.php">Home</a></li> 
                <li><a href="shop.php">Shop</a></li>
                <li><a href="contact.php">Contact</a></li>
               <li>  <form method="Get" action="result.php" enctype="multipart/form-data">
               <input type="text" placeholder="Search.." name="search_query">
  <button type="submit" name="search" style="border:none; background: none;"><i class="fa fa-search"></i></button>
            </form></li>
              </ul>
            </nav>
          </div>

          <div class="icons">
            
 
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number"><?php echo count($_SESSION['cart']); ?></span>
            </a>
           <?php if(isset($_SESSION['username'] )){?>

        
            <?php } ?>
            <?php if(isset($_SESSION['adminname'] )){?>

  HELLO
              <a  href="admin.php" style="margin: 2px; padding: 2px; text-transform: uppercase;color: #207dff; font-weight: bold; text-decoration: none;"><?= $_SESSION['adminname'] ?> </a>
              <a href="logout.php" style="margin: 2px; padding: 2px;">&nbsp;&nbsp;LOG OUT</a>

            <?php } elseif (isset($_SESSION['username'])) { ?>

            HELLO
             <a  href="user.php?id=<?php echo $id; ?>" style="margin: 2px; text-transform: uppercase; color: #207dff; font-weight: bold; text-decoration: none;"><?= $_SESSION['username'] ?> </a>
              <a href="logout.php" style="margin: 2px;  ">&nbsp;&nbsp;LOG OUT</a>

            <?php } else{ ?>
            <a href="login.php" style="margin: 2px; padding: 2px;">LOGIN</a>

            <a href="register.php" style="margin: 2px; padding: 2px; color: #207dff;">REGISTER</a>

          <?php } ?>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>