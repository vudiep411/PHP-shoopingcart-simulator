<?php
require_once('./component/component.php');
require_once('./component/db.php');
$result = getAllOrders();
if(isset($_POST['clear']))
{
    clearOrders();
    header('Location: https://cpsc332simplephp.herokuapp.com/Orders.php');
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
        <h3 class="title2">Order transactions History</h3>
        <hr>
        <form method='post'>
            <button name='clear'>Clear History</button>
        </form>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="10%">ID</th>
                <th width="10%">Date</th>
                <th width="17%">Items Amount</th>
                <th width="17%">Total</th>             
            </tr>
            <?php
            
            
            while($row = mysqli_fetch_array($result))
            {
                $id = $row['ID'];
                $date = $row['date'];
                $no_items = $row['amount_of_items'];
                $total = $row['total'];
                echo "<tr>
                <td><b>$id</b></td>
                <td>$date</td>
                <td>$no_items</td>
                <td>$$total</td>
            </tr>";
            };
            ?>

            </table>
        </div>
</body>
</html>