<?php include 'admin_header.php';




if (isset($_GET['did'])) {
   extract($_GET);
   $Q="update custom_designs set status='Delivery' where request_id='$did'";
   update($Q);
}





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

   
    <table class="table"  style="width: 1200px;color: #FFC541" >
        <tr align="center">
      
            <tr>
                
            
                <th>Customer</th>
            
         
            <th>Product</th>
           
            <th>title</th>
            <th>description</th>
      <th>Budget</th>
     
     
    
            
        </tr>
            
    
        </tr>

            <?php 
            $q="SELECT * FROM requests INNER JOIN USER USING (user_id) ";
            $res=select($q);

            $i=1;
            foreach($res as $row){
            ?>
         <tr align="center">
        
         <td><?php echo $row['first_name'] ?></td>
        
                
           
              
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['description'] ?></td>
              <td><?php echo $row['budget'] ?></td>
                                                         <td><?php echo $row['date_time'] ?></td>

                             
             
              <td><a class="btn btn-success" href="?did=<?php echo $row['request_id'] ?>">Delivery</a></td>

              <td><a class="btn btn-success" href="sendsampledesign.php?rid=<?php echo $row['request_id'] ?>">Sample Design</a></td>

               <td><a class="btn btn-success" href="shop_viewpayment.php?rid=<?php echo $row['request_id'] ?>">View Payment</a></td>


        </tr>
        <?php }?>
    </table>

        </div>

      </div>
    </section><!-- End Services Section -->
<?php include 'footer.php'?>