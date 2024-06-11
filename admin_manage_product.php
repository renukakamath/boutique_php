<?php include 'seller_header.php';



if(isset($_POST['sub'])){
    $dir = "uploads/";
  $file = basename($_FILES['img']['name']);
  $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  $target = $dir.uniqid("images_").".".$file_type;
  if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
  {
        extract($_POST);
        $q="insert into product values(null,'$subctg', '$product', '$model','$materials', '$details','$target', '0', '0','0')";
        insert($q);
      
        return redirect("admin_manage_product.php");
    }
    else
    {
        echo "file uploading error occured";
    }
    



}





if(isset($_GET['did'])){
    extract($_GET);
    $q="delete from product where product_id='$did' ";
    delete($q);
  return redirect("admin_manage_product.php");
}





?>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" style="height: 1000px" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">

<?php 
if(isset($_GET['uid'])){
   extract($_GET);





if(isset($_POST['update'])){
    $dir = "uploads/";
    $file = basename($_FILES['img']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target = $dir.uniqid("images_").".".$file_type;
    if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
    {
        extract($_POST);
        echo$q="update  product set category_id='$subctg', product_name='$product',model='$model',material='$materials',details='$details', photo='$target' where product_id='$uid'";
        update($q);
      
        return redirect("admin_manage_product.php");
    }
    else
    {
        echo "file uploading error occured";
    }
    



}


?>
<center>

<h1  style="color: #FFC541">Update Products</h1>


<form  method="post" enctype="multipart/form-data">
<?php 
    $q1="select * from product  inner join category using (category_id) where product_id='$uid'";
    $ven=select($q1);

    $i=1;
    foreach($ven as $r){
    ?>
<table class="table" style="width: 500px;color: white">
<tr>
    <th> Category </th>
    <td><select name="subctg" id="" class="form-control">
    <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_name'] ?></option>
 
    <?php 
    $q="select * from category";
    $res=select($q);

    $i=1;
    foreach($res as $row){
    ?>
        <option value="<?php echo $row['category_id']?>"><?php echo $row['category_name']?></option>
       <?php }?>
    </select></td>
</tr>

<tr>
    <th>Product </th>
    <td><input type="text" value="<?php echo $r['product_name'] ?>" class="form-control" required class="form-control" name="product" id=""></td>
</tr>
<tr>
    <th>Model </th>
    <td><input type="text" value="<?php echo $r['model'] ?>" class="form-control" required class="form-control" name="model" id=""></td>
</tr>


<tr>
    <th>Materials </th>
    <td><input type="text" value="<?php echo $r['material'] ?>" class="form-control" required class="form-control" name="materials" id=""></td>
</tr>

<tr>
    <th>Details </th>
    <td><input type="text" value="<?php echo $r['details'] ?>" class="form-control" required class="form-control" name="details" id=""></td>
</tr>
<tr>
    <th>Image </th>
    <td><img src="<?php echo $r['photo'] ?>" width="50" class="form-control" height="50" alt=""></td>
</tr>
<tr>
    <th></th>
    <td><input type="file" name="img" id=""></td>
</tr>


 
<tr>
    <td colspan="2" align="center">
        <input type="submit" class="btn btn-success" value="submit" name="update" id="">
    </td>
</tr>
</table>
<?php }?>
</form>

</center>

<?php }else{?>
    <center>
<h1  style="color: #FFC541">Add Products</h1>


<form  method="post" enctype="multipart/form-data">

<table class="table" style="width: 500px;color: #FFC541" >
<tr>
    <th > Category </th>
    <td><select name="subctg" id="" class="form-control">
    
 
    <?php 
    $q="select * from category";
    $res=select($q);

    $i=1;
    foreach($res as $row){
    ?>
        <option value="<?php echo $row['category_id']?>"><?php echo $row['category_name']?></option>
       <?php }?>
    </select></td>
</tr>

<tr>
    <th>Product </th>
    <td><input type="text" class="form-control" required class="form-control" name="product" id=""></td>
</tr>
<tr>
    <th>Model </th>
    <td><input type="text"  class="form-control" required class="form-control" name="model" id=""></td>
</tr>


<tr>
    <th>Materials </th>
    <td><input type="text"  class="form-control" required class="form-control" name="materials" id=""></td>
</tr>

<tr>
    <th>Details </th>
    <td><input type="text"  class="form-control" required class="form-control" name="details" id=""></td>
</tr>

<tr>
    <th>Image</th>
    <td><input type="file" name="img" id=""></td>
</tr>


 
<tr>
    <td colspan="2" align="center">
        <input type="submit" class="btn btn-success" value="submit" name="sub" id="">
    </td>
</tr>
</table>
</form>
<?php }?>


</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


<h3>View Products</h3>
 <table class="table"  style="width: 1200px;color: black" >
    <tr align="center">
        <th></th>
        <th>Product</th>
      <th>Model</th>
      <th>Materials</th>
      <th>Details</th>
        <th> category</th>
      
        <th>quantity</th>
        <th>rate</th>
    </tr>
    <?php 
    $q="select * from product  inner join category using (category_id) ";
    $ven=select($q);

    $i=1;
    foreach($ven as $row){
    ?>
    <tr align="center">
        <td><a href="<?php echo $row['photo'] ?>"><img width="100" height="100" src="<?php echo $row['photo'] ?>" alt="image"></a></td>
        <td><?php echo $row['product_name']?></td>
        <td><?php echo $row['model']?></td>
         <td><?php echo $row['material']?></td>
          <td><?php echo $row['details']?></td>
        <td><?php echo $row['category_name']?></td>
     
      
        <td><?php echo $row['stock']?></td>
        <td><?php echo $row['sellingprice'] ?></td>
        <td><a class="btn btn-success" href="?&uid=<?php echo $row['product_id']?>">update</a></td>
        <td><a class="btn btn-danger" href="?&did=<?php echo $row['product_id']?>">delete</a></td>

    </tr>
    <?php }?>
</table>
</center>
<?php include 'footer.php' ?>
