<?php include 'admin_header.php';
extract($_GET);

?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 300px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">View Payment</h1>


</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   
    <table class="table"  style="width: 1200px;color: #FFC541" >
        <tr align="center">
      
            <tr>
                
             
                <th>Customer</th>
            
         
            <th>Title</th>
            <th>Description</th>
           
            <th>Booking Type</th>
            <th>date & Time</th>
     
            
        </tr>
            
    
        </tr>

            <?php 
            $q="SELECT * FROM `payment` INNER JOIN `requests` ON `payment`.`booking_id`=`requests`.`request_id` inner join user using (user_id)  WHERE `book_type`='sample design'  AND request_id='$rid' ";
            $res=select($q);

            $i=1;
            foreach($res as $row){
            ?>
         <tr align="center">
        
         <td><?php echo $row['first_name'] ?></td>
        
                
                <td><?php echo $row['title'] ?></td>
                <td><?php echo $row['description'] ?></td>
              
                <td><?php echo $row['book_type'] ?></td>
                <td><?php echo $row['date_time'] ?></td>
             
             


        </tr>
        <?php }?>
    </table>

          </div>

      </div>
    </section><!-- End Services Section -->
<?php include 'footer.php'?>