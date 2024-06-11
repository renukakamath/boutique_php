<?php include 'customer_header.php';
extract($_GET);
if(isset($_POST['confirm_order'])){
    extract($_POST);


    echo $dat=$date;

    echo $today = date("Y-m");

    if ($dat < $today) {
     alert(' Your card is expired!!!');
    }else{

     $q="UPDATE `custom_designs` SET `status`='Paid' WHERE `custom_design_id`='$cid'";
  
    update($q);
    
     $q2="INSERT INTO `payment` VALUES(NULL,'$cid','sample design',CURDATE())";
    insert($q2);
     

    return redirect("Customer_viewdesignSample.php");
   

}
}

?>

<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card">
          <div class="card-body p-4">
            

            <div class="row">
            

               
              </div>

              <!-- <div class="col-lg-4" ></div> -->
              <div class="col-lg-4" >
              <form action="" method="post">
                <div class="card bg-primary text-white rounded-3">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="mb-0">Card details</h5>
                      <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp"
                        class="img-fluid rounded-3" style="width: 45px;" alt="Avatar"> -->
                    </div>

                    <!-- <p class="small mb-2">Card type</p> -->
                    <a href="#!" type="submit" class="text-white"><img class="me-2" width="45px"
              src="assets/img/visa.svg"
              alt="Visa" /></a>
                    <a href="#!" type="submit" class="text-white"><img class="me-2" width="45px"
                src="assets/img/amex.svg"
              alt="American Express" /></a>
                    <a href="#!" type="submit" class="text-white"><img class="me-2" width="45px"
              src="assets/img/mastercard.svg"
              alt="Mastercard" /></a>
                    <a href="#!" type="submit" class="text-white"> <img class="me-2" width="45px"
              src="assets/img/paypals.png"
              alt="PayPal acceptance mark" /></a>

                    <form class="mt-4" method="post" >
                      <div class="form-outline form-white mb-4" style="margin-top: 20px;">
                        <input type="text" name="cname" id="typeName" class="form-control form-control-lg" siez="17"
                          placeholder="Cardholder's Name"   />
                        <label class="form-label" for="typeName">Cardholder's Name</label>
                      </div>

                      <div class="form-outline form-white mb-4">
                        <input type="text" id="typeText"  required="" pattern="[0-9]{16}" name="cnum" class="form-control form-control-lg" siez="17"
                          placeholder="1234 5678 9012 3457" minlength="16" maxlength="16"   />
                        <label class="form-label" for="typeText">Card Number</label>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="month" id="typeExp" class="form-control form-control-lg"
                              placeholder="MM/YYYY" size="7" name="date" id="exp" minlength="7" maxlength="7" />
                            <label class="form-label" for="typeExp">Expiration</label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-outline form-white">
                            <input type="password" id="typeText" class="form-control form-control-lg"
                              placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                            <label class="form-label" for="typeText">Cvv</label>
                          </div>
                        </div>
                      </div>

                    </form>

                    <hr class="my-4">

                
                    <div class="d-flex justify-content-between mb-4">
                        
                     
                      <!-- <p class="mb-2">$4818.00</p> -->
                    </div>
                    
                    <div class="d-flex justify-content-between mb-4">
                        
                    <input  type="submit" name="confirm_order" value="₹<?php echo $amt; ?> Confirm Order" class="btn btn-info btn-block btn-lg">
                    </div>

                    
                    </input>

                  </div>
                </div>

                </form>

              </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>





<?php include 'footer.php'; ?>