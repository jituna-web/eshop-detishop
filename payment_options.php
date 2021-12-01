<div class="box"><!-- box Begin -->
<?php 
$session_email = $_SESSION['customer_email'];
$select_customer = "select * from customers where customer_email='$session_email'";
$run_customer = mysqli_query($con, $select_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id'];


?>
    
    <h1 class="text-center">Možnosti platby</h1>  
    
    <center><!-- center Begin -->
         
         <p class="lead"><!-- lead Begin -->
             
             <a href="order.php?c_id=<?php echo $customer_id ?>">
                 
                 Bankovní převod
                 
                 <img class="img-responsive" src="images/bank.jpg" alt="img-bank" style="height:30px;width:100px;">
                 
             </a>
             
         </p> <!-- lead Finish -->
          
      </center><!-- center Finish -->
     
     <center><!-- center Begin -->
         
        <p class="lead"><!-- lead Begin -->
            
            <a href="#">
                
                Paypal platba
                
                <img class="img-responsive" src="images/paypal.png" alt="img-paypal" style="height:30px;width:100px;">
                
            </a>
            
        </p> <!-- lead Finish -->
         
     </center><!-- center Finish -->
     <center><!-- center Begin -->
         
         <p class="lead"><!-- lead Begin -->
             
             <a href="#">
                 
                 Online platba
                 
                 <img class="img-responsive" src="images/online.jpg" alt="img-dobírka" style="height:30px;width:100px;">
                 
             </a>
             
         </p> <!-- lead Finish -->
          
      </center><!-- center Finish -->
     <center><!-- center Begin -->
         
        <p class="lead"><!-- lead Begin -->
            
            <a href="#">
                
                Dobírka
                
                <img class="img-responsive" src="images/dobirka.jpg" alt="img-dobírka" style="height:30px;width:100px;">
                
            </a>
            
        </p> <!-- lead Finish -->
         
     </center><!-- center Finish -->
    
</div><!-- box Finish -->