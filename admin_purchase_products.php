<?php include 'admin_header.php'; 
extract($_GET);

if(isset($_POST['Add'])) 
{
  extract($_POST);



      $qa1="INSERT INTO `tbl_purchasemaster` VALUES(NULL,'0','$vndr',curdate(),'0','Pending')";
     $iidd=insert($qa1);
     $qa2="INSERT INTO `tbl_purchasechild`VALUES(NULL,'$iidd','$item','0','0','0')";
    $pid=insert($qa2);

  
  



  // $q1="insert into tbl_purchasemaster values(null,'0','$vndr',curdate(),'$tp')";
  // $id=insert($q1);

  // $q9="insert into tbl_purchasechild values(null,'$id','$item','$qty','$cp','$tp') ";
  // insert($q9);
  // $qe="UPDATE `tbl_item` SET `stock`=`stock`+'$qty' WHERE `item_id`='$item'";
  // update($qe);

 return redirect("admin_manage_purchase.php");
}


?>
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">
    	<h1 style="color: #FFC541; font-family: Freestyle Script Regular ">Time Will Explain..</h1>

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          
        </div>
      </div>
<script type="text/javascript">
	function TextOnTextChange()
	{
		var x =document.getElementById("p_amount").value;
		var y =document.getElementById("p_qnty").value;
		document.getElementById("t_amount").value = x * y;
	}

</script> 


        <font size="4" face="Lato"  style="color: #FFC541">
ADD PRODUCT
</font>
<font size="4" face="Lato">
<form method="post">
<table align="center" cellpadding=20  style="color: #FFC541">
	
    
    <th>Seller NAME</th>
     	<td>
     		<select name="vndr"  class="form-control">
     			<option>Select</option>
     			<?php 
     			echo$q10="select * from seller";
     			$res10=select($q10);
     			foreach ($res10 as $rows) {
     				?>
     				<option value="<?php echo $rows['seller_id'] ?>"><?php echo $rows['seller_name'] ?></option>
     			<?php 
     		}
     			 ?>
     		</select>
     	</td>
     </tr>


	<td><input type="submit" align="center" class="btn btn-success" value="Add to Purchase List" name="Add"></td>
    </tr>
     </table>
 </form></font></div></section>

<?php include 'footer.php'; ?>