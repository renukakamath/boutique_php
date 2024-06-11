<?php include 'admin_header.php';
extract($_GET);

?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 300px;">
    <div class="container" data-aos="fade-up">
      <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">View Payment</h1>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          
        </div>
      </div>
    </div>
  </section>
 <center>



    
    <table class="table"  style="width: 1200px;color: #FFC541" >
        <tr align="center">
      
            <tr>
                
            
                <th>Customer</th>
            
         
            <th>Product</th>
           
            <th>Booking Type</th>
            <th>date & Time</th>
     
            
        </tr>
            
    
        </tr>

            <?php 
            $q="select * from payment inner join bookings using (booking_id) inner join product using (product_id)inner join user using (user_id) where booking_id='$bid'  ";
            $res=select($q);

            $i=1;
            foreach($res as $row){
            ?>
         <tr align="center">
        
         <td><?php echo $row['first_name'] ?></td>
        
                
                <td><?php echo $row['product_name'] ?></td>
              
                <td><?php echo $row['book_type'] ?></td>
                <td><?php echo $row['date_time'] ?></td>
             
             


        </tr>
        <?php }?>
    </table>
     
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
<?php include 'footer.php'?>