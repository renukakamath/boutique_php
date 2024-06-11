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
      <th>Product</th>
      <th>Model</th>
      <th>Materials</th>
      <th>Details</th>
        <th> category</th>
        <th>rate</th>
       
      <th>STOCK</th>
    </tr>
    </thead>
    <tbody class="table table-hover">
     <?php 
      $q=" SELECT * FROM `product`  inner join category using(category_id) WHERE `price`=0";
      $res11=select($q);
        foreach ($res11 as $row) { ?>

          <tr>
            <td><?php echo $row['product_name']?></td>
        <td><?php echo $row['model']?></td>
         <td><?php echo $row['material']?></td>
          <td><?php echo $row['details']?></td>
        <td><?php echo $row['category_name']?></td>
     
        <td><?php echo $row['price']?></td>
        <td><?php echo $row['stock']?></td>

          

        
         
             <td>
              <a href="admin_purchase_products.php?item=<?php echo $row['product_id'] ?>" class="btn btn-info">Request</a>
            </td> 
       
           
        </tr>
    <?php } ?>
    </tbody>
    </table>
</form>
</font></center>

</div>
<?php include 'footer.php'; ?>