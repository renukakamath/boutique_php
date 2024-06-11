<?php include 'customer_header.php';
$cust_id=$_SESSION['user_id'];
extract($_GET);


?>


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 200px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <!-- <h1>Powerful Digital Solutions With Gp<span>.</span></h1> -->
          <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">My Orders..</h1>
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
       
          </div>
          <div class="swiper-pagination"></div>
       
        </div>

      </div>
    </section><!-- End Clients Section -->
    
 <!-- ======= Team Section ======= -->

<section class="h-100 " style="background-color: ;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">My Orders</h5>
          </div>
          
            <!-- Single item -->
           
            <?php 
                   $q="SELECT * FROM `bookings` INNER JOIN `product`  USING (`product_id`) inner join category using (category_id) INNER JOIN `user` USING (user_id) WHERE `user_id`='$cust_id' AND `status`='Paid'";
                   $res1=select($q);
                    if(sizeof($res1)>0){
                        
                        foreach($res1 as $row){ ?>  
                        <div class="card-body">
                         <div class="row"> 
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="<?php echo $row['photo']; ?>"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: "></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">



                <!-- Data -->
               
                <p><strong><?php echo $row['product_name']; ?></strong></p>
                <p>Category : <?php echo $row['category_name']; ?></p>
                <p>Model : <?php echo $row['model']; ?></p>
                <p>Material : <?php echo $row['material']; ?></p>
                <p>Description : <?php echo $row['details']; ?></p>
               
                <!-- <a type="button" href="?remove_item=<?php echo $row['item_id']; ?>&cart_mid=<?php echo $row['cart_mid']; ?>&amount=<?php echo $row['amount']; ?>" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                title="Remove item">
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a> -->
                <!-- <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                title="Move to the wish list">
                <i class="fas fa-heart"></i>
                </button> -->
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
               

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>₹<?php echo $row['sellingprice']; ?>/-</strong>
                </p>
                <p class="text-start text-md-center">
                  Date : <?php echo $row['date_time']; ?> 
                </p>
                <p class="text-start text-md-center">
                  <strong style="color: green;"><?php echo $row['status']; ?></strong>
                </p>
                <p align="center">
                
                </p>
                <!-- Price -->
              </div>
             
                </div>
                <hr class="my-4" />

        
</div>
                <?php     }
                }

                ?>
           
            <!-- Single item -->

           
        </div>
       
      </div>
      
    </div>
  </div>
</section>

<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>









<?php include 'footer.php'; ?>