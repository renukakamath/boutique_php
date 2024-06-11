<?php include 'customer_header.php';
extract($_GET);
$var="SELECT * FROM product INNER JOIN category USING (category_id) ";
$var1=select($var);

if(isset($_GET['catid'])){
	extract($_GET);

	 $var="SELECT * FROM product INNER JOIN category USING (category_id)  WHERE  category_id='$catid'";
    $var1=select($var);
}

 ?>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Brd Since Now </h1>
        </div>
      </div>



                <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">

       <?php 
             $q1="SELECT * FROM category";
            $ress=select($q1);
            if(sizeof($ress)>0){
              foreach ($ress as $row ) { ?>


                
        <div class="col-xl-2 col-md-6">
          <div class="icon-box">
            <i class="ri-store-line"></i>
          <div class="swiper-slide"><a href="?catid=<?php echo $row['category_id']; ?>#team"><?php echo $row['category_name']; ?><?php echo $row['description']; ?></a></div>
          </div>
        </div>

        
            
           
          <?php } } ?>

      
        <div class="col-xl-2 col-md-4">
          
        </div>
        <div class="col-xl-2 col-md-4">
        
        </div>
        <div class="col-xl-2 col-md-4">
         
        </div>
        <!-- <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a class="nav-link scrollto " href="customer_view_category_items.php>">OTHER ACCESSORIES</a></h3>
          </div>
        </div> -->
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">


   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
       
          </div>
          <div class="swiper-pagination"></div>
       
        </div>

      </div>
    </section><!-- End Clients Section -->
    
 <!-- ======= Team Section ======= -->
 <section id="team" class ="team" >
      <div class="container" data-aos="fade-up">

        <div class="section-title" style="margin-left: 45px">
          <h2>Product!!</h2>
          <p>Check our Product</p>
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