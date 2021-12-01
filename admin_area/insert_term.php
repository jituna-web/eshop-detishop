<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Nástěnka / Vložit novou podmínku
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> Vložit novou podmínku
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group 1 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Název podmínky
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="term_title" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 1 finish -->
                    <div class="form-group"><!--form-group začátek -->
                    <label class="col-md-3 control-label"> Popis </label>
                    <div class="col-md-6"><!--col-md-6 začátek -->
                        <textarea name="term_desc" cols="19" rows="6" class="form-control"> </textarea>
                    </div><!--col-md-6 konec-->
                </div><!--form-group konec -->
                    
                    </div><!-- form-group 2 finish -->
                    <div class="form-group"><!-- form-group 4 begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="submit" value="vložit" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group 4 finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
<?php  

    if(isset($_POST['submit'])){
        
        $term_title = $_POST['term_title'];
        $term_desc = $_POST['term_desc'];

        $insert_term ="insert into terms (term_title,term_desc) values ('$term_title','$term_desc')";
        $run_term = mysqli_query($con,$insert_term);

        echo "<script>alert('Nová podmínka byla vložena')</script>";
        echo "<script>window.open('index.php?view_terms','_self')</script>";
        
    }

?>

<?php } ?>
