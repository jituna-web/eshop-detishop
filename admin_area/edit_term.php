<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_term'])){
        
        $edit_term_id = $_GET['edit_term'];
        
        $edit_term_query = "select * from terms where term_id='$edit_term_id'";
        
        $run_edit_term = mysqli_query($con,$edit_term_query);
        
        $row_edit_term = mysqli_fetch_array($run_edit_term);
        
        $term_id = $row_edit_term['term_id'];
        
        $term_title = $row_edit_term['term_title'];
        
        $term_desc = $row_edit_term['term_desc'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Nástěnka / Upravit podmínky
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-pencil fa-fw"></i> Upravit
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Název podmínky
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value=" <?php echo $term_title; ?> " name="term_title" type="text" class="form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Popis
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="term_desc"  cols="30" rows="25" class="form-control"><?php echo $term_desc; ?></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                   
                    </div><!-- form-group 2 finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="upravit" name="update_term" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->
<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({selector:'textarea'});</script>
<?php  

          if(isset($_POST['update_term'])){
              
              $term_title = $_POST['term_title'];
              
              $term_desc = $_POST['term_desc'];
              
              $update_term = "update terms set term_title='$term_title',term_desc='$term_desc' where term_id='$term_id'";
              
              $run_term = mysqli_query($con,$update_term);
              
              if($run_term){
                  
                  echo "<script>alert('Podmínka byla upravena')</script>";
                  
                  echo "<script>window.open('index.php?view_terms','_self')</script>";
                  
              }
              
          }

?>

<?php } ?> 