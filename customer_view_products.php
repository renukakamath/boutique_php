<?php include 'customer_header.php'; 

$cust_id=$_SESSION['user_id'];
extract($_GET);
$var="SELECT *,`product`.`details` AS `description` FROM product INNER JOIN category USING (category_id)  where product_id='$item_id'";
$var1=select($var);

if(isset($_GET['add_cart'])){
  extract($_GET);

  $q="insert into bookings values(null,'$cust_id','$item_id',now(),'booked')";
  insert($q);

    alert("Successfully Booked");
    return redirect("customer_cart.php");

  }

?>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 300px;">
    <div class="container" data-aos="fade-up">

 
   </div>
  </section><!-- End Hero -->

  <main id="main">


   <!-- ======= Features Section ======= -->
   <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="image col-lg-6" style='background-image: url("<?php echo $var1[0]['photo']; ?>");background-size: cover;background-repeat: no-repeat;background-position: center;max-width: 400px ' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Product Name : <?php echo $var1[0]['product_name']; ?></h4>
              <!-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> -->
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Category : <?php echo $var1[0]['category_name']; ?></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
            </div>
             <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Model : <?php echo $var1[0]['model']; ?></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
            </div>
             <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Material : <?php echo $var1[0]['material']; ?></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Description : <?php echo $var1[0]['details']; ?></h4>
              <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
            </div>
            
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Price : <?php echo $var1[0]['sellingprice']; ?></h4>
              <!-- <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p> -->
            </div>
            <br>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
            
             <p><a href="?add_cart=<?php echo $var1[0]['product_id']; ?>&amount=<?php echo $var1[0]['sellingprice']; ?>&item_id=<?php echo $item_id; ?>" class="btn btn-warning">BUY NOW</a> 
             <!-- <a href="" class="btn btn-success">Buy Now</a></p> -->
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->



    
<!-- ======= Team Section ======= -->
 <section id="team" class ="team" >
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="margin-left: 45px">
          <h2>product!!</h2>
          <p>Check our product</p>
        </div>

 <div class="row" >
<?php 


foreach ($var1 as $key) {
  ?> 

<div class="col-md-3 col-lg-3"  >
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" style="max-height: 400px; width: 230px;margin-left: 45px">
            <div class="member" data-aos="fade-up" data-aos-delay="100" style="width: 330px">
            <a href="customer_view_products.php?item_id=<?php echo $key['product_id']; ?>">
            <div class="member-img">
                <img src="<?php echo $key['photo'] ?>" style="height: 220px"  class="img-fluid" alt="">
                </div>
              <div class="member-info">
                <h4><?php echo $key['product_name']; ?></h4>
                <span> ₹<?php echo $key['sellingprice'] ?>/-</span>
              </div>
              </a>  
            </div>
          </div>
</div>
                  <?php
  }
  ?>

   

        </div>

      </div>
    </section><!-- End Team Section -->

<?php include 'footer.php'; ?>