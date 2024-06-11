
<?php  include 'admin_header.php';
extract($_GET);

if (isset($_POST['update'])) {
  extract($_POST);
    $dir = "uploads/";
    $file = basename($_FILES['img']['name']);
    $file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    $target = $dir.uniqid("images_").".".$file_type;
    if(move_uploaded_file($_FILES['img']['tmp_name'], $target))
    {
        extract($_POST);
        $q="insert into custom_designs values(null,'$rid','$details','$materials','$rate','$target',now(),'pending')";
        insert($q);
      
        return redirect("shop_viewcustomerrequest.php");
    }
    else
    {
        echo "file uploading error occured";
    }

}



 ?>


<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center" style="height: 700px;">
    <div class="container" data-aos="fade-up">
      <h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Sample Products</h1>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">

<center>

<h1 class="display-3 text-white mb-4 pb-3 animated slideInDown"></h1>


<form  method="post" enctype="multipart/form-data">

    <table class="table" style="width: 500px;color: #FFC541">

<tr>
    <th>Materials </th>
    <td><input type="text"  class="form-control" required class="form-control" name="materials" id=""></td>
</tr>

<tr>
    <th>Details </th>
    <td><input type="text"  class="form-control" required class="form-control" name="details" id=""></td>
</tr>
<tr>
    <th>Image </th>
   

    <td><input type="file" name="img" id=""></td>
</tr>
<tr>
    <th>Rate</th>
    <td><input type="number" required class="form-control" name="rate" id=""></td>
</tr>


 
<tr>
    <td colspan="2" align="center">
        <input type="submit" class="btn btn-success" value="submit" name="update" id="">
    </td>
</tr>
</table>
</form></center>


   </div>
      </div>
    </div>
  </section>
 <center>

<?php include 'footer.php' ?>