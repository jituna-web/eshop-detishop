<?php include "includes/db.php" ?>
<div class="uzivatel">
    <br>
    <?php 
        
        $customer_session = $_SESSION['customer_email'];
        
        $get_customer = "select * from customers where customer_email='$customer_session'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $row_customer = mysqli_fetch_array($run_customer);
        
        $customer_name = $row_customer['customer_name'];
        $customer_email = $row_customer['customer_email'];
        $customer_contact = $row_customer['customer_contact'];
        $customer_address = $row_customer['customer_address'];
        $customer_city = $row_customer['customer_city'];

        
        if(!isset($_SESSION['customer_email'])){
            
        }else{
            
            echo "
                
                <br/>
                
                <h3 class='panel-title' align='center' style='color:#9B30FF;'>
                  $customer_name
                </h3>
                <br>
                <p align='center'>Email: $customer_email</p>
                <p align='center'>Telefon: $customer_contact</p>
                <p align='center'>Adresa: $customer_address</p>
                <p align='center'>Město: $customer_city</p>
            
            ";
            
        }
        
        ?>
<br>
<hr>
    <div class="panel-body"><!-- panel body Finish -->
        <nav class="nav-pills nav-stacked-nav">
            <li class="<?php if(isset($_GET['my_orders'])) {echo "active";} ?>">
                <a href="my_account.php?my_orders">
                    <i class="fa fa-list"></i> Moje objednávky
                </a>
            </li>
            <li class="<?php if(isset($_GET['pay_offline'])) {echo "active";} ?>">
                <a href="my_account.php?pay_offline">
                    <i class="fa fa-bolt"></i> Platby             
                </a>
            </li>
            <li class="<?php if(isset($_GET['change_pass'])) {echo "active";} ?>">
                <a href="my_account.php?change_pass">
                    <i class="fa fa-user"></i> Změna hesla
                </a>
            </li>
            <li class="<?php if(isset($_GET['edit_account'])) {echo "active";} ?>">
                <a href="my_account.php?edit_account">
                    <i class="fa fa-pencil"></i> Upravit profil
                </a>
            </li>
            <li class="<?php if(isset($_GET['delete_account'])) {echo "active";} ?>">
                <a href="my_account.php?delete_accounts">
                    <i class="fa fa-trash-o"></i> Smazat účet
                </a>
            </li>
            <li>
                <a href="logout.php">
                <i class="fas fa-sign-out-alt"></i> Odhlásit se
                </a>
            </li>
           
            
        </nav>
        
    </div><!-- panel body Finish -->
</div>  