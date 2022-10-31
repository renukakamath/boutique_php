<?php include 'admin_header.php';


?>


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 200px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <!-- <h1>Powerful Digital Solutions With Gp<span>.</span></h1> -->
          <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Sales Details..</h1>
        </div>
      </div>

      

    </div>
  </section><!-- End Hero -->

  <main id="main">


    
 <!-- ======= Team Section ======= -->

<section class="h-100 " style="background-color: lightgray;">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Sales Details</h5>
          </div>
          
            <!-- Single item -->
           
            <?php 
                   $q="SELECT *,`tbl_cartmaster`.`status` AS ostatus FROM `tbl_order` INNER JOIN `tbl_cartmaster` USING(`cart_mid`) INNER JOIN `tbl_cartchild` USING(`cart_mid`) INNER JOIN `tbl_payment` USING(`order_id`) INNER JOIN `tbl_item` USING(`item_id`) INNER JOIN `tbl_brand` USING(`brand_id`) INNER JOIN `tbl_category` USING(`cat_id`) INNER JOIN `tbl_type` USING(`type_id`) INNER JOIN `tbl_customer` USING(`cust_id`) WHERE `tbl_cartmaster`.`status` !='Pending' ORDER BY `o_date` DESC ";
                   $res1=select($q);
                    if(sizeof($res1)>0){
                        $i=0;
                        foreach($res1 as $row){ ?>  
                        <div class="card-body">
                         <div class="row"> 
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="<?php echo $row['item_image']; ?>"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong>Customer Name:<?php echo $row['cust_fname']; ?> <?php echo $row['cust_lname']; ?></strong></p>
                <p><strong><?php echo $row['item_name']; ?></strong></p>
                <p>Brand: <?php echo $row['brand_name']; ?></p>
                <p>Category: <?php echo $row['cat_name']; ?></p>
                <p>Strap Type: <?php echo $row['type_name']; ?></p>
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
                <!-- Quantity -->
                <form action="" method="post">
                <div class="d-flex mb-4" style="max-width: 300px">
                <input type="hidden" name="cart_mid<?php echo $i; ?>" value="<?php echo $row['cart_mid'];?>"></td>
                <input type="hidden" name="item_id<?php echo $i; ?>" value="<?php echo $row['item_id'];?>"></td>
                <input type="hidden" name="cart_cid<?php echo $i; ?>" value="<?php echo $row['cart_cid'];?>"></td>
                <input type="hidden" name="rate<?php echo $i; ?>" value="<?php echo $row['rate'];?>"></td>
                  <!-- <input type="submit"  value="-" name="minus<?php echo $i; ?>" class="btn btn-primary px-3 me-2" 
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()"> -->
       
                  <div class="form-outline">
                    <input id="form1" min="1" readonly name="quantity<?php echo $i; ?>" value="<?php echo $row['quantity']; ?>" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                  <!-- <input type="submit" value="+" name="add_item<?php echo $i; ?>" class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> -->
                  
                </div>
                </form>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>₹<?php echo $row['amount']; ?></strong>
                </p>
                <p class="text-start text-md-center">
                  <strong><?php echo $row['ostatus']; ?></strong>
                </p>
                <?php 
                    if($row['ostatus']=="Paid"){ ?>
                        <p class="text-start text-md-center">
                        <strong><a href="admin_assign_to_courire_service.php?payment_id=<?php echo $row['payment_id']; ?>&cart_mid=<?php echo $row['cart_mid']; ?>">Assign To Courier Service</a></strong>
                        </p>
                <?php    }
                ?>
                
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