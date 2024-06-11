<?php include 'public_cart.php';


$q1="SELECT * FROM `bookings` INNER JOIN `product`  USING (`product_id`) INNER JOIN `user` USING (user_id) WHERE `user_id`='$cust_id' AND `status`='booked'";


$res1=select($q1);
// $qq="SELECT *,COUNT(`cart_cid`) AS cart_count,sum(amount) as ttamount FROM `tbl_cartmaster` INNER JOIN `tbl_cartchild` USING(`cart_mid`)  WHERE `cust_id`='$cust_id' AND `status`='Pending'";
// $rr=select($qq);





?>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 200px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <!-- <h1>Powerful Digital Solutions With Gp<span>.</span></h1> -->
          <!-- <h2>My Orders</h2> -->
          <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">My Bookings..</h1>
        </div>
      </div>

      

    </div>
  </section><!-- End Hero -->

  <main id="main">


<section class="h-100 " style="background-color: lightgray;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
          <!--   <h5 class="mb-0">Cart - <?php echo $rr[0]['cart_count']; ?> items</h5> -->
          </div>
          
            <!-- Single item -->
           
            <?php 
                   
                    if(sizeof($res1)>0){
                        $i=0;
                        foreach($res1 as $row){ ?>  
                        <div class="card-body">
                         <div class="row"> 
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="<?php echo $row['photo']; ?>"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
               
                <p><strong><?php echo $row['product_name']; ?></strong></p>
                <p><strong>Model: <?php echo $row['model']; ?></strong></p>
                <p> <strong>Material: <?php echo $row['material']; ?></strong></p>
                <p><strong>Details: <?php echo $row['details']; ?></strong></p>
                
               
                </a>
                <!-- <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                title="Move to the wish list">
                <i class="fas fa-heart"></i>
                </button> -->
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
               <!--  <form action="" method="post">
                <div class="d-flex mb-4" style="max-width: 300px">
                <input type="hidden" name="cart_mid<?php echo $i; ?>" value="<?php echo $row['cart_mid'];?>"></td>
                <input type="hidden" name="item_id<?php echo $i; ?>" value="<?php echo $row['item_id'];?>"></td>
                <input type="hidden" name="cart_cid<?php echo $i; ?>" value="<?php echo $row['cart_cid'];?>"></td>
                <input type="hidden" name="rate<?php echo $i; ?>" value="<?php echo $row['rate'];?>"></td>
                  <input type="submit"  value="-" name="minus<?php echo $i; ?>" class="btn btn-primary px-3 me-2" 
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
       
                  <div class="form-outline">
                    <input id="form1" min="1" name="quantity<?php echo $i; ?>" value="<?php echo $row['quantity']; ?>" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <input type="submit" value="+" name="add_item<?php echo $i; ?>" class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  
                </div>
                </form> -->
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>₹<?php echo $row['sellingprice']; ?></strong>
                  <a class="btn btn-success" href="customer_payment.php?amt=<?php echo $row['sellingprice'] ?>&bid=<?php echo $row['booking_id'] ?>">Make Payment</a>
                </p>
                <!-- Price -->
              </div>
             

        
</div>
                <?php     }
                }

                ?>
           
            <!-- Single item -->

           
        </div>
        <!-- <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div> -->
       
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