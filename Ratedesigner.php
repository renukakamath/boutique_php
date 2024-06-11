<?php include 'customer_header.php' ;
$cust_id=$_SESSION['user_id'];
extract($_GET);


if (isset($_POST['submit'])) {
   extract($_POST);


   $q="insert into ratings values(null,'$cust_id','0','$rates','$review',curdate())";
   insert($q);
   alert("successfully");
   return redirect('Ratedesigner.php');
}



?>





<style type="text/css">
	
	*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}

</style>



<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" style="height: 1000px" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


            <font size="4" face="Lato"  style="color: #FFC541">
<center>
	<h1> Rateing</h1>
	<form method="post">
		<table class="table" style="width: 500px;color:#FFC541 ">
			<tr>
			<th>rate</th>
			<td>
<div class="rate">
    <input type="radio" id="star5" name="rates" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rates" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rates" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rates" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rates" value="1" />
    <label for="star1" title="text">1 star</label>
  </div>

</td></tr>


<tr>
    <td>Review</td>
    <td><textarea name="review"></textarea></td>
</tr>

<tr>
    <td align="center" colspan="2" ><input type="submit" class="btn btn-success" name="submit"></td>
</tr>



</table></form></center></font></div></div></div></section>


	<center>

</div>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">





<?php include 'footer.php' ?>