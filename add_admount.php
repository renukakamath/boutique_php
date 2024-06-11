<?php include 'seller_header.php';

 extract($_GET);



if(isset($_POST['sub'])){
  
  {
        extract($_POST);



        $q="update product set price='$rate' where product_id='$pid'";
        update($q);
    

        alert('successfully');
      
        return redirect("seller_viewproduct.php");
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
    <th>Budget</th>
    <td><input type="number"required class="form-control" name="rate" id=""></td>
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

<?php include 'footer.php' ?>
