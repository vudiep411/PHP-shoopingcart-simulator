<?php

require_once('./component/component.php');
require_once('./component/db.php');
$result = getTransactions();
$total = 0.0;
$noOfitem = 0;
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    deleteItemTransactions($id);
    header('Location: https://cpsc332simplephp.herokuapp.com/Cart.php');
    exit;
}

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
    <title>Document</title>
</head>
<body>
    <?php
        navbar();
    ?>
    <br>
    <div class="container">
        <div style="clear: both"></div>
        <h3 class="title2">Shopping Cart Details</h3>
        <hr>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="10%">Transactions ID</th>
                <th width="30%">Product ID</th>
                <th width="10%">Total Price</th>
                <th width="17%">Date</th>
                <th width="10%">Remove Item</th>                
            </tr>
            <?php
            
            
            while($row = mysqli_fetch_array($result))
            {
                $noOfitem = $noOfitem + 1;
                $t_id = $row['ID'];
                $item = $row['item_bought'];
                $price = $row['price'];
                $date = $row['date'];
                $total = $total + $price;
                echo "<tr>
                <td><b>$t_id</b></td>
                <td>$item</td>
                <td>$$price</td>
                <td>$date</td>
                <td><a href='Cart.php?id=$t_id' class='btn btn-danger'>Remove</a></td>
            </tr>";
            };
            ?>

            </table>
            <form method='get' class="col-sm-6">
                <?php
                    if(isset($_GET['applyCoupon']))
                    {
                        $result = getCoupon($_GET['coupon']);
                        if(mysqli_num_rows($result) > 0)
                        {
                            $obj = mysqli_fetch_array($result);
                            $total = $total - $total * $obj['discount_amount'];
                        }
                        else{
                            echo "<div class='text-danger'>No coupons exist</div>";
                        }
                    }                  
                ?>
                <input class="form-control" type="text" placeholder="Enter Coupon ID" name="coupon">
                <button class='btn btn-primary' style='margin-top: 10px;' name='applyCoupon'>Apply</button>
            </form>
        </div>
        <br>
            <?php
                echo "
                <div class='container' style='display: flex;'>
                    <h5 style='margin-top: 5px;'>Total: $$total</h5>
                    <form method='post'>
                        <button class='btn btn-success' style='margin-left: 10px;' name='checkOut'>Check Out</button>
                    </form>
                </div>
                ";
                if(isset($_POST['checkOut']))
                {  
                    if($noOfitem > 0)   
                    {
                        addOrders($noOfitem, $total);
                    }
                    header('Location: https://cpsc332simplephp.herokuapp.com/Checkout.php');
                    exit;
                }
            ?>
            
    </div>
    </div>
</body>
</html>