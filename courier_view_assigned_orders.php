<?php include 'courier_header.php';

if(isset($_GET['pickup'])) 
{  
  extract($_GET);
  $q1="UPDATE `tbl_cartmaster` SET `status`='Order Pick Up' WHERE `cart_mid`='$pickup'";
  update($q1);
  alert("Order Successfully Picked Up");
 return redirect("courier_view_assigned_orders.php");

}
if(isset($_GET['delivered'])) 
{  
  extract($_GET);
  $q1="UPDATE `tbl_cartmaster` SET `status`='Order Delivered' WHERE `cart_mid`='$delivered'";
  update($q1);
  $qq="INSERT INTO `tbl_delivery` VALUES(NULL,'$payment_id',CURDATE())";
  insert($qq);
  alert("Order Successfully Delivered");
 return redirect("courier_view_assigned_orders.php");

}
 ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 300px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Order Details..</h1>


</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


   <!-- ======= Services Section ======= -->
   <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Orders</h2>
          <p>Assigned Orders</p>
        </div>

        <div class="row">

        <?php 
     $q="SELECT *,tbl_cartmaster.status as cstatus FROM `tbl_payment` INNER JOIN `tbl_order` USING(`order_id`) INNER JOIN `tbl_cartmaster` USING(`cart_mid`) INNER JOIN `tbl_customer` USING(`cust_id`) WHERE (`tbl_cartmaster`.`status` ='Assigned To Courier' or `tbl_cartmaster`.`status` ='Order Pick Up') AND `courier_id`='2' ORDER BY `o_date` DESC";
      $res11=select($q);
      $i=1;
        foreach ($res11 as $row) { ?>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <!-- <div class="icon"><i class="bx bxl-dribbble"></i></div> -->
              <h4><a href="">Delivery Details</a></h4>
              <h6>Customer Name : <?php echo $row['cust_fname'] ?> <?php echo $row['cust_lname'] ?></h6>
              <p>City : <?php echo $row['cust_city'] ?></p>
              <p>District : <?php echo $row['cust_dist'] ?></p>
              <p>Pincode : <?php echo $row['cust_pin'] ?></p>
              <p>Phone : <?php echo $row['cust_phone'] ?></p>
              <p><?php echo $row['cstatus'] ?></p>
              <?php 
                if($row['cstatus']=="Assigned To Courier"){ ?>
                    <p><a href="?pickup=<?php echo $row['cart_mid']; ?>&payment_id=<?php echo $row['cart_mid']; ?>">Order Pick Up</a></p>
                <?php }
                else if($row['cstatus']=="Order Pick Up"){ ?>
                    <p><a href="?delivered=<?php echo $row['cart_mid']; ?>&payment_id=<?php echo $row['cart_mid']; ?>">Order Delivered</a></p>
             <?php    }

              ?>
            </div>
          </div>
        <?php } ?>

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Services Section -->


<?php include 'footer.php'; ?>