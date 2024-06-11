<?php include 'admin_header.php'; 
extract($_GET);

if(isset($_POST['Add'])) 
{
  extract($_POST);

  
  echo $qq="SELECT * FROM `tbl_purchasemaster` WHERE `seller_id`='$vndr' AND `status`='Pending'";
  $r1=select($qq);
  if(sizeof($r1)>0){

     $purchase_mid=$r1[0]['purchase_mid'];
     $qq1="SELECT * FROM `tbl_purchasechild` WHERE `purchase_mid`='$purchase_mid' AND `product_id`='$item'";
    $r2=select($qq1);


    $cost_price=$r2[0]['cost_price'];

    $sellp=60/100*$cost_price;
    $new=$sellp+$cost_price;



    if(sizeof($r2)>0){
      // alert("hhhhhhhhhhhhh");
       $qq3="UPDATE `tbl_purchasechild` SET `quantity`=`quantity`+'$qty',`tot_price`=`tot_price`+'$tp' WHERE `product_id`='$item' and `purchase_mid`='$purchase_mid'";
      update($qq3);
        $qq5="UPDATE `tbl_purchasemaster` SET `tot_amount`=`tot_amount`+'$tp' WHERE `purchase_mid`='$purchase_mid'";
      update($qq5);
    }else{
       $purchase_mid=$r1[0]['purchase_mid'];
       $qq4="INSERT INTO `tbl_purchasechild`VALUES(NULL,'$purchase_mid','$item','$qty','$cp','$tp')";
      insert($qq4);
       $qq5="UPDATE `tbl_purchasemaster` SET `tot_amount`=`tot_amount`+'$tp' WHERE `purchase_mid`='$purchase_mid'";
      update($qq5);

      $q="update product set sellingprice='$new' where product_id='$item'";
      update($q);
      }

    }
    else{


   

      // alert("helloooo");

      $qa1="INSERT INTO `tbl_purchasemaster` VALUES(NULL,'0','$vndr',curdate(),'$tp','Pending')";
     $iidd=insert($qa1);
     $qa2="INSERT INTO `tbl_purchasechild`VALUES(NULL,'$iidd','$item','$qty','$cp','$tp')";
    $pid=insert($qa2);


    $q="select * from tbl_purchasechild where purchase_cid='$pid'";
    $cid=select($q);



     $cost_price=$cid[0]['cost_price'];

    $sellp=60/100*$cost_price;
    $new=$sellp+$cost_price;

     $q="update product set sellingprice='$new' where product_id='$item'";
      update($q);

    }
  



  // $q1="insert into tbl_purchasemaster values(null,'0','$vndr',curdate(),'$tp')";
  // $id=insert($q1);

  // $q9="insert into tbl_purchasechild values(null,'$id','$item','$qty','$cp','$tp') ";
  // insert($q9);
  // $qe="UPDATE `tbl_item` SET `stock`=`stock`+'$qty' WHERE `item_id`='$item'";
  // update($qe);

 return redirect("admin_purchase.php");
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

<tr>
   <td> COST PRICE :</td>
    <td><input type="text" name="cp" id="p_amount"  value="<?php echo $rate ?>" class="form-control"></td>
     </tr>
     <tr>
   <td>  QUANTITY :</td>
    <td><input type="number" id="p_qnty" onchange="TextOnTextChange()" name="qty" class="form-control"></td>
     </tr>

     <tr>
     	<td>TOTAL PRICE :</td>
     	<td><input type="number" name="tp" id="t_amount" class="form-control"></td>
     </tr>

     <tr>
	<td><input type="submit" align="center" class="btn btn-success" value="Add to Purchase List" name="Add"></td>
    </tr>
     </table>
 </form></font></div></section>

<?php include 'footer.php'; ?>