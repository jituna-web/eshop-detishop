<div class="box"> <!-- box začátek -->
    <div class="box-header"><!-- box-header začátek -->
    <center>
        <h1 style="color:#9B30FF;">Přihlášení</h1>
        <p class="lead">Už máte u nás účet?</p>
        <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem mollitia itaque vitae magnam obcaecati inventore aliquam tempore hic sed. Consectetur natus quae obcaecati. Corrupti esse tempore adipisci suscipit, voluptates quasi?</p>
    </center>
    </div><!-- box-header konec -->
    <form method="post" action="login.php">
        <div class="form-group">
            <label>Email</label>
            <input name="c_email" type="text" class="form-control" required>
        </div>
        <div class="form-group">
        <label>Heslo</label>
        <input name="c_pass" type="password" class="form-control" required>
        </div>
        <div class="text-center">
            <button name="login" value="Přihlášení" class="btn btn-primary">
            <i class="fas fa-sign-in-alt"></i> Přihlášení

            </button>
        </div>
    </form>
    <br>
    <center>
        
            <p>Nemáte účet? Zaregistrujte se<a href="customer_register.php"> zde </a></p>
        
    </center>

</div> <!-- box konec-->

<?php 

if(isset($_POST['login'])){
    
    $customer_email = $_POST['c_email'];
    
    $customer_pass = $_POST['c_pass'];
    
    $select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
    
    $run_customer = mysqli_query($con,$select_customer);
    
    $get_ip = getRealIpUser();
    
    $check_customer = mysqli_num_rows($run_customer);
    
    $select_cart = "select * from cart where ip_add='$get_ip'";
    
    $run_cart = mysqli_query($con,$select_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_customer==0){
        
        echo "<script>alert('Nesprávný email nebo heslo')</script>";
        
        exit();
        
    }
    
    if($check_customer==1 AND $check_cart==0){
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('Jste přihlášení')</script>"; 
        
       echo "<script>window.open('customer/my_account.php?my_orders','_self')</script>";
        
    }else{
        
        $_SESSION['customer_email']=$customer_email;
        
       echo "<script>alert('Jste přihlášení')</script>"; 
        
       echo "<script>window.open('login.php','_self')</script>";
        
    }
    
}

?>