<?php include 'public_header.php';

if(isset($_POST['submit'])){

    extract($_POST);
    
    
  $q="select * from login where username='$uname' and password='$pasw'";
    $res=select($q);
    if (sizeof($res) > 0){
        $_SESSION['lid']  = $res[0]['login_id'];
        $lid=$_SESSION['lid'];
         
      if($res[0]['user_type'] == 'shop'){
        $q="select * from shop where login_id='$lid'";
        $val = select($q);
        if (sizeof($val) > 0){
            $_SESSION['sid']=$val[0]['shop_id'];
            $sid=$_SESSION['sid'];
            alert("login Successfully");
            return redirect("admin_home.php");
        }
    }
    else if($res[0]['user_type'] == 'user'){
        $q="select * from user where login_id='$lid'";
        $val = select($q);
        if (sizeof($val) > 0){
            $_SESSION['user_id']=$val[0]['user_id'];
            $cust_id=$_SESSION['user_id'];
            alert("login Successfully");
            return redirect("customerhome.php");
        }
    }


     else if($res[0]['user_type'] == 'seller'){
        $q="select * from seller where login_id='$lid'";
        $val = select($q);
        if (sizeof($val) > 0){
            $_SESSION['seller_id']=$val[0]['seller_id'];
            $seller_id=$_SESSION['seller_id'];
            alert("login Successfully");
            return redirect("sellerhome.php");
        }
    }

    
}else{
  alert('invalid username and password');
}
}
?>

<style>
input[type='text']{
  color: black;
  
}
label{
  color: black;
  font-weight: 500;
  font-size:medium;
  font-family: serif;
  
}
tr{
  border-bottom: 1px solid transparent;
}
input[type='submit']{
  width: 120px !important;
}
input[type='text'],input[type='password'],input[type='submit']{
  border-radius: 1px !important;
}
#loghead{
  font-weight: 800;
  font-size: 50px !important;
  font-family: "Montserrat", sans-serif;
  font-family: "Open Sans", sans-serif;
  text-shadow: black -1px 0,
                #D5D5D1 2px 0;
}

          </style>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center"   style="height: 1000px">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
<form action="" method="post">
	<center>
	<h1 style="color: #FFC541; ">Login Form</h1>
	<table class="table" style="width: 500px;color: #fff">
	      <tr >
        <td class="form-floating mb-3" >

          <input type="text" class="form-control" id="uname" required name="uname" placeholder="username" >
          <label  for="uname" style="color: #FFC541; ">Username</label>
        </td>
      </tr>
       

     <tr>
       
        <td  class="form-floating ">
        <input type="password" class="form-control" required name="pasw" placeholder="Password" id="passw">
        <label  for="passw" style="color: #FFC541; ">Password</label>
      </td>
      </tr>
           
        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="submit"></td>
        </tr>


        <td colspan="2">
          <a href="customer_registration.php">Don't Have Account? Sign Up</a>
        </td>
    </table>
	</center>
</form>


</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

<?php include "footer.php"; ?>