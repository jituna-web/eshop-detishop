<?php 
session_start();
if(!isset($_SESSION['customer_email'])){
     echo"<script>window.open('../login.php', '_self')</script>";
} else {

    include "functions/functions.php"; 
    include "includes/db.php";

    if(isset($_GET['order_id'])){
    
        $order_id = $_GET['order_id'];
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detishop.cz</title>
    <link rel="shortcut icon" href="images/detishop-logo-mob.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
           <p class="kon"><i class="fas fa-phone"></i><a href="tel:+420123456789"> +420 123 456 789</a></p>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="../customer_register.php"><i class="fas fa-clipboard-check"></i> Registrace</a>
                   </li>
                   <li>
                       <a href="my_account.php"><i class="fas fa-user"></i> Můj účet</a>
                   </li>
                   <li>
                       <a href="../cart.php"><i class="fas fa-shopping-cart"></i> Košík</a>
                   </li>
                   <li>
                       <a href="../login.php"><i class="fas fa-sign-in-alt"></i>
                       <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='../login.php'> Přihlášení </a>";

                               }else{

                                echo " <a href='logout.php'> Odhlásit se </a> ";

                               }
                           
                           ?>
                    </a>
                   </li>
                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="../index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->
                   
                   <img src="images/detishop-logo.png" alt="detishop Logo" class="hidden-xs">
                   <img src="images/detishop-logo-mob.png" alt="detishop Logo Mobile" class="visible-xs">
                   
               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Přepnout navigaci</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Přepnout hledání</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li class="active">
                           <a href="../index.php">Domů</a>
                       </li>
                       <li>
                           <a href="../shop.php">eShop</a>
                       </li>
                       <li class="<?php if($active=='Můj účet') echo"active"; ?>">
                           <a href="my_account.php">Můj účet</a>
                       </li>
                       <li>
                           <a href="../cart.php">Košík</a>
                       </li>
                       <li>
                           <a href="../contact.php">Kontaktujte nás</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="../cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span><?php items(); ?> zboží v košíku | Celkem: <?php total_price(); ?> Kč</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Přepnout hledání</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Hledat" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
  

<div id="content"> <!-- content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12  Begin -->
            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li><!-- li Begin -->
                    <a href="my_account.php">Můj účet</a>
                </li><!-- li Finish -->
                <li><!-- li Begin -->
                    Platba
                </li><!-- li Finish -->
            </ul><!-- bradcrumb Finish -->
        </div><!-- col-md-12 Finish -->

<div class="col-md-9" id="form-payment"><!-- col-md-9 Začátek -->
    <h1> Prosím potvrďte svojí platbu</h1>
            <form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/form-data">
                <div class="form-group"><!-- form-group Začátek -->
                    <label> Faktura číslo:</label>
                    <input type="text" class="form-control" name="invoice_no" required>
                </div><!-- form-group konec -->
                <div class="form-group"><!-- form-group Začátek -->
                    <label> Částka k zaplacení:</label>
                    <input type="text" class="form-control" name="amount_sent" required>
                </div><!-- form-group konec -->
                <div class="form-group"><!-- form-group Začátek -->
                    <label> Vybrat platební metodu</label>
                    <select name="payment_mode" class="form-control">
                        <option> platební metoda</option>
                        <option> Bankovní převod</option>
                        <option> PayPal</option>
                        <option> Online platba</option>
                        <option> Dobírka</option>
                    </select>
                </div><!-- form-group konec -->
                <div class="form-group"><!-- form-group Začátek -->
                    <label> Datum platby:</label>
                    <input type="text" class="form-control" name="date" required>
                </div><!-- form-group konec -->
                <div class="text-center"><!-- text-center Begin -->
                           
                           <button class="btn btn-primary btn-lg" name="confirm_payment"><!-- tn btn-primary btn-lg Begin -->
                               
                               <i class="fa fa-user-md"></i> Potvrdit platbu
                               
                           </button><!-- tn btn-primary btn-lg Finish -->
                           
                       </div><!-- text-center Finish -->
                       <br>
            </form>
            <?php 
                   
                   if(isset($_POST['confirm_payment'])){
                       
                       $update_id = $_GET['update_id'];
                       
                       $invoice_no = $_POST['invoice_no'];
                       
                       $amount = $_POST['amount_sent'];
                       
                       $payment_mode = $_POST['payment_mode'];
                       
                       $payment_date = $_POST['date'];
                       
                       $complete = "zaplaceno";
                       
                       $insert_payment = "insert into payments (invoice_no,amount,payment_mode,payment_date) values ('$invoice_no','$amount','$payment_mode','$payment_date')";
                       
                       $run_payment = mysqli_query($con,$insert_payment);
                       
                       $update_customer_order = "update customer_orders set order_status='$complete' where order_id='$update_id'";
                       
                       $run_customer_order = mysqli_query($con,$update_customer_order);
                       
                       $update_pending_order = "update pending_orders set order_status='$complete' where order_id='$update_id'";
                       
                       $run_pending_order = mysqli_query($con,$update_pending_order);
                       
                       if($run_pending_order){
                           
                           echo "<script>alert('Děkujeme. vaše objednávka bude vyřízena do 24 hodin.')</script>";
                           
                           echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                           
                       }
                       
                   }
                  
                  ?>
                  
        </div><!-- col-md-9 Finish -->


       <?php include "includes/platba.php"; ?>
    </div>
</div>
</div>
<br>
<?php include "includes/footer.php"?>
<?php }?>