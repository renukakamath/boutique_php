<?php include 'admin_header.php';

 $q1="SELECT * FROM `tbl_purchasemaster` INNER JOIN `tbl_purchasechild` USING(`purchase_mid`) INNER JOIN `seller` USING(`seller_id`) INNER JOIN `product` USING(`product_id`) INNER JOIN `category` USING(`category_id`) WHERE `tbl_purchasemaster`.`status`='Pending'";
$res1=select($q1);


$qq="SELECT *,COUNT(`purchase_cid`) AS pur_count,SUM(`tbl_purchasemaster`.`tot_amount`) AS ttamount FROM `tbl_purchasemaster` INNER JOIN `tbl_purchasechild` USING(`purchase_mid`) WHERE  `tbl_purchasemaster`.`status`='Pending'";
$rr=select($qq);

if(isset($_GET['purchase_list'])){
    extract($_GET);

    $qz="SELECT * FROM `tbl_purchasemaster` INNER JOIN `tbl_purchasechild` USING(`purchase_mid`) WHERE `status`='Pending'";
    $az=select($qz);
    if(sizeof($az)>0){
      foreach ($az as $row) {
        
        $pm_id=$row['purchase_mid'];
        $item_id=$row['product_id'];
        $quantity=$row['quantity'];

        $qs="UPDATE `tbl_purchasemaster` SET `status`='Purchased' WHERE `purchase_mid`='$pm_id'";
        update($qs);
        $qs1="UPDATE `product` SET `stock`=`stock`+'$quantity' WHERE `product_id`='$item_id'";
        update($qs1);

      }
    }


    //  $qu="UPDATE `tbl_cartmaster` SET `tot_amount`=`tot_amount`-'$amount' WHERE `cart_mid`='$cart_mid'";
    // update($qu);
    //  $qd="DELETE FROM `tbl_cartchild` WHERE `item_id`='$remove_item' AND `cart_mid`='$cart_mid'";
    // delete($qd);
    alert("Successfully Purchased");
    redirect("admin_manage_purchase.php");

}

?>

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 200px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <!-- <h1>Powerful Digital Solutions With Gp<span>.</span></h1> -->
          <!-- <h2>My Orders</h2> -->
          <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Purchase List</h1>
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
            <h5 class="mb-0">Purchase - <?php echo $rr[0]['pur_count']; ?> items</h5>
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
                <p><strong>Vendor : <?php echo $row['seller_name']; ?></strong></p>
                <p>Model: <?php echo $row['model']; ?></p>
                <p>material: <?php echo $row['material']; ?></p>
                <p>category: <?php echo $row['category_name']; ?></p>
               <!--  <a type="button" href="?remove_item=<?php echo $row['item_id']; ?>&cart_mid=<?php echo $row['cart_mid']; ?>&amount=<?php echo $row['amount']; ?>" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                title="Remove item"> -->
                <i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
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
              <!--   <input type="hidden" name="cart_mid<?php echo $i; ?>" value="<?php echo $row['cart_mid'];?>"></td>
                <input type="hidden" name="item_id<?php echo $i; ?>" value="<?php echo $row['item_id'];?>"></td>
                <input type="hidden" name="cart_cid<?php echo $i; ?>" value="<?php echo $row['cart_cid'];?>"></td>
                <input type="hidden" name="rate<?php echo $i; ?>" value="<?php echo $row['rate'];?>"></td>
                  <input type="submit"  value="-" name="minus<?php echo $i; ?>" class="btn btn-primary px-3 me-2" 
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
        -->
                  <div class="form-outline">
                    <input id="form1" min="1" readonly name="quantity<?php echo $i; ?>" value="<?php echo $row['quantity']; ?>" type="number" class="form-control" />
                    <label class="form-label" for="form1">Quantity</label>
                  </div>

                <!--   <input type="submit" value="+" name="add_item<?php echo $i; ?>" class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()"> -->
                  
                </div>
                </form>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>₹<?php echo $row['tot_price']; ?></strong>
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
        <!-- <div class="card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0">12.10.2020 - 14.10.2020</p>
          </div>
        </div> -->
       <!--  <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="assets/img/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
                src="assets/img/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="assets/img/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="assets/img/paypals.png"
              alt="PayPal acceptance mark" />
          </div>
        </div> -->
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <!-- <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span>$53.98</span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li> -->
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <!-- <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong> -->
                </div>
                <span><strong>₹<?php if(sizeof($rr)>0){ echo $rr[0]['ttamount']; } else{ echo "0";  } ?></strong></span>
              </li>
            </ul>


<?php if(sizeof($res1)>0){ ?>



            <a type="button" href="?purchase_list=<?php if(sizeof($res1)>0){ echo $res1[0]['purchase_mid']; } ?>&ttamount=<?php if(sizeof($res1)>0){ echo $rr[0]['ttamount']; } ?>" class="btn btn-primary btn-lg btn-block">
              Purchase

            <?php } ?>
            </a>
          </div>
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