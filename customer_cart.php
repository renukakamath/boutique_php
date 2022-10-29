<?php include 'customer_header.php';

 $q1="SELECT * FROM `tbl_cartmaster` INNER JOIN `tbl_cartchild` USING(`cart_mid`)  INNER JOIN `tbl_item` USING(`item_id`)  INNER JOIN `tbl_brand` USING(`brand_id`) INNER JOIN `tbl_category` USING(`cat_id`) INNER JOIN `tbl_type` USING(`type_id`) WHERE `cust_id`='$cust_id' AND `status`='Pending'";
$res1=select($q1);
$qq="SELECT *,COUNT(`cart_cid`) AS cart_count,sum(amount) as ttamount FROM `tbl_cartmaster` INNER JOIN `tbl_cartchild` USING(`cart_mid`)  WHERE `cust_id`='$cust_id' AND `status`='Pending'";
$rr=select($qq);

if(isset($_GET['remove_item'])){
    extract($_GET);
     $qu="UPDATE `tbl_cartmaster` SET `tot_amount`=`tot_amount`-'$amount' WHERE `cart_mid`='$cart_mid'";
    update($qu);
     $qd="DELETE FROM `tbl_cartchild` WHERE `item_id`='$remove_item' AND `cart_mid`='$cart_mid'";
    delete($qd);
    alert("Successfully Removed");
    redirect("customer_cart.php");

}
?>

<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Cart - <?php echo $rr[0]['cart_count']; ?> items</h5>
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
               
                <p><strong><?php echo $row['item_name']; ?></strong></p>
                <p>Brand: <?php echo $row['brand_name']; ?></p>
                <p>Category: <?php echo $row['cat_name']; ?></p>
                <p>Strap Type: <?php echo $row['type_name']; ?></p>
                <a type="button" href="?remove_item=<?php echo $row['item_id']; ?>&cart_mid=<?php echo $row['cart_mid']; ?>&amount=<?php echo $row['amount']; ?>" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                title="Remove item">
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
                </form>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>₹<?php echo $row['rate']; ?></strong>
                </p>
                <!-- Price -->
              </div>
              <?php    
              if(isset($_POST['minus'.$i])){
				extract($_POST);
                 $rate=$_POST['rate'.$i];
                 $quantity=$_POST['quantity'.$i];
                 $tot=$rate*$quantity;
                    $qr="UPDATE `tbl_cartchild` SET `quantity`='".$_POST['quantity'.$i]."',amount='$tot' WHERE cart_cid='".$_POST['cart_cid'.$i]."'";
				//  $qr="update complaint set reply='".$_POST['reply'.$i]."' where complaint_id='".$_POST['complaint_id'.$i]."'";
				update($qr);
				redirect("customer_cart.php");
				}

                if(isset($_POST['add_item'.$i])){
                    extract($_POST);
                     $rate=$_POST['rate'.$i];
                     $quantity=$_POST['quantity'.$i];
                     $tot=$rate*$quantity;
                        $qr="UPDATE `tbl_cartchild` SET `quantity`='".$_POST['quantity'.$i]."',amount='$tot' WHERE cart_cid='".$_POST['cart_cid'.$i]."'";
                    //  $qr="update complaint set reply='".$_POST['reply'.$i]."' where complaint_id='".$_POST['complaint_id'.$i]."'";
                    update($qr);
                    redirect("customer_cart.php");
                    }
				$i = $i+ 1; 
                ?>
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
        <div class="card mb-4 mb-lg-0">
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
        </div>
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
                <span><strong>₹<?php echo $rr[0]['ttamount'];?></strong></span>
              </li>
            </ul>

            <a type="button" href="customer_payment.php?cart_mid=<?php echo $res1[0]['cart_mid']; ?>&ttamount=<?php echo $rr[0]['ttamount'];?>" class="btn btn-primary btn-lg btn-block">
              Go to checkout
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