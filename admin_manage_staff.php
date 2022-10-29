<?php include 'admin_header.php';    

if(isset($_POST['reg'])) 
{
  extract($_POST);

  $qw="SELECT * FROM `tbl_login` WHERE `username`='$uname'";
  $rt=select($qw);
  if(sizeof($rt)>0){
  	alert("Username Already Exist");
  }
  else{
    $q="insert into tbl_login values('$uname','$pass','staff','pending') ";
  $id=insert($q);
   echo $q1="insert into tbl_staff values(null,'$uname','$Fname','$Lname','$cit','$dist','$pin','$phn','$GENDER','$dat','pending')";
  insert($q1);
 //return redirect("addstaff.php");
}
if(isset($_GET['id']))
{
	extract($_GET);
	$q9="update tbl_staff set ststus='deactive' where staff_id='$id'";
	update($q9);
}
if(isset($_GET['id1']))
{
	extract($_GET);
	$q9="update tbl_staff set ststus='deactive' where staff_id='$id1'";
	update($q9);
}

}
 ?>


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" style="min-height:1200px">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
         
<font size="4" face="Lato"  style="color: #FFC541">
CREATE STAFF ACCOUNT
</font>
<font size="4" face="Lato">
<form method="post">
<table align="center" cellpadding=20  style="color: #FFC541">
			<tr>
   <td> FIRST NAME :</td>
    <td><input type="text" name="Fname" class="form-control"></td>
     </tr>
    <tr>
	<td>LAST NAME : </td>
	<td><input type="text" name="Lname" class="form-control"></td>
	</tr>
	<tr>
    <td>DATE OF BIRTH :</td>
    <td> <input type="date" name="dat" class="form-control"></td>
    </tr>
     <tr>
  <td>USERNAME : </td>
  <td><input type="email" name="uname" class="form-control"></td>
  </tr>
   <tr>
  <td>PASSWORD : </td>
  <td><input type="password" name="pass" class="form-control"></td>
  </tr>
  <tr>
	<tr>
	<td>GENDER :</td>
	<td><input type="radio"  name="GENDER" value="male">Male<input type="radio"  name="GENDER" value="female">Female<input type="radio"  name="GENDER" value="other">Other</td>
    </tr>
    <tr>
   <td> SELECT DISTRICT :</td>
   <td> <select name="dist" class="form-control">
        	<option value>--SELECT DISTRICT--</option>
        	<option value="ALPY">ALAPPUZHA</option>
        	<option value="EKM">ERNAKULAM</option>
        	<option value="IDI">IDUKKI</option>
        	<option value="KAN">KANNUR</option>
        	<option value="KAZ">KASARGOD</option>
        	<option value="KOL">KOLLAM</option>
        	<option value="kOT">KOTTAYAM</option>
          <option value="KOZ">KOZHIKODE</option>
          <option value="MAL">MALAPPURAM</option>
          <option value="PAL">PALLAKAD</option>
          <option value="PAT">PATHANAMTHITTA</option>
          <option value="TVM">TRIVANDRUM</option>
          <option value="THR">THRISSUR</option>
          <option value="WAY">WAYANAD</option>
        </select>
    </td>
    </tr>
    <tr>
    <td>CITY :</td>
    <td> <input type="text" name="cit" class="form-control">
    </td>
    </tr>
    <tr>
    <td>PINCODE:</td>
    <td> <input type="number" name="pin" class="form-control"></td>
    </tr>
    <tr>
    <td>MOBILE NUMBER :</td>
    <td> <input type="number" name="phn" class="form-control"></td>
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
	<h1>Staff Details</h1>
	<table class="table" style="width: 1300px">
		<tr>
			<th>STAFF NAME</th>
			<th>STAFF CITY</th>
			<th>STAFF DISTRICT</th>
		    <th>STAFF PINCODE</th>
		    <th>STAFF PHONE</th>
		    <th>GENDER</th>
		    <th>DOB</th>
		</tr>

		<?php 
			$q=" SELECT *,CONCAT(`staff_fname`,' ',`staff_lname`) AS st_name FROM `tbl_staff`";
			$res11=select($q);
			
				foreach ($res11 as $row) { ?>

					<tr>
						<td><?php echo $row['st_name']; ?></td>
						<td><?php echo $row['staff_city']; ?></td>
						<td><?php echo $row['staff_dist']; ?></td>
						<td><?php echo $row['staff_pin']; ?></td>
						<td><?php echo $row['staff_phone']; ?></td>
						<td><?php echo $row['staff_gender']; ?></td>
						<td><?php echo $row['DOB']; ?></td>
						<td><?php echo $row['ststus']; ?></td>
						 <?php if($row['ststus']=='active')
          {
          	?>
          	<td>
          		<a href="?id=<?php echo $row['staff_id']; ?>"class="btn btn-danger" >DEACTIVE</a>
          	</td>
          	<?php
          }
          elseif($row['ststus']=='deactive')
          {
          	?>
          	<td>
          		<a href="?id1=<?php echo $row['staff_id']; ?>"class="btn btn-success" >ACTIVE</a>
          	</td>
          	<?php
          }?>

                        
                        </tr>
					
			<?php	}
			
		 ?>
	</table>
</center>
<?php include 'footer.php'; ?>