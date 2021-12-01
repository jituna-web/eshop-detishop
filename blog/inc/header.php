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
               
           <p class="kon"><i class="fas fa-envelope"></i><a href="mailto:blog@detishop.cz"> blog@detishop.cz</a></p>
            
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
               <li>
                       <a href="../shop.php"> Zpět na eshop</a>
                   </li>
                   <li>
                       <a href="customer_register.php"><i class="fas fa-clipboard-check"></i> Registrace</a>
                   </li>
                   <li>
                       <a href="customer/my_account.php"><i class="fas fa-user"></i> Můj účet</a>
                   </li>
                   <li>
                       <a href="login.php"><i class="fas fa-sign-in-alt"></i> 

                       <?php 
                           
                           if(!isset($_SESSION['customer_email'])){
                       
                                echo "<a href='login.php'> Přihlášení </a>";

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
                       
                       <li class="<?php if($active=='Domů') echo"active"; ?>">
                           <a href="index.php">Domů</a>
                       </li>
                       <li class="<?php if($active=='Články') echo"active"; ?>">
                           <a href="clanky.php">Články</a>
                       </li>
                       <li class="<?php if($active=='Můj účet') echo"active"; ?>">
                       <?php 
                       if(!isset($_SESSION['customer_email'])){
                            echo"<a href='login.php'> Můj účet</a>";
                       } else {
                        echo"<a href='customer/my_account.php?my_orders'> Můj účet</a>";
                       }
                       ?>    

                       </li>
                       <li class="<?php if($active=='Návody') echo"active"; ?>">
                           <a href="navody.php">Návody</a>
                       </li>
                       <li class="<?php if($active=='Kontaktujte nás') echo"active"; ?>">
                           <a href="contact.php">Kontaktujte nás</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
              
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