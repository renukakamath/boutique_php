<?php include 'admin_header.php';


 ?>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 300px;">
    <div class="container" data-aos="fade-up">
    	<h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Time Will Explain..</h1>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          
        </div>
      </div>
    </div>
  </section>
 <center>


 <div class="container">
<H4 >Purchase Details</H4>

<font size="4" face="Lato">
<form method="post">

  <table class="table" style="width: 1300px;color: white">
  <thead class="table thead-dark">
    <tr>
      <th> PRODUCT NAME</th>
      <th>CATEGORY NAME</th>
      <th>TYPE NAME</th>
      <th>BRAND NAME</th>
      <th>STOCK</th>
    </tr>
    </thead>
    <tbody class="table table-hover">
     <?php 
      $q=" SELECT * FROM `tbl_item` inner join tbl_brand using(brand_id) inner join tbl_type using(type_id) inner join tbl_category using(cat_id) WHERE `stock` <20";
      $res11=select($q);
        foreach ($res11 as $row) { ?>

          <tr>
            <td><?php echo $row['item_name']; ?></td>
            <td><?php echo $row['cat_name']; ?></td>
            <td><?php echo $row['type_name']; ?></td>
            <td><?php echo $row['brand_name']; ?></td>
            <td><?php echo $row['stock']; ?></td> 
 <?php 
          

          if ($row['stock']<20) {
          	?>
           <td>
          		<a href="admin_purchase_product.php?item=<?php echo $row['item_id'] ?>&rate=<?php echo $row['rate'] ?>" class="btn btn-info">PURCHASE</a>
          	</td>
        <?php
         }


            ?>
           
        </tr>
    <?php } ?>
    </tbody>
    </table>
</form>
</font></center>

</div>
<?php include 'footer.php'; ?>