<?php 

session_start();

$active='Cart';

include("includes/db.php");
include("includes/header.php");


?>


   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Domů</a>
                   </li>
                   <li>
                       Košík
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>Nákupní košík</h1>
                       
                       <?php 
                       
                       $ip_add = getRealIpUser();
                       
                       $select_cart = "select * from cart where ip_add='$ip_add'";
                       
                       $run_cart = mysqli_query($con,$select_cart);
                       
                       $count = mysqli_num_rows($run_cart);
                       
                       ?>
                       
                       <p class="text-muted"> Máte  <?php echo $count; ?> zboží ve vašem košíku</p>
                       
                       <div class="table-responsive"><!-- table-responsive Begin -->
                           
                           <table class="table"><!-- table Begin -->
                               
                               <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="2">Produkt</th>
                                       <th>množství</th>
                                       <th>cena ks</th>
                                       <th>velikost</th>
                                       <th colspan="1">smazat</th>
                                       <th colspan="2">celkem</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                  
                                  <?php 
                                   
                                   $total = 0;
                                   
                                   while($row_cart = mysqli_fetch_array($run_cart)){
                                       
                                     $pro_id = $row_cart['p_id'];
                                       
                                     $pro_size = $row_cart['size'];
                                       
                                     $pro_qty = $row_cart['qty'];

                                     $pro_sale = $row_cart['p_price'];
                                       
                                       $get_products = "select * from products where product_id='$pro_id'";
                                       
                                       $run_products = mysqli_query($con,$get_products);
                                       
                                       while($row_products = mysqli_fetch_array($run_products)){
                                           
                                           $product_title = $row_products['product_title'];
                                           
                                           $product_img1 = $row_products['product_img1'];
                                           
                                           $only_price = $row_products['product_price'];
                                           
                                           $sub_total = $pro_sale*$pro_qty;

                                           $_SESSION['pro_qty'] = $pro_qty;
                                           
                                           $total += $sub_total;
                                           
                                   ?>
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           <input type="text" name="quantity" data-product_id="<?php echo $pro_id; ?>" value="<?php echo $_SESSION['pro_qty']; ?>" class="quantity form-control">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <?php echo $pro_sale; ?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <?php echo $pro_size; ?>
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <?php echo $sub_total; ?> Kč
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                                   <?php } } ?>
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="5">Celkem</th>
                                       <th colspan="2"><?php echo $total; ?> Kč</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> pokračovat v nákupu
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> aktualizovat košík
                                   
                               </button><!-- btn btn-default Finish -->
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   pokračovat k pokladně <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->
               </div> 
               <?php 
               
                function update_cart(){
                    
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            
                            $run_delete = mysqli_query($con,$delete_product);
                            
                            if($run_delete){
                                
                                echo "<script>window.open('cart.php','_self')</script>";
                                
                            }
                            
                        }
                        
                    }
                    
                }
               
               echo @$up_cart = update_cart();
               
               ?>
               
               <div class="col-md-3"><!-- col-md-3 Begin -->
               
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Celkem objednávka</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                   Poštovné a dodatečné náklady.
                       
                   </p><!-- text-muted Finish -->
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Objednávka celkem </td>
                                   <th><?php echo $total; ?> Kč</th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Poštovné a balné </td>
                                   <td> 0 Kč </td>
                                   
                               </tr><!-- tr Finish -->
                
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> Celkem</td>
                                   <th><?php echo $total; ?> Kč</th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->
 
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
<br>

</div>
   
</div>
<br>

<?php include "includes/footer.php"?>

<script>
    
    $(document).ready(function(data){

        $(document).on('keyup','.quantity',function(){

             var id = $ (this).data("product_id");
             var quantity = $(this).val();

             if(quantity !=''){

                 $.ajax({

                     url: "change.php",
                     method: "POST",
                     data:{id:id, quantity:quantity},

                     success:function(){
                         $("body").load("cart_body.php");
                     }

                 });

             }

        });

    });
 
 </script>