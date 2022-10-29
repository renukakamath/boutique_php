<?php include 'admin_header.php';

if(isset($_POST['reg'])) 
{  
  extract($_POST);
  $q1="insert into tbl_category values(null,'$Fname','$descp')";
  insert($q1);
 return redirect("addcategory.php");

}
 ?>

  
 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">
<H4>ADD CATEGORY </H4>
<BR>
</font>
<font size="4" face="Lato">
<form method="post">
<table align="center" cellpadding=20  style="color: #FFC541">
       <tr>
  <td>CATOGERY:</td>
  <td><input type="text" name="Fname" class="form-control"></td>
    </tr>
     
    <tr>
  <td> CATEGORY DESCRIPTION : </td>
  <td><input type="text" name="descp" class="form-control"></td>
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

<H4>Category Details</H4>
</font>
<font size="4" face="Lato">
<form method="post">

  <table class="table" style="width: 1300px">
    <tr>
      <th> CATEGORY NAME</th>
      <th>CATEGORY DESCRIPTION</th>
         </tr>

     <?php 
     $q=" SELECT * FROM `tbl_category`";
      $res11=select($q);
        foreach ($res11 as $row) { ?>

          <tr>
            <td><?php echo $row['cat_name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            
          </tr>

<?php 
}
?>
  </table>
</center>



<?php include 'footer.php'; ?>