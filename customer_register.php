<?php 
$active='Můj účet';
include "includes/header.php"?>

   <div id="content"> <!-- content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12  Begin -->
            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li><!-- li Begin -->
                    <a href="index.php">Domů</a>
                </li><!-- li Finish -->
                <li><!-- li Begin -->
                    Registrace
                </li><!-- li Finish -->
            </ul><!-- bradcrumb Finish -->
        </div><!-- col-md-12 Finish -->
        <div class="col-md-9"><!-- col-md-9 Begin -->
            <div class="box" id="kontakt"><!-- box Begin -->
                <div class="box-header"><!-- box-header Begin -->
                    <center>
                        <h2>Registrace</h2>
                    </center>
                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                        <div class="form-group"><!-- form-group Begin -->
                            <label>Jméno a Příjmení</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label>Email</label>
                            <input type="text" class="form-control" name="c_email" required>
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label>Heslo</label>
                            <input type="password" class="form-control" name="c_pass" required>
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Adresa</label>
                               
                               <input type="text" class="form-control" name="c_address" required>
                               
                           </div><!-- form-group Finish -->
                           
                        
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Město a psč</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Telefon</label>
                               
                               <input type="text" class="form-control" name="c_contact" required>
                               
                           </div><!-- form-group Finish -->
                           
                          
                        <div class="text-center"><!-- text-center Begin -->
                            <button type="submit" name="register" class="btn btn-primary">
                            <i class="fas fa-clipboard-check"></i> Registrovat</button> 
                        </div><!-- text-center Finish -->
                    </form>
                    <br>
                    <center>
                        <p>Máte účet? Přihlaste se<a href="login.php"> zde </a></p>
                    </center>
                </div><!-- box-header Finish -->
            </div> <!-- box Finish -->
        </div> <!-- col-md-9 Finish -->
    </div> <!-- container Finish -->
</div><!-- content Finish -->


<?php 

if(isset($_POST['register'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_pass = $_POST['c_pass'];
    $c_address = $_POST['c_address'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    
    $c_ip = getRealIpUser();
    
    
    $insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_address,customer_city,customer_contact,customer_ip) values ('$c_name','$c_email','$c_pass','$c_address','$c_city','$c_contact','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('Registrace proběhla úspěšně')</script>";
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('Registrace proběhla úspěšně')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    
}

?>

<?php include "includes/footer.php"?>