
<?php include "connection.php";
$cust_id=$_SESSION['user_id'];

?>

<!-- <a href="admin_home.php">Home</a>
<a href="admin_manage_staff.php">admin_manage_staff</a>
<a href="admin_manage_vendor.php">admin_manage_vendor</a>
<a href="admin_manage_courier.php">admin_manage_courier</a>
<a href="admin_manage_category.php">admin_manage_category</a>
<a href="admin_manage_type.php">admin_manage_type</a>
<a href="admin_manage_brand.php">admin_manage_brand</a>
<a href="admin_manage_product.php">admin_manage_product</a>
<a href="admin_manage_purchase.php">admin_manage_purchase</a>
<a href="login.php">Logout</a>
 -->


 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp - v4.9.1
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="customer_home.php" style="color: #FFC541">BRD Since Now</a> <br>
      <span style="color: #FFC541; font-family: Freestyle Script Regular;font-size: 23px ">Boutique</span></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="customerhome.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About Us</a></li>
        <!--   <li><a class="nav-link scrollto" href="#team">Products</a></li> -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <li ><a class="nav-link scrollto" href="customer_cart.php"><i class="fa fa-shopping-cart" style="font-size:20px;color:#F5AA27"></i> Cart</a></li>
          <li><a class="nav-link scrollto" href="customer_view_my_orders.php">My Orders</a></li>
   
        <!--   <li class="dropdown"><a href="#"><span>Share</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              
            
                  <li><a href="customer_sharemy_ideas.php">Share My Ideas</a></li>
                  <li><a href="Ratedesigner.php">Rating</a></li>
                  <li><a href="sendcomplaint.php">Feedback</a></li>
                  <li><a href="reportdesign.php">Report</a></li>
                  
                </ul>
              </li> -->

              <!-- <li><a href="admin_manage_vendor.php">Vendor</a></li>
              <li><a href="admin_manage_courier.php">Courier</a></li>
              <li><a href="admin_manage_category.php">Category</a></li>
              <li><a href="admin_manage_type.php">Type</a></li>
              <li><a href="admin_manage_brand.php">Brand</a></li>
              <li><a href="admin_manage_product.php">Product</a></li>
             
            </ul>
          </li> -->
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->


