<?php include 'public_header.php';

if(isset($_POST['sub'])){
  extract($_POST);

if ($types=="shop") {
         $q="INSERT INTO `login` VALUES(null,'$uname','$pss','shop')";
          $ids=insert($q);
          $qry="INSERT INTO `shop` VALUES(null,'$ids','$fname','$place','$address','$pincode','$phone','$email')";
          insert($qry);

           alert('registration successful');
            return redirect("customer_registration.php");

 }elseif ($types=="user") {


                $q="INSERT INTO `login` VALUES(null,'$uname','$pss','user')";
                $ids=insert($q);
                $qry="INSERT INTO `user` VALUES(null,'$ids','$fname','$place','$address','$pincode','$phone','$email')";
                insert($qry);

   alert('registration successful');
    return redirect("customer_registration.php");
             
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
<section id="hero" class="d-flex align-items-center justify-content-center"  style="height: 1000px">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">

  <form method="post">

 <h1  style="color: #FFC541">Sign Up</h1>
    <table class="table" style="width: 500px;color:#FFC541" >
<tr>
    <th> </th>


    <td class="form-floating" 

    ><input type="text" required class="form-control" id="fname" placeholder="Shop Name" name="fname" id="">
            <label for="fname"  style="color: #FFC541"> Name</label>
    </td>
</tr>
<tr>
    <th> </th>
    <td class="form-floating"><input type="text" required id="place"  class="form-control"placeholder="Place" name="place" id="">
      <label for="place"  style="color: #FFC541">Place</label></td>
</tr>
<tr>
    <th></th>
    <td  class="form-floating"><input type="text" required id="lname"  class="form-control" placeholder="Address " name="address" id="">
      <label for="lname"  style="color: #FFC541">Address</label></td>
</tr>
<tr>
    <th> </th>
    <td class="form-floating"><input type="number" required id="phone" maxlength="6" pattern="[0-9]{6}" minlength="6"  class="form-control" placeholder="Pincode" name="pincode" id="">
      <label for="pincode"  style="color: #FFC541"> Pincode</label></td>
</tr>
<tr>
    <th> </th>
    <td class="form-floating"><input type="number" required id="phone" maxlength="10" pattern="[0-9]{10}" minlength="10"  class="form-control" placeholder="Phone" name="phone" id="">
      <label for="phone"  style="color: #FFC541"> Phone</label></td>
</tr>
<tr>
    <th></th>
    <td class="form-floating"><input type="email" required id="email"  class="form-control" placeholder="Email" name="email" id="">
      <label for="email"  style="color: #FFC541"> Email</label></td>
</tr>


  <tr>
    <th></th>
    <td class="form-floating"><input type="text" required class="form-control" id="uname"  placeholder="username" name="uname" id="">
      <label for="uname"  style="color: #FFC541"> username</label></td>
</tr>
  <tr>
    <th></th>
    <td class="form-floating"><input type="text" required class="form-control" id="pss"  placeholder="Password" name="pss" id="">
      <label for="pss"  style="color: #FFC541">Password</label></td>
</tr>
<tr>




<input type="radio" name="types" value="user" id="option-1" checked>I'm a User
    

                                
                        
  </tr>
<tr>
    <td colspan="2" align="center">
        <input type="submit" class="btn btn-success"  name="sub" id="">
    </td>
</tr>



</table>

</form>



</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">



<?php include 'footer.php'?>