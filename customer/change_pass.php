<h1 align="center" style="color:#9B30FF;"> Změna hesla</h1>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="form-froup"><!-- form-group začátek-->
        <label> Staré heslo:</label>
        <input type="password" name="old_pass" class="form-control" required>
    </div><!-- form-group konec-->
    <div class="form-froup"><!-- form-group začátek-->
        <label> Nové heslo:</label>
        <input type="password" name="new_pass" class="form-control" required>
    </div><!-- form-group konec-->
    <div class="form-froup"><!-- form-group začátek-->
        <label> Zadejte znova nové heslo:</label>
        <input type="password" name="new_pass_again" class="form-control" required>
    </div><!-- form-group konec-->
    <br>
    <div class="text-center"><!-- text-center začátek-->
        <button name="submit" name="submit" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Aktualizovat
        </button>
    </div><!-- text-center konec-->


</form>
<?php 

if(isset($_POST['submit'])){
    
    $c_email = $_SESSION['customer_email'];
    
    $c_old_pass = $_POST['old_pass'];
    
    $c_new_pass = $_POST['new_pass'];
    
    $c_new_pass_again = $_POST['new_pass_again'];
    
    $sel_c_old_pass = "select * from customers where customer_pass='$c_old_pass'";
    
    $run_c_old_pass = mysqli_query($con,$sel_c_old_pass);
    
    $check_c_old_pass = mysqli_fetch_array($run_c_old_pass);
    
    if($check_c_old_pass==0){
        
        echo "<script>alert('Litujeme, vaše aktuální heslo není platné. Prosím zkuste to znovu')</script>";
        
        exit();
        
    }
    
    if($c_new_pass!=$c_new_pass_again){
        
        echo "<script>alert('Je nám líto, vaše nové heslo neodpovídá')</script>";
        
        exit();
        
    }
    
    $update_c_pass = "update customers set customer_pass='$c_new_pass' where customer_email='$c_email'";
    
    $run_c_pass = mysqli_query($con,$update_c_pass);
    
    if($run_c_pass){
        
        echo "<script>alert('Vaše heslo bylo změněno')</script>";
        
        echo "<script>window.open('my_account.php?my_orders','_self')</script>";
        
    }
    
}

?>