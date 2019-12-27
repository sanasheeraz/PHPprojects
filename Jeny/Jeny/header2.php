<?php

session_start();

include 'connection.php';

if(!isset($_SESSION['adminname'])){

  header("location:index.php");
}


 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin Panel</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link href="css/style4.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><a href="index.php" style="text-decoration:none;">JENNY JEWELS</a></div>
      <div class="list-group list-group-flush">
        <a href="addadmin.php" class="list-group-item list-group-item-action bg-light">MANAGMENT</a>
        <a href="addcustomer.php" class="list-group-item list-group-item-action bg-light">CUSTOMERS</a>
        <a href="addcategory.php" class="list-group-item list-group-item-action bg-light">CATEGORIES</a>
        <a href="addproduct.php" class="list-group-item list-group-item-action bg-light">PRODUCTS</a>
        <a href="viewcontact.php" class="list-group-item list-group-item-action bg-light">CONTACT MESSEGES</a>
        <a href="admin_orders.php" class="list-group-item list-group-item-action bg-light">ORDERS</a>
        
        
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-default" id="menu-toggle"><i class="fa fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item">
              <a class="nav-link" href="#" style="text-transform:uppercase; color: #207dff; font-weight: bold; "><?=$_SESSION['adminname']; ?></a>
            </li>
            <li class="nav-item">

              <a class="nav-link" href="logout.php">LOG OUT</a>
              
             
            </li>
          </ul>
        </div>
      </nav>