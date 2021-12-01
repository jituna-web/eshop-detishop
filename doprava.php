<?php 
$active='Domů';
include "includes/header.php";
?>
<style>
    #back{
        background-image:url(https://images.unsplash.com/photo-1604147706283-d7119b5b822c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1287&q=80);
        
}
</style>
<div id="content"> <!-- content začátek-->
    <div class="container"> <!-- container začátek-->
        <div class="col-md-12"> <!-- col-md-12 začátek-->
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Domů</a>
                </li>
                <li>
                    Doprava a platba
                </li>
            </ul>
        </div><!-- col-md-12 konec-->
           <div class="col-md-12" align="center" id="back"> <!-- col-md-3 začátek-->
                    <?php 
                        $get_terms = "select * from terms LIMIT 3,1";
                        $run_terms = mysqli_query($con, $get_terms);

                        while($row_terms=mysqli_fetch_array($run_terms)){
                            
                        $term_title = $row_terms['term_title'];
                        $term_desc = $row_terms['term_desc'];
                    
                    ?>
                           <h3><?php echo $term_title; ?></h3> 
                           <p><?php echo $term_desc; ?></p>
                    <?php } ?>
           </div><!-- col-md-3 konec-->
    </div><!-- container konec-->
</div>   <!-- content konec--> 
<br>
<?php include "includes/footer.php"?>   