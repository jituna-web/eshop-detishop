<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i> Nástěnka / Posuvník obrázků
            </li>
        </ol>
    </div><!-- col-lg-12 konec -->
</div><!-- row 1 konec -->

<div class="row"><!-- row 2 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <div class="panel panel-default"><!-- panel panel-default začátek -->
            <div class="panel-heading"><!-- panel-heading začátek -->
                <h3 class="panel-title">
                
                    <i class="fa fa-money fa-fw"></i> Vložit obrázek
                
                </h3>
            </div><!-- panel-heading konec -->
            
            <div class="panel-body"><!-- panel-body začátek -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group"><!-- form-group začátek -->
                    
                        <label for="" class="control-label col-md-3"> 
                        
                            Název
                        
                        </label>
                        
                        <div class="col-md-6"><!-- col-md-6 začátek -->
                        
                            <input name="slide_name" type="text" class="form-control">
                        
                            </div><!-- col-md-6 konec -->
                        </div><!-- form-group 1 konec -->
                        <div class="form-group"><!-- form-group 1 začátek -->
                    
                        <label for="" class="control-label col-md-3">
                        
                            Url slideru
                        
                        </label>
                        
                        <div class="col-md-6"><!-- col-md-6 začátek -->
                        
                            <input name="slide_url" type="text" class="form-control">
                        
                        </div><!-- col-md-6 konec -->
                    
                    </div><!-- form-group 1 konec -->
                    <div class="form-group"><!-- form-group začátek -->
                    
                        <label for="" class="control-label col-md-3"> 
                        
                            Obrázek
                        
                        </label>
                        
                        <div class="col-md-6"><!-- col-md-6 začátek -->
                        
                            <input type="file" name="slide_image" class="form-control">
                        
                        </div><!-- col-md-6 konec -->
                    
                    </div><!-- form-group konec -->
                    <div class="form-group"><!-- form-group začátek -->
                    
                        <label for="" class="control-label col-md-3"></label>
                        
                        <div class="col-md-6"><!-- col-md-6 začátek -->
                        
                            <input type="submit" name="submit" value="vložit" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 konec -->
                    
                    </div><!-- form-group konec -->
                </form>
            </div><!-- panel-body konec -->
            
        </div><!-- panel panel-default konec -->
    </div><!-- col-lg-12 konec -->
</div><!-- row 2 konec -->

<?php  

    if(isset($_POST['submit'])){        
        $slide_name = $_POST['slide_name'];
        $slide_url = $_POST['slide_url'];       
        $slide_image = $_FILES['slide_image']['name'];        
        $temp_name = $_FILES['slide_image']['tmp_name'];      
        $view_slides = "select * from slider";       
        $view_run_slide = mysqli_query($con,$view_slides);       
        $count = mysqli_num_rows($view_run_slide);
        
        if($count<4){
            
            move_uploaded_file($temp_name,"slides_images/$slide_image");       
            $insert_slide = "insert into slider (slide_name, slide_url,slide_image) values ('$slide_name','$slide_url','$slide_image')";           
            $run_slide = mysqli_query($con,$insert_slide);           
            echo "<script>alert('Obrázek byl vložen')</script>";           
            echo "<script>window.open('index.php?view_slides','_self')</script>";           
        }else{           
           echo "<script>alert('Již jste vložili 4 snímky')</script>";             
        }        
    }

?>

<?php } ?>