<?php
include ("includes/head.php");
include ("../controller/CartController.php");
include("../controller/CustomerController.php");
$cust=new CustomerController();
?>

<!-- Cart view section -->
<section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="#" method="post">
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Shipping Address
                          </a>
                        </h4>
                      </div>

                   <?php   if(isset($_SESSION['customer_email'])){
	                   $user = $_SESSION['customer_email'];
	                   $customer=$cust->getCustommer($user);
                        $first = $customer[0]['customer_fname']; 
                        $last = $customer[0]['customer_lname']; 
                        $country = $customer[0]['customer_country']; 
                        $city = $customer[0]['customer_city'];
                        $adresse = $customer[0]['Address']; 
                        $contact = $customer[0]['customer_contact'];  }
                        else{
                          echo "<script>alert('You must login first')</script>";
                          echo "<script>window.open('index.php','_self')</script>";
                        }
                        ?>

                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="First Name*" value=<?php echo "$first" ?> >
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Laste Name*" value=<?php echo "$last" ?>>
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Company name">
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="email" placeholder="Email Address*" value=<?php echo "$user" ?> >
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="tel" placeholder="Phone*"  value=<?php echo "$contact" ?>>
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              <input type="adresse" placeholder="Adresse*"  value=<?php echo "$adresse" ?>>
                              
                              </div>                             
                            </div>                            
                          </div>   
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                              
                                <select >
                                
                                  <option value="0" ><?php echo "$country" ?></option>
                                  <option value="1">Australia</option>
                                  <option value="2">Afganistan</option>
                                  <option value="3">Bangladesh</option>
                                  <option value="4">Belgium</option>
                                  <option value="5">Brazil</option>
                                  <option value="6">Canada</option>
                                  <option value="7">China</option>
                                  <option value="8">Denmark</option>
                                  <option value="9">Egypt</option>
                                  <option value="10">India</option>
                                  <option value="11">Iran</option>
                                  <option value="12">Tunisia</option>
                                  <option value="13">Mexico</option>
                                  <option value="14">UAE</option>
                                  <option value="15">UK</option>
                                  <option value="16">USA</option>
                                </select>
                              </div>                             
                            </div>                           
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Appartment, Suite etc.">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="City / Town*"  value=<?php echo "$city" ?>>
                              </div>
                            </div>
                          </div>   
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="District*">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="text" placeholder="Postcode / ZIP*">
                              </div>
                            </div>
                          </div> 
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea cols="8" rows="3">Special Notes</textarea>
                              </div>                             
                            </div>                            
                          </div>              
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
              <div class="col-md-4">
                
                  
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method">                    
                    <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                    <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                    <input type="submit" name="place_order" value="Place Order" class="aa-browse-btn">                
                  </div>
                </div>
              </div>
            </div>
          </form>
          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
 
 <?php
		  	
  if(isset($_POST['place_order'])){
          
    if(!isset($_SESSION['customer_email'])){
      echo "<script>alert('You must login to place an order')</script>";
      echo "<script>window.open('login.php','_self')</script>";
    }
    else{
      echo "<script>alert('Order placed successfully !')</script>";
      echo "<script>window.open('payment.php','_self')</script>";
    }
  }
        
  ?>

 <?php
include ("includes/footer.php");
?>
