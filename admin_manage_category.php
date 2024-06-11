<?php include 'admin_header.php';

if(isset($_POST['reg'])) 
{  
  extract($_POST);
  echo$q1="insert into category values(null,0,'$Fname','$descp')";
  insert($q1);
 return redirect("admin_manage_category.php");

}


if (isset($_GET['upid'])) {
 extract($_GET);

 $q="select * from category where category_id='$upid'";
  $res=select($q);

}

if (isset($_POST['update'])) {
  extract($_POST);

  $q="update category set category_name='$Fname',description='$descp' where category_id='$upid'";
  update($q);
  return redirect('admin_manage_category.php');
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

<?php if (isset($_GET['upid'])) { ?>
<table align="center" cellpadding=20  style="color: #FFC541">
       <tr>
  <td>CATOGERY:</td>
  <td><input type="text" name="Fname" value="<?php echo $res[0]['category_name'] ?>" class="form-control"></td>
    </tr>
     
    <tr>
  <td> CATEGORY DESCRIPTION : </td>
  <td><input type="text" name="descp"  value="<?php echo $res[0]['description'] ?>"  class="form-control"></td>
  </tr>

   
     <tr align=center>
      <td colspan="3">  <input  type="submit" name="update" value="Create" class="btn btn-success">
    </tr>

</table>



<?php 
}
else
{ 
  ?>

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
<?php }?>
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
     $q=" SELECT * FROM `category`";
      $res11=select($q);
        foreach ($res11 as $row) { ?>

          <tr>
            <td><?php echo $row['category_name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            
         
            <!-- <td>
              <a href="?id1=<?php echo $row['cat_id']; ?>"class="btn btn-success" >ACTIVE</a>
            </td> -->
            
          <td><a  class="btn btn-success"  href="?upid=<?php echo $row['category_id'] ?>">Update</a></td>

                        
                        </tr>
          
      <?php }
      
     ?>
         

  </table>
</center>



<?php include 'footer.php'; ?>