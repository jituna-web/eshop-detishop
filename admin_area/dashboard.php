<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

<div class="row"><!-- row č: 1 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <h1 class="page-header"> Nástěnka </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                <i class="fa fa-dashboard"></i> Nástěnka
            
            </li>
        </ol>
        
    </div><!-- col-lg-12 konec -->
</div><!-- row č: 1 konec -->

<div class="row"><!-- row č: 2 začátek -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 začátek-->
        <div class="panel panel-primary"><!-- panel panel-primary začátek -->
            
            <div class="panel-heading"><!-- panel-heading začátek -->
                <div class="row"><!-- panel-heading row začátek -->
                    <div class="col-xs-3"><!-- col-xs-3 začátek -->
                       
                        <i class="fa fa-tasks fa-5x"></i>
                        
                    </div><!-- col-xs-3 konec -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right začátek -->
                        <div class="huge"> <?php echo $count_products; ?></div>
                           
                        <div> Produkty</div>
                        
                    </div><!-- col-xs-9 text-right konec -->
                    
                </div><!-- panel-heading row konec -->
            </div><!-- panel-heading konec -->
            
            <a href="index.php?view_products">
                <div class="panel-footer"><!-- panel-footer začátek -->
                   
                    <span class="pull-left">
                        zobrazit detaily
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer konec -->
            </a>
            
        </div><!-- panel panel-primary konec -->
    </div><!-- col-lg-3 col-md-6 konec -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 začátek -->
        <div class="panel panel-green"><!-- panel panel-green začátek -->
            
            <div class="panel-heading"><!-- panel-heading začátek -->
                <div class="row"><!-- panel-heading row začátek -->
                    <div class="col-xs-3"><!-- col-xs-3 začátek -->
                       
                        <i class="fa fa-users fa-5x"></i>
                        
                    </div><!-- col-xs-3 konec -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right začátek -->
                        <div class="huge"> <?php echo $count_customers; ?>  </div>
                           
                        <div> Zákazníci </div>
                        
                    </div><!-- col-xs-9 text-right konec -->
                    
                </div><!-- panel-heading row konec -->
            </div><!-- panel-heading konec -->
            
            <a href="index.php?view_customers">
                <div class="panel-footer"><!-- panel-footer začátek -->
                   
                    <span class="pull-left">
                        zobrazit detaily
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer konec -->
            </a>
            
        </div><!-- panel panel-green konec -->
    </div><!-- col-lg-3 col-md-6 konec -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 začátek -->
        <div class="panel panel-orange"><!-- panel panel-yellow začátek -->
            
            <div class="panel-heading"><!-- panel-heading začátek -->
                <div class="row"><!-- panel-heading row začátek -->
                    <div class="col-xs-3"><!-- col-xs-3 začátek -->
                       
                        <i class="fa fa-tags fa-5x"></i>
                        
                    </div><!-- col-xs-3 konec -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right začátek -->
                        <div class="huge"><?php echo $count_categories; ?> </div>
                           
                        <div> Kategorie </div>
                        
                    </div><!-- col-xs-9 text-right konec -->
                    
                </div><!-- panel-heading row konec -->
            </div><!-- panel-heading konec -->
            
            <a href="index.php?view_cats">
                <div class="panel-footer"><!-- panel-footer začátek -->
                   
                    <span class="pull-left">
                        zobrazit detaily
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer konec -->
            </a>
            
        </div><!-- panel panel-yellow konec -->
    </div><!-- col-lg-3 col-md-6 konec -->
   
    <div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 začátek -->
        <div class="panel panel-red"><!-- panel panel-red začátek -->
            
            <div class="panel-heading"><!-- panel-heading začátek -->
                <div class="row"><!-- panel-heading row začátek -->
                    <div class="col-xs-3"><!-- col-xs-3 začátek -->
                       
                        <i class="fa fa-shopping-cart fa-5x"></i>
                        
                    </div><!-- col-xs-3 konec -->
                    
                    <div class="col-xs-9 text-right"><!-- col-xs-9 text-right začátek -->
                        <div class="huge"> <?php echo $count_pending_orders; ?></div>
                           
                        <div> Objednávky </div>
                        
                    </div><!-- col-xs-9 text-right konec -->
                    
                </div><!-- panel-heading row konec -->
            </div><!-- panel-heading konec -->
            
            <a href="index.php?view_orders">
                <div class="panel-footer"><!-- panel-footer začátek -->
                   
                    <span class="pull-left">
                        zobrazit detaily
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div><!-- panel-footer konec -->
            </a>
            
        </div><!-- panel panel-red konec -->
    </div><!-- col-lg-3 col-md-6 konec -->
    
</div><!-- row č: 2 konec -->

