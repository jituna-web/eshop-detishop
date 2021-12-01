<center>
    <h1> Moje objednávky</h1>
    <p class="text-muted">
    Pokud máte dotazy, zanechte nám <a href="../contact.php"> zprávu </a>a náš zákaznický servis se vám ozve v co nejkratší době
    </p>
</center>
<hr>
<div class="table-responsive"> <!-- table responzive začátek -->
    <table class="table table-bordered-hover">
        <thead>
            <tr>
                <th>Obj: </th>
                <th>Faktura č:</th>
                <th>Částka</th>
                <th>Množství:</th>
                <th>Velikost:</th>
                <th>Datum obj:</th>
                <th>Platba:</th>
                <th>Stav:</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            
            $customer_session = $_SESSION['customer_email'];
            
            $get_customer = "select * from customers where customer_email='$customer_session'";
            
            $run_customer = mysqli_query($con,$get_customer);
            
            $row_customer = mysqli_fetch_array($run_customer);
            
            $customer_id = $row_customer['customer_id'];
            
            $get_orders = "select * from customer_orders where customer_id='$customer_id'";
            
            $run_orders = mysqli_query($con,$get_orders);
            
            $i = 0;
            
            while($row_orders = mysqli_fetch_array($run_orders)){
                
                $order_id = $row_orders['order_id'];
                
                $due_amount = $row_orders['due_amount'];

                $invoice_no = $row_orders['invoice_no'];
                
                $qty = $row_orders['qty'];
                
                $size = $row_orders['size'];
                
                $order_date = substr($row_orders['order_date'],0,11);
                
                $order_status = $row_orders['order_status'];
                
                $i++;
                
                if($order_status=='čeká na vyřízení'){
                    
                    $order_status = 'nezaplaceno';
                    
                }else{
                    
                    $order_status = 'zaplaceno';
                    
                }
            
            ?>
            
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $order_id ; ?> </th>
                <td><?php echo $invoice_no; ?> </td>
                <td> <?php echo $due_amount; ?> Kč</td>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $size; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                
                <td>
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fas fa-wallet"></i> Provést platbu</a>
                </td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
</div> <!-- table responzive konec-->