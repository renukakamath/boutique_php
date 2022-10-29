<?php include 'admin_header.php';

if(isset($_POST['reg'])) 
{
  extract($_POST);

  $qw="SELECT * FROM `tbl_courier` WHERE `username`='$uname'";
  $rt=select($qw);
  if(sizeof($rt)>0){
  	alert("Username Already Exist");
  }
  else{
   $q="insert into tbl_login values('$uname','$pass','Courier','pending') ";
  $id=insert($q);
   $q1="insert into tbl_courier values(null,'$uname','$Fname','$phn','$loc')";
  insert($q1);
 return redirect("addcourier.php");
}
}
 ?>

 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">
ADD COURIER
</font>
<font size="4" face="Lato">
<form method="post">
<table align="center" cellpadding=20  style="color: #FFC541">
			<tr>
   <td> COURIER NAME :</td>
    <td><input type="text" name="Fname" class="form-control"></td>
     </tr>
  
  <td>USERNAME : </td>
  <td><input type="email" name="uname" class="form-control"></td>
  </tr>
   <tr>
  <td>PASSWORD : </td>
  <td><input type="password" name="pass" class="form-control"></td>
  </tr>
  
    <tr>
    <td>MOBILE NUMBER :</td>
    <td> <input type="number" name="phn"></td>
    </tr>
    
     <tr>
      <td>LOCATION :</td>
     <td><input type="text" name="loc" class="form-control"></td>
     </tr>

     <tr align=center>
    	<td colspan="3">  <input  type="submit" name="reg" value="Create" class="btn btn-success">
    </tr>

</table>
</form>
</font>



</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


<center>
 <h4>Courier Details</h4>
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
			 
                        
                        </tr>
					
			<?php	}
			
		 ?>
	</table>
</center>
<?php include 'footer.php'; ?>