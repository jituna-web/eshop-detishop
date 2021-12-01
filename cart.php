<?php 
$active='Košík';
include "includes/header.php"?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Domů</a>
                </li>
                <li>
                    Nákupní košík
                </li>
            </ul>
        </div>
        <div id="cart" class="col-md-9">
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart/form-data">
                <h1>Nákupní košík</h1>
                <?php 
                $ip_add = getRealIpUser();
                $select_cart = "select * from cart where ip_add='$ip_add'";
                $run_cart = mysqli_query($con, $select_cart);
                $count = mysqli_num_rows($run_cart);
                ?>
                <p class="text-muted"><?php echo $count;  ?> zboží v košíku</p>
                <div class="table-responisive">
                   <table class="table">
                        <thead>
                            <tr>
                                <th colspan="2">Produkt</th>
                                <th>množství</th>
                                <th >cena ks</th>
                                <th>velikost</th>
                                <th colspan="1">smazat</th>
                                <th colspan="2">celkem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tbody>
                                <?php 
                                $total = 0;
                                while($row_cart = mysqli_fetch_array($run_cart)){
                                    $pro_id = $row_cart ['p_id'];
                                    $pro_size = $row_cart ['size'];
                                    $pro_qty = $row_cart ['qty'];
                                    $pro_sale = $row_cart['p_price'];

                                    $get_products = "select * from products where product_id='$pro_id'";
                                    $run_products =  mysqli_query($con, $get_products);
                                    while($row_products= mysqli_fetch_array($run_products)){
                                        $product_title = $row_products['product_title'];
                                        $product_img1= $row_products['product_img1'];
                                        $only_price= $row_products['product_price'];
                                        $pro_url = $row_products['product_url'];
                                        $sub_total = $pro_sale*$pro_qty;
                                        $_SESSION['pro_qty'] = $pro_qty;
                                        $total += $sub_total;

                                ?>
                                <tr>
                                <td>
                                           
                                           <img class="img-responsive" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product 3a">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                       <a href="<?php echo $pro_url; ?>"> <?php echo $product_title; ?> </a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           <input type="text" name="quantity" data-product_id="<?php echo $pro_id; ?>" value="<?php echo $_SESSION['pro_qty']; ?>" class="quantity form-control">
                                           
                                       </td>
                                       
                                       <td>
                                      
                                           <?php echo $pro_sale; ?> Kč
                                           
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
                                </tr>
                                <?php } } ?>
                            </tbody>
                           
                        <tfoot>
                            <tr>
                                <th colspan="5">Celkem</th>
                                <th colspan="2"><?php echo $total; ?> Kč</th>
                            </tr>
                        </tfoot>
                   </table> 
                   <div class="form-inline pull-right"><!-- form-inline Begin -->
                               <div class="form-group"><!-- form-group Begin -->

                                    <label> Slevový kupón: </label>
                                    <input type="text" name="code" class="form-control">
                                    <input type="submit" class="btn btn-success" value="použít kupón" name="apply_coupon">
                               
                               </div><!-- form-group Finish -->
                           </div><!-- form-inline Finish -->
                    </div>
                   <br>
                   </div>         
                <div class="box-footer">
                    <div class="pull-left">
                        <a href="shop.php" class="btn btn-success">
                            <i class="fa fa-chevron-left"></i> pokračovat v nákupu
                        </a>
                    </div>
                <div class="pull-right">
                        <button type="submit" name="update" value="update Cart" class="btn btn-default">
                      <i class="fa fa-refresh"></i>  aktualizovat košík 
                        </button>
                        <a href="login.php" class="btn btn-success">
                            pokračovat k pokladně <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </form>
            </div>
            <?php 
               
                    if(isset($_POST['apply_coupon'])){

                        $code = $_POST['code'];

                        if($code == ""){

                        }else{

                            $get_coupons = "select * from coupons where coupon_code='$code'";
                            $run_coupons = mysqli_query($con,$get_coupons);
                            $check_coupons = mysqli_num_rows($run_coupons);

                            if($check_coupons == "1"){

                                $row_coupons = mysqli_fetch_array($run_coupons);

                                $coupon_pro_id = $row_coupons['product_id'];
                                $coupon_price = $row_coupons['coupon_price'];
                                $coupon_limit = $row_coupons['coupon_limit'];
                                $coupon_used = $row_coupons['coupon_used'];

                                if($coupon_limit == $coupon_used){

                                    echo "<script>alert('Platnost kupónu vypršela')</script>";

                                }else{

                                    $get_cart = "select * from cart where p_id='$coupon_pro_id' AND ip_add='$ip_add'";
                                    $run_cart = mysqli_query($con,$get_cart);
                                    $check_cart = mysqli_num_rows($run_cart);

                                    if($check_cart == "1"){

                                        $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";
                                        $run_used = mysqli_query($con,$add_used);
                                        $update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro_id' AND ip_add='$ip_add'";
                                        $run_update_cart = mysqli_query($con,$update_cart);

                                        echo "<script>alert('Kupón byl načten')</script>";
                                        echo "<script>window.open('cart.php','_self')</script>";

                                    }else{

                                        echo "<script>alert('Váš kupón je neplatný.')</script>";

                                    }

                                }

                            }else{

                                echo "<script>alert('Váš kupón je neplatný.')</script>";

                            }

                        }

                    }
               
               ?>
               
            <?php 
            function update_cart(){
                global $con;
                if(isset($_POST['update'])){
                    foreach($_POST['remove'] as $remove_id){
                        $delete_product = "delete from cart where p_id='$remove_id'";
                        $run_delete = mysqli_query($con, $delete_product);

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
   
        </div>
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