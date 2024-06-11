<?php include 'customer_header.php';



extract($_GET);







if (isset($_GET['aid'])) {
 extract($_GET);


 $q="update custom_designs set status='Accept' where custom_design_id='$aid'";
 update($q);
 alert('successfully');
 return redirect("Customer_viewdesignSample.php?rid=$rid");

}


if (isset($_GET['raid'])) {
 extract($_GET);

 $q="update custom_designs set status='Reject' where custom_design_id='$rid'";
 update($q);
  alert('successfully');
 return redirect("Customer_viewdesignSample.php?rid=$rid");

}


?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 300px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">View Design Sample</h1>


</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   
    <table class="table"  style="width: 1200px;color: #FFC541" >
        <tr align="center">
      
            <tr>
                
            
                <th>Details</th>
            
         
            <th>Materials</th>
           
            <th>Price</th>
            <th>Image</th>
      <th>Date Time</th>
      <th>Status</th>
                
        </tr>
            
    
        </tr>

            <?php 
            $q="SELECT * FROM `custom_designs` INNER JOIN `requests` USING (`request_id`) WHERE `request_id`='$rid' ";
            $res=select($q);

            $i=1;
            foreach($res as $row){
            ?>
         <tr align="center">
        
         <td><?php echo $row['details'] ?></td>
        
                
                <td><?php echo $row['material'] ?></td>
              
                <td><?php echo $row['sellingprice'] ?></td>
                <td><img src="<?php echo $row['image'] ?>" width="100" height="100"></td>
              <td><?php echo $row['date_time'] ?></td>
              <td><?php echo $row['status'] ?></td>


              <td><a class=" btn btn-success" href="?aid=<?php echo $row['custom_design_id'] ?>">Accept</a></td>
              <td><a  class=" btn btn-success" href="?raid=<?php echo $row['custom_design_id'] ?>">Reject</a></td>


              <?php 


             if ($row['status']=="Accept") {?>
              <td><a  class=" btn btn-success" href="makepayment.php?cid=<?php echo $row['custom_design_id'] ?>&amt=<?php echo $row['sellingprice'] ?>">Make Payment</a></td>
           <?php  }

               ?>

              <td></td>

                             
    


        </tr>
        <?php }?>
    </table>

        </div>

      </div>
    </section><!-- End Services Section -->
<?php include 'footer.php'?>