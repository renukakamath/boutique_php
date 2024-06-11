<?php include 'admin_header.php';

if (isset($_GET['aid'])) {
   extract($_GET);
   $Q="update bookings set status='Accept' where booking_id='$aid'";
   update($Q);
}


if (isset($_GET['did'])) {
   extract($_GET);
   $Q="update bookings set status='Delivery' where booking_id='$aid'";
   update($Q);
}





?>

<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 300px;">
    <div class="container" data-aos="fade-up">
      <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">View Bookings</h1>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          
        </div>
      </div>
    </div>
  </section>
 <center>

     
   


    <table class="table"  style="width: 1200px  ;color: #FFC541" >
        <tr align="center">
      
            <tr>
                
                <th></th>
                <th>Customer</th>
            <th>Category</th>
         
            <th>Product</th>
           
         
            <th>Amount</th>
      <th>Status</th>
            
        </tr>
            
    
        </tr>

            <?php 
            $q="select * from bookings inner join user using (user_id) inner join product using (product_id) inner join category using (category_id) where  status='paid'";
            $res=select($q);

            $i=1;
            foreach($res as $row){
            ?>
         <tr align="center">
         <td><a href="<?php echo $row['photo'] ?>"><img width="100" height="100" src="<?php echo $row['photo'] ?>" alt="image"></a></td>
         <td><?php echo $row['first_name'] ?></td>
        <td><?php echo $row['category_name'] ?></td>
                
                <td><?php echo $row['product_name'] ?></td>
              
               
                <td><?php echo $row['price'] ?></td>
              <td><?php echo $row['status'] ?></td>

              <?php 
               if ($row['status']=="Paid") {?>
               <td><a class="btn btn-success" href="?aid=<?php echo $row['booking_id'] ?>">Accept</a></td>\
               <td><a class="btn btn-success" href="bookviewpayment.php?bid=<?php echo $row['booking_id'] ?>">View Payment</a></td>
             <?php   }else{?>

                <td><a class="btn btn-success" href="?did=<?php echo $row['booking_id'] ?>">Delivery</a></td>

          <?php    }

               ?>
              
            

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