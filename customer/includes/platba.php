<?php 
include "includes/db.php";

            
 $customer_session = $_SESSION['customer_email'];
 
 $get_customer = "select * from customers where customer_email='$customer_session'";
 
 $run_customer = mysqli_query($con,$get_customer);
 
 $row_customer = mysqli_fetch_array($run_customer);
 
 $customer_id = $row_customer['customer_id'];
 
 $get_orders = "select * from customer_orders where order_id='$order_id'";
 
 $run_orders = mysqli_query($con,$get_orders);
 
 $i = 0;
 
 while($row_orders = mysqli_fetch_array($run_orders)){
     
     $order_id = $row_orders['order_id'];
     
     $due_amount = $row_orders['due_amount'];

     $invoice_no = $row_orders['invoice_no'];
     $i++;
     }
 
 ?>
 

 <div class="col-md-3"><!-- col-md-3 Begin -->
 
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Platební údaje</h3>
                       <p class="text-muted"><!-- text-muted Begin -->
                       
                   Variabilní symbol je číslo faktury.
                       
                   </p><!-- text-muted Finish -->
                   </div><!-- box-header Finish -->
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                           
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Obj č:</td>
                                   <th><?php echo $order_id; ?></th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Faktura č.</td>
                                   <td> <?php echo $invoice_no; ?></td>
                                   
                               </tr><!-- tr Finish -->
                
                               
                               <tr ><!-- tr Begin -->
                                   
                                   <td> Částka</td>
                                   <th> <?php echo $due_amount; ?> Kč</th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->