<?php include 'admin_header.php'?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 300px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">View Ratings</h1>


</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

   
    <table class="table"  style="width: 1200px;color: #FFC541" >
        
      
            <tr>
                
              
                <th>Customer</th>
            
         
            <th>Shop name</th>
           
            <th>Rate</th>
            <th>Review</th>
            <th>date & Time</th>
     
            
        </tr>
            
    
        </tr>

            <?php 
            $q="SELECT * FROM ratings INNER JOIN shop USING (shop_id)INNER JOIN USER USING (user_id)  ";
            $res=select($q);

            $i=1;
            foreach($res as $row){
            ?>
         <tr>



        
         <td><?php echo $row['first_name'] ?></td>
        
                
                <td><?php echo $row['shop_name'] ?></td>
              
                <td><?php echo $row['rate'] ?></td>
                <td><?php echo $row['review'] ?></td>
                     <td><?php echo $row['date_time'] ?></td>
             
             


        </tr>
        <?php }?>
    </table>

      </div>

      </div>
    </section><!-- End Services Section -->
<?php include 'footer.php'?>