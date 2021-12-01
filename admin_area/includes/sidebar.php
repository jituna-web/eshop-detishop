<?php include "includes/header.php"; 
?>
<?php 
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header"> <!-- navbar-header začátek -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Přepnout navigaci</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php?dashboard" class="navbar-brand" style="color:aqua;"> Administrace - detishop.cz</a>
    </div><!-- navbar-header konec -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"style="color:aqua;margin-right:20px;">
                <i class="fa fa-user"></i> <?php echo $admin_name;?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>">
                        <i class="fa fa-fw fa-user"></i> Profil
                    </a>
                </li>
                <li>
                    <a href="index.php?view_products">
                        <i class="fa fa-fw fa-envelope"></i> Produkty
                        <span class="badge"><?php echo $count_products;?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_customers">
                        <i class="fa fa-fw fa-users"></i> Zákazníci
                        <span class="badge"><?php echo $count_customers;?></span>
                    </a>
                </li>
                <li>
                    <a href="index.php?view_cats">
                        <i class="fa fa-fw fa-gear"></i> Kategorie
                        <span class="badge"><?php echo $count_categories;?></span>
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="logout.php">
                        <i class="fa fa-fw fa-power-off"></i> odhlásit se
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!--collapse navbar-collapse navbar-ex1-collapse začátek-->
        <ul class="nav navbar-nav side-nav">
            <li>
                <a href="index.php?dashboard">
                    <i class="fa fa-fw fa-dashboard"></i> Nástěnka
                </a>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#products">
                    <i class="fa fa-fw fa-tag"></i> Produkty
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="products" class="collapse">
                    <li>
                    <a href="index.php?insert_product">vložit produkt</a>
                    </li>
                    <li>
                    <a href="index.php?view_products">zobrazit produkty</a>
                </li>
                </ul>
            </li>
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#manufacturer"><!-- a href begin -->
                        
                        <i class="fas fa-building"></i> Výrobci
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="manufacturer" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_manufacturer"> Vložit výrobce </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_manufacturers"> Zobrazit výrobce </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            <li>
                <a href="#" data-toggle="collapse" data-target="#cat">
                    <i class="fa fa-fw fa-edit"></i> Kategorie
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="cat" class="collapse">
                    <li>
                    <a href="index.php?insert_cat">vytvořit kategorii</a>
                    </li>
                    <li>
                    <a href="index.php?view_cats">zobrazit kategorie</a>
                </li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="collapse" data-target="#p_cat">
                    <i class="fas fa-cogs"></i> Podkategorie
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="p_cat" class="collapse">
                    <li>
                    <a href="index.php?insert_p_cat">vytvořit podkategorii</a>
                    </li>
                    <li>
                    <a href="index.php?view_p_cats">zobrazit podkategorie</a>
                </li>
                </ul>
            </li> 
            <li>
                <a href="#" data-toggle="collapse" data-target="#slides">
                    <i class="fas fa-camera"></i> Posuvník obrázků
                    <i class="fa fa-fw fa-caret-down"></i>
                </a>
                <ul id="slides" class="collapse">
                    <li>
                    <a href="index.php?insert_slide">vytvořit slider</a>
                    </li>
                    <li>
                    <a href="index.php?view_slides">zobrazit slidery</a>
                </li>
                </ul>
            </li>
                
                <li>
                <a href="#" data-toggle="collapse" data-target="#boxes">
                        
                        <i class="fas fa-box"></i> Boxy
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="boxes" class="collapse">
                    <li>
                        <a href="index.php?insert_box"> Vložit box </a>
                    </li>
                    <li>
                        <a href="index.php?view_boxes"> Zobrazit boxy </a>
                    </li>
                </ul>
                
            </li>
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#coupon"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-book"></i> Kupóny
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="coupon" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_coupon"> vložit kupón </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_coupons"> zobrazit kupóny </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#terms">
                        
                        <i class="fa fa-fw fa-star"></i> Podmínky
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="terms" class="collapse">
                    <li>
                        <a href="index.php?insert_term"> Vložit podmínky </a>
                    </li>
                    <li>
                        <a href="index.php?view_terms"> Zobrazit podmínky </a>
                    </li>
                </ul>
                
            </li>
            <li>
                    <a href="index.php?view_customers">
                    <i class="far fa-user-circle"></i> Zákazníci
                </a>
            </li>
            <li>
                <a href="index.php?view_orders">
                    <i class="fa fa-fw fa-book"></i> Objednávky
                </a>
            </li>
            
            <li>
                <a href="index.php?view_payments">
                    <i class="fa fa-fw fa-money"></i> Platby
                </a>
            </li>
            <li>
                    <a href="index.php?edit_css">
                    <i class="fas fa-pencil-alt"></i> CSS editor
                </a>
            </li>
            
            <li>
                <a href="#" data-toggle="collapse" data-target="#users">
                        
                        <i class="fa fa-fw fa-users"></i> Uživatelé
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a>
                
                <ul id="users" class="collapse">
                    <li>
                        <a href="index.php?insert_user"> Vložit uživatele</a>
                    </li>
                    <li>
                        <a href="index.php?view_users"> Zobrazit uživatele </a>
                    </li>
                    <li>
                        <a href="index.php?user_profile=<?php echo $admin_id;?>"> Upravit profil </a>
                    </li>
                </ul>
                
            </li>
            
            <li>
                <a href="logout.php" style="color:aqua;">
                    <i class="fa fa-fw fa-power-off"></i> odhlásit se
                </a>
            </li>
            
        </ul>
    </div><!--collapse navbar-collapse navbar-ex1-collapse konec-->
</nav>
<?php } ?>