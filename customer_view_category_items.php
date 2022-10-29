<?php include 'customer_header.php';
extract($_GET);
 $var="SELECT * FROM tbl_item INNER JOIN tbl_category USING (cat_id) INNER JOIN tbl_brand USING (brand_id) WHERE `cat_name`='$cat'";
    $var1=select($var);

if(isset($_GET['brandfil'])){
	extract($_GET);

	$var="SELECT * FROM tbl_item INNER JOIN tbl_category USING (cat_id) INNER JOIN tbl_brand USING (brand_id) WHERE `cat_name`='$cat' and brand_id='$brandfil'";
    $var1=select($var);
}

 ?>
 <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 300px;">
   
          <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</section>



   <!-- ======= Clients Section ======= -->
   <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
        <?php 
        		 $q1="SELECT * FROM tbl_item INNER JOIN tbl_category USING (cat_id) INNER JOIN tbl_brand USING (brand_id) WHERE `cat_name`='men' GROUP BY `brand_id`";
        		$ress=select($q1);
        		if(sizeof($ress)>0){
        			foreach ($ress as $row ) { ?>

        
            <div class="swiper-slide"><a href="?brandfil=<?php echo $row['brand_id']; ?>&cat=<?php echo $cat; ?>"><img src="<?php echo $row['image']; ?>" class="img-fluid" alt=""><br><?php echo $row['brand_name']; ?></a></div>
           
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
              <div class="member-img">
                <img src="<?php echo $key['item_image'] ?>" style="height: 220px"  class="img-fluid" alt="">
                </div>
              <div class="member-info">
                <h4><?php echo $key['item_name']; ?></h4>
                <span> ₹<?php echo $key['rate'] ?>/-</span>
              </div>
            </div>
          </div>

                  <?php
	}
	?>

   

        </div>

      </div>
    </section><!-- End Team Section -->

<?php include 'footer.php'?>
