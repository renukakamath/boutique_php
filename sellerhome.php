<?php include 'seller_header.php'; ?>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Brd Since Now</h1>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
       
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a class="nav-link scrollto " "href="customer_view_category_items.php?cat=men"">WOMEN</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a class="nav-link scrollto " "href="customer_view_category_items.php?cat=men">KIDS</a></h3>
          </div>
        </div>
       
        
        </div>
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
             $q1="SELECT * FROM category";
            $ress=select($q1);
            if(sizeof($ress)>0){
              foreach ($ress as $row ) { ?>

        
            <div class="swiper-slide"><a class="btn btn-warning" style="width: 200px" href="?brandfil=<?php echo $row['category_id']; ?>#team"><?php echo $row['category_name']; ?></a></div>
           
          <?php } } ?>
          </div>
          <div class="swiper-pagination"></div>
       
        </div>

      </div>
    </section><!-- End Clients Section -->

<?php include 'footer.php'; ?>