<?php
$active='Můj účet';
include "includes/header.php";?>

<div id="content"> <!-- content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12  Begin -->
            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li><!-- li Begin -->
                    <a href="index.php">Domů</a>
                </li><!-- li Finish -->
                <li><!-- li Begin -->
                    Přihlášení
                </li><!-- li Finish -->
            </ul><!-- bradcrumb Finish -->
        </div><!-- col-md-12 Finish -->
        <div class="col-md-6"id="formular"><!-- col-md-6 začátek -->
        <?php
        if(!isset($_SESSION['customer_email'])){
          include("customer/customer_login.php");
        } else {
          include "payment_options.php";
        }
        ?>
        </div><!-- col-md-6 konec -->

    </div> <!-- container Finish -->
</div><!-- content Finish -->



<?php include "includes/footer.php";?>