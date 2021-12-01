<?php include "includes/header.php"; ?>
<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('logon.php','_self')</script>";
} else {

?>
<?php
    $file = "../styles/style.css";
    if(file_exists($file)){
        $data = file_get_contents($file);
    }

?>
<div class="row"><!-- row 1 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Nástěnka/ CSS editor
            </li>
        </ol>
    </div><!-- col-lg-12 konec -->
</div><!-- row 1 konec -->
<div class="row"><!-- row 2 začátek -->
    <div class="col-lg-12"><!-- col-lg-12 začátek -->
        <div class="panel panel-default"><!-- panel panel-default začátek -->
            <div class="panel-heading"><!-- panel-heading začátek -->
               <h3 class="panel-title">
                   <i class="fa fa-pencil"></i>  CSS editor
               </h3>
            </div><!-- panel-heading konec -->
            <div class="panel-body"><!-- panel-body začátek -->
                <form action="" class="form-horizontal" method="post">
                    <div class="form-group"><!-- form-group začátek -->
                    <div class="col-lg-12"><!-- col-lg-12 začátek -->
                        <textarea name="newdata" id="" rows="20" class="form-control">
                         <?php echo $data; ?>
                        </textarea>

                    </div><!-- col-lg-12 konec-->
                    </div><!-- form-group konec -->
                    <div class="form-group"><!-- form-group začátek -->
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-6"><!-- col-md-6 začátek -->
                            <input type="submit" name="update" value="upravit css" class="form-control btn btn-primary">

                    </div><!-- col-md-6 konec -->
                    </div><!-- form-group konec -->
                </form>
            </div><!-- panel-body konec --> 
        </div><!-- panel panel-default konec -->
    </div><!-- col-lg-12 konec -->
</div><!-- row 2 konec -->

<?php 
if(isset($_POST['update'])){
    $newdata= $_POST['newdata'];
    $handle = fopen($file, "w");
    fwrite( $handle,$newdata);
    fclose($handle);

    echo "<script>alert('Css bylo upraveno')</script>";
    echo "<script>window.open('index.php?edit_css', '_self')</script>";
}

?>


<?php } ?>