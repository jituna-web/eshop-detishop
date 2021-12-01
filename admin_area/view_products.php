<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <ol class="breadcrumb">
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Nástěnka/ zobrazit produkty
                
            </li>
        </ol>
    </div><!-- col-lg-12 konec -->
</div><!-- row 1 konec -->

<div class="row"><!-- row 2 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <div class="panel panel-default"><!-- panel panel-default začátek -->
            <div class="panel-heading"><!-- panel-heading začátek -->
               <h3 class="panel-title">
               
                   <i class="fa fa-tags"></i> Zobrazit produkty
                
               </h3>
            </div><!-- panel-heading konec -->
            
            <div class="panel-body"><!-- panel-body začátek -->
                <div class="table-responsive"><!-- table-responsive začátek -->
                    <table class="table table-striped table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <th> ID: </th>
                                <th> Název: </th>
                                <th> Obrázek: </th>
                                <th> Cena: </th>
                                <th> Prodáno ks: </th>
                                <th> Klíčová slova: </th>
                                <th> Datum přidání: </th>
                                <th> Smazat: </th>
                                <th> Upravit: </th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            
                            <?php 
          
                                $i=0;
                            
                                $get_pro = "select * from products";
                                
                                $run_pro = mysqli_query($con,$get_pro);
          
                                while($row_pro=mysqli_fetch_array($run_pro)){
                                    
                                    $pro_id = $row_pro['product_id'];
                                    
                                    $pro_title = $row_pro['product_title'];
                                    
                                    $pro_img1 = $row_pro['product_img1'];
                                    
                                    $pro_price = $row_pro['product_price'];
                                    
                                    $pro_keywords = $row_pro['product_keywords'];
                                    
                                    $pro_date = $row_pro['date'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr začátek -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $pro_title; ?> </td>
                                <td> <img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td> <?php echo $pro_price; ?> Kč </td>
                                <td> <?php 
                                    
                                        $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                    
                                        $run_sold = mysqli_query($con,$get_sold);
                                    
                                        $count = mysqli_num_rows($run_sold);
                                    
                                        echo $count;
                                    
                                     ?> 
                                </td>
                                <td> <?php echo $pro_keywords; ?> </td>
                                <td> <?php echo $pro_date ?> </td>
                                <td> 
                                     
                                     <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> smazat
                                    
                                     </a> 
                                     
                                </td>
                                <td> 
                                     
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> upravit
                                    
                                     </a> 
                                    
                                </td>
                            </tr>
                            
                            <?php } ?>
                            
                        </tbody>
                        
                    </table>
                </div><!-- table-responsive konec -->
            </div><!-- panel-body konec -->
            
        </div><!-- panel panel-default konec -->
    </div><!-- col-lg-12 konec -->
</div><!-- row 2 konec -->

<?php } ?>