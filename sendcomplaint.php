<?php include 'customer_header.php';
$cust_id=$_SESSION['user_id'];
extract($_GET);
if(isset($_POST['reg'])) 
{  
  extract($_POST);
  echo$q1="insert into feedback values(null,'$cust_id','$Fname',now())";
  insert($q1);
 return redirect("sendcomplaint.php");

}


?>
  
 
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center" >
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">


<font size="4" face="Lato"  style="color: #FFC541">


<H4>Send Feedback </H4>
<BR>
</font>
<font size="4" face="Lato">
<form method="post">



<table align="center" cellpadding=20  style="color: #FFC541">
       <tr>
  <td>Feedback:</td>
  <td><input type="text" name="Fname" class="form-control"></td>
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
    

 
    <table class="table"  style="width: 1200px;color: #FFC541" >
        <tr align="center">
      
            <tr>
                
              
                <th>Customer</th>
            
         
            <th>Feedback</th>
           
          
            <th>date & Time</th>
     
            
        </tr>
            
    
        </tr>

            <?php 
            $q="select * from feedback inner join user using (user_id)  ";
            $res=select($q);

            $i=1;
            foreach($res as $row){
            ?>
         <tr align="center">
        
         <td><?php echo $row['first_name'] ?></td>
        
                
                <td><?php echo $row['feedback'] ?></td>
              
                <td><?php echo $row['date_time'] ?></td>
                
             
             


        </tr>
        <?php }?>
    </table>
</center>



<?php include 'footer.php'; ?>