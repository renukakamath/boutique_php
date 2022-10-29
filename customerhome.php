<?php include 'customer_header.php';
extract($_GET);
$var="SELECT * FROM tbl_item INNER JOIN tbl_category USING (cat_id) INNER JOIN tbl_brand USING (brand_id) ";
$var1=select($var);

if(isset($_GET['brandfil'])){
	extract($_GET);

	 $var="SELECT * FROM tbl_item INNER JOIN tbl_category USING (cat_id) INNER JOIN tbl_brand USING (brand_id) WHERE  brand_id='$brandfil'";
    $var1=select($var);
}

 ?>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Powerful Digital Solutions With Gp<span>.</span></h1>
          <h2>We are team of talented digital marketers</h2>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a class="nav-link scrollto " href="customer_view_category_items.php?cat=men">MEN</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a class="nav-link scrollto " href="customer_view_category_items.php?cat=women">WOMEN</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a class="nav-link scrollto " href="customer_view_category_items.php?cat=kids">KIDS</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a class="nav-link scrollto " href="customer_view_category_items.php?cat=unisex">UNISEX</a></h3>
          </div>
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
        <?php 
        		 $q1="SELECT * FROM tbl_brand";
        		$ress=select($q1);
        		if(sizeof($ress)>0){
        			foreach ($ress as $row ) { ?>

        
            <div class="swiper-slide"><a href="?brandfil=<?php echo $row['brand_id']; ?>#team"><img src="<?php echo $row['image']; ?>" class="img-fluid" alt=""><br><?php echo $row['brand_name']; ?></a></div>
           
          <?php } } ?>
          </div>
          <div class="swiper-pagination"></div>
       
        </div>

      </div>
    </section><!-- End Clients Section -->
    
 <!-- ======= Team Section ======= -->
 <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>watches!!</h2>
          <p>Check our watches</p>
        </div>

 <div class="row">
<?php 


foreach ($var1 as $key) {
	?> 

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" style="max-height: 400px; width: 230px">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
            <a href="customer_view_products.php?item_id=<?php echo $key['item_id']; ?>">
            <div class="member-img">
                <img src="<?php echo $key['item_image'] ?>" style="height: 220px"  class="img-fluid" alt="">
                </div>
              <div class="member-info">
                <h4><?php echo $key['item_name']; ?></h4>
                <span> ₹<?php echo $key['rate'] ?>/-</span>
              </div>
              </a>  
            </div>
          </div>

                  <?php
	}
	?>

   

        </div>

      </div>
    </section><!-- End Team Section -->

<?php include 'footer.php'; ?>