<?php include 'public_header.php';

if(isset($_POST['reg'])) 
{
  extract($_POST);
  $qq="SELECT * FROM `tbl_login` WHERE `Username`='$uname' ";
	$res=select($qq);
    if(sizeof($res)>0){
        alert("Username Already Exist. Please Choose Another");
        return redirect("sign.php");
    }
    else{
        $q="insert into tbl_login values('$uname','$pass','customer','pending') ";
        $id=insert($q);
         $q1="insert into tbl_customer values(null,'$uname','$Fname','$Lname','$cit','$dist','$pin','$phn','$GENDER','pending','$dat')";
        insert($q1);
        alert("Successfully Registered");
        return redirect("login.php");
    }

}

 ?>




  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="min-height: 1200px;">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <!-- <h1 >SIGN UP</h1> -->


<font size="4" face="Lato"  style="color: #FFC541">
CREATE ACCOUNT
</font>
<font size="4" face="Lato">
<form method="post">
<table align="left" cellpadding=20  style="color: #FFC541">
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
    <td> <input type="date" name="dat" max="<?php echo date("Y-m-d"); ?>" class="form-control"></td>
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
    <td> <input type="text" name="cit" class="form-control" >
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

      

      <!-- <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a class="nav-link scrollto " href="men.php">MEN</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a class="nav-link scrollto " href="women.php">WOMEN</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a class="nav-link scrollto " href="kids.php">KIDS</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a class="nav-link scrollto " href="unisex.php">UNISEX</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a class="nav-link scrollto " href="other.php>">OTHER ACCESSORIES</a></h3>
          </div>
        </div>
      </div> -->

    </div>
  </section><!-- End Hero -->

  <main id="main">

 
         

<?php include 'footer.php' ?> 