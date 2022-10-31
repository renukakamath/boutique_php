<?php include 'admin_header.php';

if(isset($_POST['reg'])) 
{  
  extract($_POST);
  $dir = "images/";
	$file = basename($_FILES['img']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;
	if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
	{
   $q1="insert into tbl_brand values(null,'$Fname','$target')";
  insert($q1);
 return redirect("admin_manage_brand.php");
    }
}
 ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">
<h4>ADD BRAND </h4>
<br>
</font>
<font size="4" face="Lato">
<form method="post" enctype="multipart/form-data">
<table align="center" cellpadding=20  style="color: #FFC541">
       <tr>
  <td>BRAND:</td>
  <td><input type="text" name="Fname" class="form-control"></td>
    </tr>

    <tr>
			<th style="color: white;font-style: italic;font-size: 20px">File</th>
			<td><input type="file" name="img" required="" class="form-control"></td>
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

<H4>Brand Details</H4>
</font>
<font size="4" face="Lato">
<form method="post">

  <table class="table" style="width: 1300px">
    <tr>
      <th> BRAND NAME</th>
    </tr>

     <?php 
     $q=" SELECT * FROM `tbl_brand`";
      $res11=select($q);
        foreach ($res11 as $row) { ?>

          <tr>
            <td><?php echo $row['brand_name']; ?></td>
          </tr>

<?php 
}
?>
  </table>
</center>



<?php include 'footer.php'; ?>