<div class="row"><!-- row č: 3 začátek -->
    <div class="col-lg-8"><!-- col-lg-8 začátek -->
        <div class="panel panel-primary"><!-- panel panel-primary začátek -->
            <div class="panel-heading"><!-- panel-heading začátek -->
                <h3 class="panel-title">
                    
                    <i class="fa fa-money fa-fw"></i> Nové objednávky
                    
                </h3>
            </div><!-- panel-heading konec -->
            
            <div class="panel-body"><!-- panel-body začátek -->
                <div class="table-responsive"><!-- table-responsive začátek -->
                    <table class="table table-hover table-striped table-bordered">
                        
                        <thead>
                          
                            <tr>
                           
                                <th> Objednávka č: </th>
                                <th> Zákazník email: </th>
                                <th> Faktura č: </th>
                                <th> ID produktu: </th>
                                <th> Množství: </th>
                                <th> Velikost: </th>
                                <th> Stav: </th>
                            
                            </tr>
                            
                        </thead>
                        
                        <tbody>
                        <?php 
                          
                          $i=0;
    
                          $get_order = "select * from pending_orders order by 1 DESC LIMIT 0,5";
                          $run_order = mysqli_query($con,$get_order);   
                          while($row_order=mysqli_fetch_array($run_order)){                             
                            $order_id = $row_order['order_id'];
                            $c_id = $row_order['customer_id'];                             
                            $invoice_no = $row_order['invoice_no'];                             
                            $product_id = $row_order['product_id'];                             
                            $qty = $row_order['qty'];                             
                            $size = $row_order['size'];                             
                            $order_status = $row_order['order_status'];                             
                            $i++;
                      
                      ?>
                           
                            <tr>
                                 
                            <td> <?php echo $order_id; ?> </td>
                                <td>
                                    
                                    <?php 
                                    
                                        $get_customer = "select * from customers where customer_id='$c_id'";
                                    
                                        $run_customer = mysqli_query($con,$get_customer);
                                    
                                        $row_customer = mysqli_fetch_array($run_customer);
                                    
                                        $customer_email = $row_customer['customer_email'];
                                    
                                        echo $customer_email;
                                    
                                    ?>
                                    
                                </td>
                                <td> <?php echo $invoice_no; ?> </td>
                                <td> <?php echo $product_id; ?> </td>
                                <td> <?php echo $qty; ?> </td>
                                <td> <?php echo $size; ?> </td>
                                <td>
                                    
                                    <?php 
                                    
                                        if($order_status=='čeká na vyřízení'){
                                            
                                            echo $order_status='čeká na vyřízení';
                                            
                                        }else{
                                            
                                            echo $order_status='hotovo';
                                            
                                        }
                                    
                                    ?>
                                    
                                </td>
                                
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                            
                        </tbody>
                        
                    </table>
                </div><!-- table-responsive konec -->
                
                <div class="text-right"><!-- text-right začátek -->
                    
                    <a href="index.php?view_orders">
                        
                        Zobrazit všechny objednávky <i class="fa fa-arrow-circle-right"></i>
                        
                    </a>

                </div><!-- text-right konec -->
                
            </div><!-- panel-body konec -->
            
        </div><!-- panel panel-primary konec -->
    </div><!-- col-lg-8 konec -->
    
    <div class="col-md-4"><!-- col-md-4 začátek -->
        <div class="panel"><!-- panel začátek -->
            <div class="panel-body"><!-- panel-body začátek -->
                <div class="mb-md thumb-info"><!-- mb-md thumb-info začátek -->

                    <img src="admin_images/<?php echo $admin_image; ?>" alt="<?php echo $admin_image; ?>" alt="admin-thumb-info" class="rounded img-responsive">
                    
                    <div class="thumb-info-title"><!-- thumb-info-title začátek -->
                       
                        <span class="thumb-info-inner"><?php echo $admin_name; ?></span>
                        <span class="thumb-info-type"> <?php echo $admin_job; ?> </span>
                        
                    </div><!-- thumb-info-title konec -->

                </div><!-- mb-md thumb-info konec -->
                
                <div class="mb-md"><!-- mb-md začátek -->
                    <div class="widget-content-expanded"><!-- widget-content-expanded začátek -->
                        <i class="fa fa-user"></i> <span> Email: </span> <?php echo $admin_email; ?><br/>
                        <i class="fa fa-flag"></i> <span> Země: </span> <?php echo $admin_country; ?><br/>
                        <i class="fa fa-envelope"></i> <span> Kontakt: </span> <?php echo $admin_contact; ?> <br/>
                    </div><!-- widget-content-expanded konec -->
                    
                    <hr class="dotted short">
                    
                    <h5 class="text-muted"> O mě</h5>
                    
                    <p>
                        
                    <?php echo $admin_about; ?> <br/>
                        <a href="https://jh-design.cz"> Jh-design.cz </a> <br/>
                       
                        
                    </p>
                    
                </div><!-- mb-md konec -->
                
            </div><!-- panel-body konec -->
        </div><!-- panel konec -->
    </div><!-- col-md-4 konec -->
    
</div><!-- row no: 3 konec -->
<?php } ?>