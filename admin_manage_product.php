<?php include 'admin_header.php';

if(isset($_POST['Login'])) 
{
  extract($_POST);

  $dir = "images/";
	$file = basename($_FILES['imgg']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("images_").".".$file_type;
	if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
	{
  
    $q1="insert into tbl_item values(null,'$cat','$typ','$brd','$Fname','$stk','$des','$target','active','$price')";
  insert($q1);
  return redirect("admin_manage_product.php");
    }


}

if(isset($_GET['id']))
{
	extract($_GET);
	$q9="update tbl_item set item_status='deactive' where item_id='$id'";
	update($q9);
}
if(isset($_GET['id1']))
{
	extract($_GET);
	$q9="update tbl_item set item_status='active' where item_id='$id1'";
	update($q9);
}




 ?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" style="min-height:1050px">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">

        <font size="4" face="Lato"  style="color: #FFC541">
ADD PRODUCT
</font>
<font size="4" face="Lato">
<form method="post" enctype="multipart/form-data">
<table align="center" cellpadding=20  style="color: #FFC541">
			<tr>
   <td> PRODUCT NAME :</td>
    <td><input type="text" name="Fname" class="form-control"></td>
     </tr>
     <tr>
     	<th>CATEGORY NAME</th>
     	<td>
     		<select name="cat"  class="form-control">
     			<option>Select</option>
     			<?php 
     			$q="select * from tbl_category";
     			$res=select($q);
     			foreach ($res as $row) {
     				?>
     				<option value="<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name'] ?></option>
     			<?php 
     		}
     			 ?>
     		</select>
     	</td>
     </tr>
    
	<tr>
     	<th>TYPE NAME</th>
     	<td>
     		<select name="typ"  class="form-control">
     			<option>Select</option>
     			<?php 
     			$q3="select * from tbl_type";
     			$res3=select($q3);
     			foreach ($res3 as $rows) {
     				?>
     				<option value="<?php echo $rows['type_id'] ?>"><?php echo $rows['type_name'] ?></option>
     			<?php 
     		}
     			 ?>
     		</select>
     	</td>
     </tr>
	
	    <tr>
     	<th>BRAND NAME</th>
     	<td>
     		<select name="brd"  class="form-control">
     			<option>Select</option>
     			<?php 
     			$q4="select * from tbl_brand";
     			$res4=select($q4);
     			foreach ($res4 as $rowss) {
     				?>
     				<option value="<?php echo $rowss['brand_id'] ?>"><?php echo $rowss['brand_name'] ?></option>
     			<?php 
     		}
     			 ?>
     		</select>
     	</td>
     </tr>
	<tr>
	<td>STOCK : </td>
	<td><input type="text" name="stk" class="form-control"></td>
	</tr>
     <tr>
  <td>DESCRIPTION : </td>
  <td><input type="text" name="des" class="form-control"></td>
  </tr>
   <tr>
  <td>IMAGE : </td>
  <td><input type="file" name="imgg" class="form-control"></td>
  </tr>
  <tr>
	<!-- <tr>
	<td>STATUS :</td>
	<td><input type="text" name="st" class="form-control"></td>
    </tr> -->
   
    <tr>
    <td>RATE:</td>
    <td> <input type="text" name="price"  class="form-control"></td>
    </tr>
    
<tr>
	<td colspan="2" align="center"><input type="submit" align="center" class="btn btn-success" value="Add" name="Login"></td>

</tr></table></form></font>
<center>



</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">



<h4>Product Details</h4>
</font>
<font size="4" face="Lato">
<form method="post">

  <table class="table" style="width: 1300px">
    <tr>
      <th> PRODUCT NAME</th>
      <th>CATEGORY NAME</th>
      <th>TYPE NAME</th>
      <th>BRAND NAME</th>
      <th>DESCRIPTION</th>
      <th>STOCK</th>
    </tr>

     <?php 
     $q=" SELECT * FROM `tbl_item` inner join tbl_brand using(brand_id) inner join tbl_type using(type_id) inner join tbl_category using(cat_id)";
      $res11=select($q);
        foreach ($res11 as $row) { ?>

          <tr>
            <td><?php echo $row['item_name']; ?></td>
            <td><?php echo $row['cat_name']; ?></td>
            <td><?php echo $row['type_name']; ?></td>
            <td><?php echo $row['brand_name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['stock']; ?></td>
          <?php if($row['item_status']=='active')
          {
          	?>
          	<td>
          		<a href="?id=<?php echo $row['item_id']; ?>"class="btn btn-danger" >DEACTIVE</a>
          	</td>
          	<?php
          }
          elseif($row['item_status']=='deactive')
          {
          	?>
          	<td>
          		<a href="?id1=<?php echo $row['item_id']; ?>"class="btn btn-success" >ACTIVE</a>
          	</td>
          	<?php
          }?>

          </tr>


<?php 
}
?>
  </table>
</center>
<?php include 'footer.php'; ?>