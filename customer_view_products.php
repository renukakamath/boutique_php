<?php include 'customer_header.php'; 
extract($_GET);
$var="SELECT *,`tbl_item`.`description` AS `description` FROM tbl_item INNER JOIN tbl_category USING (cat_id) INNER JOIN tbl_brand USING (brand_id) where item_id='$item_id'";
$var1=select($var);

if(isset($_GET['add_cart'])){
  extract($_GET);
  $q1="SELECT * FROM `tbl_cartmaster` WHERE `cust_id`='$cust_id' AND `status`='Pending'";
  $res1=select($q1);
  if(sizeof($res1)>0){
    $cart_mid=$res1[0]['cart_mid'];
    $q2="SELECT * FROM `tbl_cartchild` WHERE `item_id`='$add_cart' AND `cart_mid`='$cart_mid'";
    $res2=select($q2);
    if(sizeof($res2)>0){
      alert("Already Carted");
      return redirect("customer_cart.php");
      // $q3="UPDATE `tbl_cartchild` SET `quantity`=`quantity`+'1',`amount`=`amount`='' WHERE `item_id`=''";
    }else{
      $q4="INSERT INTO `tbl_cartchild` VALUES(NULL,'$cart_mid','$add_cart','1','$amount',CURDATE())";
      insert($q4);
      $q5="UPDATE `tbl_cartmaster` SET `tot_amount`=`tot_amount`+'$amount' WHERE `cart_mid`='$cart_mid'";
      update($q5);
      alert("Successfully Carted");
      return redirect("customer_cart.php");
    }
  }else{
    $q6="INSERT INTO `tbl_cartmaster` VALUES(NULL,'$cust_id','$amount','Pending')";
    $ids=insert($q6);
    $q4="INSERT INTO `tbl_cartchild` VALUES(NULL,'$ids','$add_cart','1','$amount',CURDATE())";
    insert($q4);
    alert("Successfully Carted");
    return redirect("customer_cart.php");

  }
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
          <div class="image col-lg-6" style='background-image: url("<?php echo $var1[0]['item_image']; ?>");' data-aos="fade-right"></div>
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-receipt"></i>
              <h4>Brand : <?php echo $var1[0]['item_name']; ?></h4>
              <!-- <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> -->
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-cube-alt"></i>
              <h4>Category : <?php echo $var1[0]['cat_name']; ?></h4>
              <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-images"></i>
              <h4>Description : <?php echo $var1[0]['description']; ?></h4>
              <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Stock : <?php echo $var1[0]['stock']; ?></h4>
              <!-- <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p> -->
            </div>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              <i class="bx bx-shield"></i>
              <h4>Price : <?php echo $var1[0]['rate']; ?></h4>
              <!-- <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p> -->
            </div>
            <br>
            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
              
             <p><a href="?add_cart=<?php echo $var1[0]['item_id']; ?>&amount=<?php echo $var1[0]['rate']; ?>&item_id=<?php echo $item_id; ?>" class="btn btn-warning">Add to Cart</a>
             <a href="" class="btn btn-success">Buy Now</a></p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


<?php include 'footer.php'; ?>