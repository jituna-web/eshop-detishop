<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Vložit nový produkt</title>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Nástěnka / Vložit nový produkt
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel-heading Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> vložit nový produkt
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- panel-heading Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Název</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Url </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_url" type="text" class="form-control" required>

                          <br>

                          <p style="font-weight:bold;font-style:italic;font-size:16px;"> Použíjte '-' pro url </p>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Výrobce</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="manufacturer" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> vybrat výrobce</option>
                              
                              <?php 
                              
                              $get_manufacturer = "select * from manufacturers";
                              $run_manufacturer = mysqli_query($con,$get_manufacturer);
                              
                              while ($row_manufacturer=mysqli_fetch_array($run_manufacturer)){
                                  
                                  $manufacturer_id = $row_manufacturer['manufacturer_id'];
                                  $manufacturer_title = $row_manufacturer['manufacturer_title'];
                                  
                                  echo "
                                  
                                  <option value='$manufacturer_id'> $manufacturer_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   <div class="form-group"><!-- form-group Begin -->
                       
                       <label class="col-md-3 control-label"> Hlavní kategorie </label> 
                       
                       <div class="col-md-6"><!-- col-md-6 Begin -->
                           
                           <select name="cat" class="form-control"><!-- form-control Begin -->
                               
                               <option selected disabled> vybrat kategorii </option>
                               
                               <?php 
                               
                               $get_cat = "select * from categories";
                               $run_cat = mysqli_query($con,$get_cat);
                               
                               while ($row_cat=mysqli_fetch_array($run_cat)){
                                   
                                   $cat_id = $row_cat['cat_id'];
                                   $cat_title = $row_cat['cat_title'];
                                   
                                   echo "
                                   
                                   <option value='$cat_id'> $cat_title </option>
                                   
                                   ";
                                   
                               }
                               
                               ?>
                               
                           </select><!-- form-control Finish -->
                           
                       </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Podkategorie</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option selected disabled> vybrat podkategorii </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from product_categories";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['p_cat_id'];
                                  $p_cat_title = $row_p_cats['p_cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                  
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Obrázek 1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img1" type="file" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Obrázek 2 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img2" type="file" class="form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Obrázek 3 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img3" type="file" class="form-control form-height-custom">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Cena </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Nová cena po slevě </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_sale" type="text" class="form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Klíčová slova</label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_keywords" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Popis </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#descriptions" class="tab_link">
                                    Popis
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#features" class="tab_link">
                                    Vlastnosti
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#videos" class="tab_link">
                                    Video
                                </a>
                            </li>
                        </ul>

                        <!-- Tab Contents Start -->

                        <div class="tab-content">

                            <div class="tab-pane fade in active" id="descriptions"> <!-- Tab-pane Start -->

                                <textarea name="product_desc" id="descriptions" class="form-control"></textarea>
                            
                            </div> <!-- Tab-pane End -->

                            <div class="tab-pane fade in" id="features"> <!-- Tab-pane Start -->

                                <textarea name="product_features" id="features" class="form-control"></textarea>

                            </div> <!-- Tab-pane End -->

                            <div class="tab-pane fade in" id="videos"> <!-- Tab-pane Start -->

                                <textarea name="product_video" id="videos" class="form-control"></textarea>

                            </div> <!-- Tab-pane End -->

                        </div>

                        <!-- Tab Contents End -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Stav </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->

                        <select name="product_label">
                        
                            <option selected disabled> vybrat stav </option>
                        
                            <option value="novinka">Novinka</option>
                        
                            <option value="sleva">Sleva</option> 

                        </select>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="vložit produkt" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
   
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>


<?php 

if(isset($_POST['submit'])){
    
    $product_title = $_POST['product_title'];
    $product_url = $_POST['product_url'];
    $cat = $_POST['cat'];
    $product_cat = $_POST['product_cat'];
    $manufacturer_id = $_POST['manufacturer'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    $product_features = $_POST['product_features'];
    $product_video = $_POST['product_video'];
    $product_sale = $_POST['product_sale'];
    $product_label = $_POST['product_label'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"product_images/$product_img1");
    move_uploaded_file($temp_name2,"product_images/$product_img2");
    move_uploaded_file($temp_name3,"product_images/$product_img3");
    
    $insert_product = "insert into products 
    (cat_id,p_cat_id,manufacturer_id,date,product_title,product_url,
    product_img1,product_img2,product_img3,product_price,
    product_keywords,product_desc,product_features,product_video,
    product_label,product_sale) values ('$cat','$product_cat','$manufacturer_id',NOW(),'$product_title','$product_url','$product_img1','$product_img2','$product_img3','$product_price','$product_keywords','$product_desc','$product_features','$product_video','$product_label','$product_sale')";
    
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('Produkt byl vložen')</script>";
        echo "<script>window.open('index.php?view_products','_self')</script>";
        
    }
    
}

?>


<?php } ?>