<?php include 'customer_header.php';
 $cust_id=$_SESSION['user_id'];
 extract($_GET);



if(isset($_POST['sub'])){
  
  {
        extract($_POST);
       echo $q="insert into requests values(null,'$cust_id','0', '$product', '$details', '$rate', '$date',curdate())";
        insert($q);

        alert('successfully');
      
        return redirect("customer_sharemy_ideas.php");
    }


}





?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">
<center>
<h1  style="color: #FFC541">MY IDEAS</h1>


<form  method="post" enctype="multipart/form-data">

<table class="table" style="width: 500px;color: #FFC541" >


<tr>
    <th>Title </th>
    <td><input type="text" class="form-control" required class="form-control" name="product" id=""></td>
</tr>

<tr>
    <th>Details </th>
    <td><textarea name="details" required class="form-control"></textarea></td>
</tr>

<tr>
    <th>Image</th>
    <td><input type="file" required class="form-control" name="img" id=""></td>
</tr>
<tr>
    <th>Budget</th>
    <td><input type="number"required class="form-control" name="rate" id=""></td>
</tr>
<tr>
    <th>Date</th>
    <td><input type="date"  required class="form-control" name="date" id=""></td>
</tr>

 
<tr>
    <td colspan="2" align="center">
        <input type="submit" class="btn btn-success" value="submit" name="sub" id="">
    </td>
</tr>
</table>
</form>



</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">


<h3>MY IDEAS</h3>
 <table class="table"  style="width: 1200px;color: black" >
    <tr align="center">
        <th></th>
        <th>title</th>
      <th>budget</th>
      <th>description</th>
      <th>datefor</th>
        
    </tr>
    <?php 
    $q="select * from requests where user_id='$cust_id'";
    $ven=select($q);

    $i=1;
    foreach($ven as $row){
    ?>
    <tr align="center">
       
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['budget']?></td>
         <td><?php echo $row['description']?></td>
          <td><?php echo $row['datefor']?></td>
          <td><a  class=" btn btn-success" href="Customer_viewdesignSample.php?rid=<?php echo $row['request_id'] ?>">View Sample Design</a></td>
       
       

    </tr>
    <?php }?>
</table>
</center>
<?php include 'footer.php' ?>
