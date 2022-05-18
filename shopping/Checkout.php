<?php
require_once('./component/component.php');
require_once('./component/db.php');
$result = getTransactions();
while($row = mysqli_fetch_array($result))
{
    $noOfitem = $noOfitem + 1;
    $price = $row['price'];
    $total = $total + $price;
}
clearTransactions();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
</head>
<body>
    <?php
        navbar();
    ?>
    <div class="container" style="text-align:center; padding: 20px;">
        <h4><?php 
            echo $noOfitem?> 
            &nbsp Item Are Checked out!</h4>
        <a href="index.php">Return to Homepage</a>
    </div>

</body>
</html>