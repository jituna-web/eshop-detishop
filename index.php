<?php 
$active='Domů';
include "includes/header.php";

?>

   
   <div class="container" id="slider"><!-- container Begin -->
       
       <div class="col-md-12"><!-- col-md-12 Begin -->
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
           <h3 class="text-center" style="color:red;"><strong> Toto je pouze testovací stránka, není možně objednávat </strong></h3>  
               <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
               
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                  <?php 
                    $get_slides=" SELECT * FROM slider LIMIT 0,1";
                    $run_slides = mysqli_query($con, $get_slides);
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];

                        echo "
                        <div class='item active'>
                            <img src='admin_area/slides_images/$slide_image'>
                        </div>
                        ";
                    }
                    $get_slides=" SELECT * FROM slider LIMIT 1,3";
                    $run_slides = mysqli_query($con, $get_slides);
                    while($row_slides=mysqli_fetch_array($run_slides)){
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        $slide_url = $row_slides['slide_url'];

                        echo "
                        <div class='item'>
                        <a href='$slide_url'>
                            <img src='admin_area/slides_images/$slide_image'>
                        </a>
                        </div>
                        ";
                    }
                  ?>
                   
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">předchozí</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">další</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
   
   <div id="advantages"> <!-- advantages Begin -->
        <div class="container">
            <div class="same-height-row">
                <?php 
                $get_boxes = "select * from boxes_section";
                $run_boxes = mysqli_query($con,$get_boxes);
     
                while($run_boxes_section=mysqli_fetch_array($run_boxes)){
     
                 $box_id = $run_boxes_section['box_id'];
                 $box_title = $run_boxes_section['box_title'];
                 $box_desc = $run_boxes_section['box_desc'];
                ?>
                <div class="col-sm-4">
                    <div class="box same-height">
                        <div class="icon">
                            <i class="fa fa-heart"></i>
                        </div>
                        <h3><a href="#"  style="color:#9B30FF;text-shadow: 1px 0 black;"><?php echo $box_title; ?></a></h3>
                        <p><?php echo $box_desc; ?></p>
                    </div>
                </div>
                <?php    } ?>
            </div>
        </div>

   </div> <!-- advantages Finish -->
   <div id="hot"><!-- hot Begin -->
    <div class="box">
        <div class="container">
            <div class="col-md-12">
                <h2>
                <i class="fab fa-hotjar"></i> Novinky <i class="fab fa-hotjar"></i>
                </h2>
            </div>
        </div>
    </div>
   </div> <!-- hot Finish -->
   <br>
   <div id="content" class="container"> <!-- container Begin -->
        <div class="row">
            <?php 
            getPro();
            ?>
        </div>
   </div> <!-- container Finish -->

   <hr>
   <?php include "includes/footer.php"?>   
