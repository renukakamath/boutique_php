<?php include 'admin_header.php';
extract($_GET);

if(isset($_GET['assign'])) 
{
  extract($_GET);

   $q="UPDATE `tbl_payment` SET `courier_id`='$assign' WHERE `payment_id`='$payment_id'";
  $id=update($q);
  $qq="UPDATE `tbl_cartmaster` SET `status`='Assigned To Courier' WHERE `cart_mid`='$cart_mid'";
  update($qq);
  alert("Successfully Assigned");
   
 return redirect("admin_view_sales.php");

}
 ?>

 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 300px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Courier Details..</h1>



</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

<br>
<center>
 <!-- <h4>Courier Details</h4> -->
  <table class="table" style="width: 1300px">
    <tr>
      <th>NAME</th>
      <th>MOBILE NUMBER</th>
      <th>LOCATION</th>    
    </tr> 
	
		   
		</tr>

		<?php 
			$q=" SELECT * FROM `tbl_courier`";
			$res11=select($q);
			
				foreach ($res11 as $row) { ?>
					<tr>
						<td><?php echo $row['courier_name']; ?></td>
						<td><?php echo $row['courier_phno']; ?></td>
						<td><?php echo $row['location']; ?></td>
                        <td><a href="?assign=<?php echo $row['courier_id']?>&payment_id=<?php echo $payment_id;?>&cart_mid=<?php echo $cart_mid; ?>" class="btn btn-success">Assign</a></td>
	
                        </tr>
					
			<?php	}
			
		 ?>
	</table>
</center>
<?php include 'footer.php'; ?>