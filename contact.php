<?php
$active='Kontaktujte nás';
include "includes/header.php"?>

<div id="content"> <!-- content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12  Begin -->
            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li><!-- li Begin -->
                    <a href="index.php">Domů</a>
                </li><!-- li Finish -->
                <li><!-- li Begin -->
                    Kontakt
                </li><!-- li Finish -->
            </ul><!-- bradcrumb Finish -->
        </div><!-- col-md-12 Finish -->
        <div class="col-md-9"><!-- col-md-9 Begin -->
            <div class="box" id="kontakt"><!-- box Begin -->
                <div class="box-header"><!-- box-header Begin -->
                    <center>
                        <h2>Kontaktujte nás</h2>
                        <p class="text-muted"><!-- text-muted Begin -->
                            Pokud máte dotazy, zanechte nám zprávu a náš zákaznický servis se vám ozve v co nejkratší době
                        </p><!-- text-muted Finish -->
                    </center>
                    <form action="contact.php" method="post">
                        <div class="form-group"><!-- form-group Begin -->
                            <label>Jméno</label>
                            <input type="text" class="form-control" name="name" required>
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label>Předmět</label>
                            <input type="text" class="form-control" name="subject" required>
                        </div><!-- form-group Finish -->
                        <div class="form-group"><!-- form-group Begin -->
                            <label>Zpráva</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div><!-- form-group Finish -->
                        <div class="text-center"><!-- text-center Begin -->
                            <button type="submit" name="submit" class="btn btn-primary">
                            <i class="fa fa-user-md"></i> odeslat</button>

                        </div><!-- text-center Finish -->
                    </form>
                    <?php 
                     if(isset($_POST['submit'])){
                        // amin zpráva
                        $sender_name = $_POST['name'];
                        $sender_email = $_POST['email'];
                        $sender_subject = $_POST['subject'];
                        $sender_message = $_POST['message'];
                        $receiver_email = "info@jh-design.cz";
                        mail($receiver_email, $sender_name, $sender_email, $sender_subject, $sender_message);

                        // automatická odpověď
                        $email = $_POST['email'];
                        $subject = "Vaše zpráva byla doručena";
                        $msg = "Přijali jsme vaší zprávu, v nejkratší době vám odpovíme";
                        $from = "info@jh-design.cz";
                        mail($email, $subject, $msg, $from);
                        echo "<script>window.open('Vaše zpráva byla odeslána')</script>";
                     }
                    ?>

                </div><!-- box-header Finish -->
            </div> <!-- box Finish -->
        </div> <!-- col-md-9 Finish -->
    </div> <!-- container Finish -->
</div><!-- content Finish -->




<?php include "includes/footer.php"?>