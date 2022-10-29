<?php include 'admin_header.php';

if(isset($_POST['reg'])) 
{  
  extract($_POST);
   $q1="insert into tbl_vendor values(null,'$Fname','$uname','$phn','pending')";
  insert($q1);
 return redirect("addvendor.php");

}
 ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">
<H4>CREATE VENDOR ACCOUNT</H4>
</font>
<font size="4" face="Lato">
<form method="post">
<table align="center" cellpadding=20  style="color: #FFC541">
        <tr>
   <td> NAME :</td>
    <td><input type="text" name="Fname" class="form-control"></td>
     </tr>
     
    <tr>
  <td>EMAIL : </td>
  <td><input type="email" name="uname" class="form-control"></td>
  </tr>

   <tr>
    <td>MOBILE NUMBER :</td>
    <td> <input type="number" name="phn"></td>
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
<h4>Vendor Details</h4>
  <table class="table" style="width: 1300px">
    <tr>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>MOBILE NUMBER</th>    
    </tr>
     
     <?php 
     $q=" SELECT * FROM `tbl_vendor`";
      $res11=select($q);
        foreach ($res11 as $row) { ?>

          <tr>
            <td><?php echo $row['vendor_name']; ?></td>
            <td><?php echo $row['vaendor_email']; ?></td>
            <td><?php echo $row['vendor_phone']; ?></td>
          </tr>

<?php 
}
?>
  </table>
</center>



<?php include 'footer.php'; ?>