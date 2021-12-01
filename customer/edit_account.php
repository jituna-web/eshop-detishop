<?php 
$customer_session = $_SESSION['customer_email'];
$get_customer = "select * from customers where customer_email='$customer_session'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_id = $row_customer['customer_id'];
$customer_name = $row_customer['customer_name'];
$customer_email = $row_customer['customer_email'];
$customer_contact = $row_customer['customer_contact'];
$customer_address = $row_customer['customer_address'];
$customer_city = $row_customer['customer_city'];


?>

<h1 align="center" style="color:#9B30FF;"> Upravit profil</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-froup"><!-- form-group začátek-->
        <label> Jméno:</label>
        <input type="text" name="c_name" class="form-control" value="<?php echo $customer_name ?>" required>
    </div><!-- form-group konec-->
    <div class="form-froup"><!-- form-group začátek-->
        <label> Email:</label>
        <input type="text" name="c_email" class="form-control" value="<?php echo $customer_email ?>" required>
    </div><!-- form-group konec-->
    <div class="form-froup"><!-- form-group začátek-->
        <label> Telefon:</label>
        <input type="text" name="c_contact" class="form-control" value="<?php echo $customer_contact ?>" required>
    </div><!-- form-group konec-->
    <div class="form-froup"><!-- form-group začátek-->
        <label> Adresa:</label>
        <input type="text" name="c_address" class="form-control" value="<?php echo $customer_address ?>" required>
    </div><!-- form-group konec-->
    <div class="form-froup"><!-- form-group začátek-->
        <label> Město a psč:</label>
        <input type="text" name="c_city" class="form-control" value="<?php echo $customer_city ?>" required>
    </div><!-- form-group konec-->
    <br>
    <div class="text-center"><!-- text-center začátek-->
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Aktualizovat
        </button>
    </div><!-- text-center konec-->
</form>
<?php 

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    $c_name = $_POST['c_name'];
    $c_email = $_POST['c_email'];
    $c_contact = $_POST['c_contact'];
    $c_address = $_POST['c_address'];
    $c_city = $_POST['c_city'];
        
    $update_customer = "update customers set customer_name='$c_name',customer_email='$c_email',customer_contact='$c_contact', customer_address='$c_address',customer_city='$c_city' where customer_id='$update_id' ";
    $run_customer = mysqli_query($con,$update_customer);
    if($run_customer){
        
        echo "<script>alert('Vaše údaje byli změněny.')</script>";
        
        echo "<script>window.open('logout.php','_self')</script>";
        
    }
    
}

?>