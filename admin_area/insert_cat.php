<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <ol class="breadcrumb">
            <li>
                
                <i class="fa fa-dashboard"></i> Nástěnka / Vložit kategorii
                
            </li>
        </ol>
    </div><!-- col-lg-12 konec -->
</div><!-- row 1 konec -->

<div class="row"><!-- row 2 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <div class="panel panel-default"><!-- panel panel-default začátek -->
            <div class="panel-heading"><!-- panel-heading začátek -->
                <h3 class="panel-title">
                
                    <i class="fa fa-money fa-fw"></i> Vložit kategorii
                
                </h3>
            </div><!-- panel-heading konec -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Název
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="cat_title" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    
                    <div class="form-group"><!-- form-group 2 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                           Aktivní kategorie?
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="cat_top" type="radio" value="ano">
                            <label>Ano</label>
                        
                            <input name="cat_top" type="radio" value="ne">
                            <label>Ne</label>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 2 finish -->

                    <div class="form-group"><!-- form-group 3 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Obrázek
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="file" name="cat_image" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 3 finish -->
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="vložit" name="submit" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['submit'])){
              
              $cat_title = $_POST['cat_title'];
              
              $cat_top = $_POST['cat_top'];
              
              $cat_image = $_FILES['cat_image']['name'];
              
              $temp_name = $_FILES['cat_image']['tmp_name'];

              move_uploaded_file($temp_name,"other_images/$cat_image");
              
              $insert_cat = "insert into categories (cat_title,cat_top,cat_image) values ('$cat_title','$cat_top','$cat_image')";
              
              $run_cat = mysqli_query($con,$insert_cat);
              
              if($run_cat){
                  
                  echo "<script>alert('Kategorieje vložena')</script>";
                  
                  echo "<script>window.open('index.php?view_cats','_self')</script>";
                  
              }
              
          }

?>

<?php } ?>