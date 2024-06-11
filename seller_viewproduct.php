<?php include 'seller_header.php';
 $seller_id=$_SESSION['seller_id'];
extract($_GET);





?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 300px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">View Request</h1>


</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

<h3>View Products</h3>
 <table class="table"  style="width: 1200px;color: black" >
    <tr align="center">
        <th></th>
        <th>Product</th>
      <th>Model</th>
      <th>Materials</th>
      <th>Details</th>
        <th> category</th>
      
        <th>quantity</th>
        <TH>Rate</TH>
    </tr>
    <?php 
    $q="select * from tbl_purchasechild inner  join  tbl_purchasemaster using (purchase_mid) inner join product using (product_id) inner join category using (category_id) where seller_id='$seller_id' group by product_id";
    $ven=select($q);

    $i=1;
    foreach($ven as $row){
    ?>
    <tr align="center">
        <td><a href="<?php echo $row['photo'] ?>"><img width="100" height="100" src="<?php echo $row['photo'] ?>" alt="image"></a></td>
        <td><?php echo $row['product_name']?></td>
        <td><?php echo $row['model']?></td>
         <td><?php echo $row['material']?></td>
          <td><?php echo $row['details']?></td>
        <td><?php echo $row['category_name']?></td>
     
      
        <td><?php echo $row['stock']?></td>
        <td><?php echo $row['price'] ?></td>
       
        <td><a class="btn btn-danger" href="add_admount.php?&pid=<?php echo $row['product_id']?>">Add amount</a></td>

    </tr>
    <?php }?>
</table>
</center>
<?php include 'footer.php' ?>
