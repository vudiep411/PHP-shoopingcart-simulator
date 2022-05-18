<?php 
require_once('./component/component.php');
require_once('./component/db.php');
$result = getAllProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Inventory</title>
</head>
<body>
    <?php
        navbar();
    ?>
    <div class="container">
        <div style="clear: both"></div>
        <br>
        <h3 class="title2">Inventory Items</h3>
        <hr>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th>Item UPC</th>
                <th>Department</th>
                <th>Restock Amount</th>
                <th>Price</th>
                <th>Interim Price</th>    
                <th>Wholesale Price</th>  
                <th>Current Stock</th>     
                <th>Exp Date</th>   
                <th>Supplier Id</th>  
            </tr>
            <?php
            
            
            while($row = mysqli_fetch_array($result))
            {
                $upc = $row['UPC'];
                $department = $row['department_name'];
                $restock = $row['restock_amount'];
                $price = $row['price'];
                $interimPrice = $row['interim_price'];
                $wholesalePrice = $row['wholesale_price'];
                $currentStock = $row['current_stock'];
                $exp = $row['expiration_date'];
                $sup_id = $row['supplier_id'];
                if($restock == '')
                {
                    $restock = "-";
                }
                if($currentStock == '')
                {
                    $currentStock = '-';
                }
                if($exp == '')
                {
                    $exp = '-';
                }
                echo "
                <tr>
                <td><b>$upc</b></td>
                <td>$department</td>
                <td>$restock</td>
                <td>$$price</td>
                <td>$$interimPrice</td>
                <td>$$wholesalePrice</td>
                <td>$currentStock</td>
                <td>$exp</td>
                <td>$sup_id</td>
                </tr> 
                ";
            };
            ?>

            </table>
        </div>
        <br>           
    </div>
    </div>
</body>
</html>