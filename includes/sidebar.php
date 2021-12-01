<?php 

$aMan = array();
$aCat = array();
$aPcat = array();

// This is for manufacturers Begin //

if(isset($_REQUEST['man'])&&is_array($_REQUEST['man'])){

    foreach($_REQUEST['man'] as $sKey=>$sVal){

        if((int)$sVal!=0){

            $aMan[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for manufacturers Finisih //

// This is for categories Begin //

if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){

    foreach($_REQUEST['cat'] as $sKey=>$sVal){

        if((int)$sVal!=0){

            $aCat[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for categories Finisih //

// This is for products_categories Begin //

if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){

    foreach($_REQUEST['p_cat'] as $sKey=>$sVal){

        if((int)$sVal!=0){

            $aPcat[(int)$sVal] = (int)$sVal;

        }

    }

}

// This is for products_categories Finisih //

?>
<div class="panel panel-default sidebar-menu"> <!--panel panel-default sidebar-menu začátek -->
    <div class="panel-heading" style="background:pink;width: 252px;box-shadow: 0 1px 5px gray;"><!--panel-heading začátek -->
        <h3 class="panel-title" style="font-size:20px;text-align:center;text-decoration:none;" >
            Kategorie
            <div class="pull-right"><!--pull-right začátek-->
                <a href="JavaScript:Void(0);" style="color:gray; font-size:15px;">
                    <span class="nav-toggle hide-show"> skrýt</span>
                </a>
            </div><!--pull-right konec-->
        </h3>
    </div><!--panel-heading konec -->
    <div class="panel-collapse collapse-data"> <!-- panel-collapse začátek-->
    <div class="panel-body"><!--panel-body 1 začátek -->
        <div class="input-group"><!--input-group začátek -->
            <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-cat"
            data-action="filter" placeholder="filtrovat kategorie">
            <a href="" class="input-group-addon">
                <i class="fa fa-search"></i>
            </a>

        </div><!--input-group konec -->
        </div><!--panel-body 1 konec -->
    <div class="panel-body scroll-menu" id="dev-cat"><!--panel-body 2 začátek -->
        <ul class="nav nav-pills nav-stacked category-menu">
        <?php 
                
                $get_cat = "select * from categories where cat_top='ano'";
                $run_cat = mysqli_query($con,$get_cat);

                while($row_cat=mysqli_fetch_array($run_cat)){

                    $cat_id = $row_cat['cat_id'];
                    $cat_title = $row_cat['cat_title'];
                    $cat_image = $row_cat['cat_image'];

                    if($cat_image == ""){

                    }else{

                        $cat_image = "<img src='admin_area/other_images/$cat_image' width='20px'>&nbsp;";

                    }

                    echo "
                    <li style='background:#B0E2FF;line-height:1px;border-radius:9px;' class='checkbox checkbox-primary'>

                        <a style='color:black;' >

                            <label>

                                <input ";
                                
                                if(isset($aCat[$cat_id])){
                                    echo "checked='checked'";
                                }
                                
                                echo " value='$cat_id' type='checkbox' class='get_cat' name='cat'>

                                <span>
                                $cat_image
                                $cat_title
                                </span>

                            </label>

                        </a>
                    
                    </li>
                    ";

                }
                        
                $get_cat = "select * from categories where cat_top='ne'";
                $run_cat = mysqli_query($con,$get_cat);
        
                    while($row_cat=mysqli_fetch_array($run_cat)){
        
                        $cat_id = $row_cat['cat_id'];
                        $cat_title = $row_cat['cat_title'];
                        $cat_image = $row_cat['cat_image'];
        
                    if($cat_image == ""){
        
                        }else{
        
                            $cat_image = "<img src='admin_area/other_images/$cat_image' width='20px'>&nbsp;";
        
                        }
        
                        echo "
                            <li style='background:pink;line-height:1px;border-radius:9px;' class='checkbox checkbox-primary'>
        
                                <a style='color:black;' >
        
                                    <label>
        
                                        <input ";
                                        
                                        if(isset($aCat[$cat_id])){
                                            echo "checked='checked'";
                                        }
                                        
                                        echo " value='$cat_id' type='checkbox' class='get_cat' name='cat'>
        
                                        <span>
                                        $cat_image
                                        $cat_title
                                        </span>
        
                                    </label>
        
                                </a>
                            
                            </li>
                            ";
        
                        }
                ?>
                
        </ul>
    </div><!--panel-body 2 konec -->
    </div><!-- panel-collapse konec-->
</div><!--panel panel-default sidebar-menu konec-->



<div class="panel panel-default sidebar-menu"> <!--panel panel-default sidebar-menu začátek -->
    <div class="panel-heading" style="background:pink;width: 252px;box-shadow: 0 1px 5px gray;"><!--panel-heading začátek -->
        <h3 class="panel-title" style="font-size:20px;text-align:center;text-decoration:none;" >
            Podkategorie
            <div class="pull-right"><!--pull-right začátek-->
                <a href="JavaScript:Void(0);" style="color:gray; font-size:15px;">
                    <span class="nav-toggle hide-show"> skrýt</span>
                </a>
            </div><!--pull-right konec-->
        </h3>
    </div><!--panel-heading konec -->
    <div class="panel-collapse collapse-data"> <!-- panel-collapse začátek-->
    <div class="panel-body"><!--panel-body 1 začátek -->
        <div class="input-group"><!--input-group začátek -->
            <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-p_cat"
            data-action="filter" placeholder="filtrovat podkategorie">
            <a href="" class="input-group-addon">
                <i class="fa fa-search"></i>
            </a>

        </div><!--input-group konec -->
        </div><!--panel-body 1 konec -->
    <div class="panel-body scroll-menu" id="dev-p_cat"><!--panel-body 2 začátek -->
        <ul class="nav nav-pills nav-stacked category-menu">
        <?php 
                
                $get_p_cat = "select * from product_categories where p_cat_top='ano'";
                $run_p_cat = mysqli_query($con,$get_p_cat);

                while($row_p_cat=mysqli_fetch_array($run_p_cat)){

                    $p_cat_id = $row_p_cat['p_cat_id'];
                    $p_cat_title = $row_p_cat['p_cat_title'];
                    $p_cat_image = $row_p_cat['p_cat_image'];

                    if($p_cat_image == ""){

                    }else{

                        $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20px'>&nbsp;";

                    }

                    echo "
                    <li style='background:#B0E2FF;line-height:1px;border-radius:9px;' class='checkbox checkbox-primary'>

                        <a style='color:black;' >

                            <label>

                                <input ";
                                
                                if(isset($aPcat[$p_cat_id])){
                                    echo "checked='checked'";
                                }
                                
                                echo " value='$p_cat_id' type='checkbox' class='get_p_cat' name='p_cat'>

                                <span>
                                $p_cat_image
                                $p_cat_title
                                </span>

                            </label>

                        </a>
                    
                    </li>
                    ";

                }
                        
                $get_p_categories = "select * from product_categories where p_cat_top='ne'";
                $run_p_categories = mysqli_query($con,$get_p_categories);

                while($row_p_categories=mysqli_fetch_array($run_p_categories)){

                    $p_cat_id = $row_p_categories['p_cat_id'];
                    $p_cat_title = $row_p_categories['p_cat_title'];
                    $p_cat_image = $row_p_categories['p_cat_image'];

                    if($p_cat_image == ""){

                    }else{

                        $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20px'>&nbsp;";

                    }

                    echo "
                    <li style='background:pink;line-height:1px;border-radius:9px;' class='checkbox checkbox-primary'>

                        <a style='color:black;' >

                            <label>

                                <input ";
                                
                                if(isset($aPcat[$p_cat_id])){
                                    echo "checked='checked'";
                                }
                                
                                echo " value='$p_cat_id' type='checkbox' class='get_p_cat' name='p_cat'>

                                <span>
                                $p_cat_image
                                $p_cat_title
                                </span>

                            </label>

                        </a>
                    
                    </li>
                    ";

                }
                ?>
                
        </ul>
    </div><!--panel-body 2 konec -->
    </div><!-- panel-collapse konec-->
</div><!--panel panel-default sidebar-menu konec-->


    <div class="panel panel-default sidebar-menu"> <!--panel panel-default sidebar-menu začátek -->
    <div class="panel-heading" style="background:pink;width: 252px;box-shadow: 0 1px 5px gray;"><!--panel-heading začátek -->
        <h3 class="panel-title" style="font-size:20px;text-align:center;text-decoration:none;" >
            Výrobci
            <div class="pull-right"><!--pull-right začátek-->
                <a href="JavaScript:Void(0);" style="color:gray; font-size:15px;">
                    <span class="nav-toggle hide-show"> skrýt</span>
                </a>
            </div><!--pull-right konec-->
        </h3>
    </div><!--panel-heading konec -->
    <div class="panel-collapse collapse-data"> <!-- panel-collapse začátek-->
    <div class="panel-body"><!--panel-body 1 začátek -->
        <div class="input-group"><!--input-group začátek -->
            <input type="text" class="form-control" id="dev-table-filter" data-filters="#dev-manufacturer"
            data-action="filter" placeholder="filtrovat výrobce">
            <a href="" class="input-group-addon">
                <i class="fa fa-search"></i>
            </a>

        </div><!--input-group konec -->
        </div><!--panel-body 1 konec -->
    <div class="panel-body scroll-menu" id="dev-manufacturer"><!--panel-body 2 začátek -->
        <ul class="nav nav-pills nav-stacked category-menu">
        <?php 
                
                $get_manufacturer = "select * from manufacturers where manufacturer_top='ano'";
                $run_manufacturer = mysqli_query($con,$get_manufacturer);

                while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){

                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
                    $manufacturer_image = $row_manufacturer['manufacturer_image'];

                    if($manufacturer_image == ""){

                    }else{

                        $manufacturer_image = "<img src='admin_area/other_images/$manufacturer_image' width='20px'>&nbsp;";

                    }

                    echo "
                    <li style='background:#B0E2FF;line-height:1px;border-radius:9px;' class='checkbox checkbox-primary'>

                        <a style='color:black;' >

                            <label>

                                <input ";
                                
                                if(isset($aMan[$manufacturer_id])){
                                    echo "checked='checked'";
                                }
                                
                                echo " value='$manufacturer_id' type='checkbox' class='get_manufacturer' name='manufacturer'>

                                <span>
                                $manufacturer_image
                                $manufacturer_title
                                </span>

                            </label>

                        </a>
                    
                    </li>
                    ";

                }
                $get_manufacturer = "select * from manufacturers where manufacturer_top='ne'";
                $run_manufacturer = mysqli_query($con,$get_manufacturer);

                while($row_manufacturer=mysqli_fetch_array($run_manufacturer)){

                    $manufacturer_id = $row_manufacturer['manufacturer_id'];
                    $manufacturer_title = $row_manufacturer['manufacturer_title'];
                    $manufacturer_image = $row_manufacturer['manufacturer_image'];

                    if($manufacturer_image == ""){

                    }else{

                        $manufacturer_image = "<img src='admin_area/other_images/$manufacturer_image' width='20px'>&nbsp;";

                    }

                    echo "
                    <li style='background:pink;line-height:1px;border-radius:9px;' class='checkbox checkbox-primary'>

                        <a style='color:black;>

                        <label>

                            <input ";
                            
                            if(isset($aMan[$manufacturer_id])){
                                echo "checked='checked'";
                            }
                            
                            echo " value='$manufacturer_id' type='checkbox' class='get_manufacturer' name='manufacturer'>

                            <span>
                            $manufacturer_image
                            $manufacturer_title
                            </span>

                        </label>

                        </a>
                    
                    </li>
                    ";

                }
                
                
                
                ?>
                
        </ul>
    </div><!--panel-body 2 konec -->
    </div><!-- panel-collapse konec-->
</div><!--panel panel-default sidebar-menu konec-->



       
<br>
