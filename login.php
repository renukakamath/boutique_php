<?php include "public_header.php";
if(isset($_POST['login'])){
	extract($_POST);
	$q="SELECT * FROM `tbl_login` WHERE `Username`='$uname' AND `Password`='$passw'";
	$res=select($q);
	if(sizeof($res)>0){
		$_SESSION['user_type']=$res[0]['user_type'];
		if($res[0]['user_type']=="admin"){
			return redirect("admin_home.php");
		}
		else if ($res[0]['user_type']=="staff"){
			$q1="SELECT * FROM `tbl_staff` WHERE `username`='$uname'";
			$ress=select($q1);
			if(sizeof($ress)>0){
				$_SESSION['staff_id']=$ress[0]['staff_id'];
				return redirect("admin_home.php");
			}
			
		}
		else if ($res[0]['user_type']=="Customer"){
			$q1="SELECT * FROM `tbl_customer` WHERE `username`='$uname'";
			$ress=select($q1);
			if(sizeof($ress)>0){
				$_SESSION['cust_id']=$ress[0]['cust_id'];
				return redirect("customerhome.php");
			}
			
		}
		else if ($res[0]['user_type']=="Courier"){
			
			$q1="SELECT * FROM `tbl_courier` WHERE `username`='$uname'";
			$ress=select($q1);
			if(sizeof($ress)>0){
				$_SESSION['courier_id']=$ress[0]['courier_id'];
				return redirect("courierhome.php");
			}
		}
		alert("Login Success");
}
else{
	alert("Invalid Username Or Password");

}
}

?>


 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center justify-content-center" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
        <!-- <h1 >SIGN UP</h1> -->


<form action="" method="post">
	<center>
	<h1>Login Form</h1>
	<table class="table" style="width: 500px;color: #fff">
		<tr>
			<th>Username</th>
			<td><input type="text" name="uname" class="form-control" id=""></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="passw" class="form-control" id=""></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="login" class="btn btn-success" value="LOGIN" id=""></td>
		</tr>
	</table>
	</center>
</form>


</div>
      </div>

	  </div>
  </section><!-- End Hero -->

  <main id="main">
<?php include "footer.php"; ?>