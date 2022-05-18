<?php

session_start();
require_once('./component/component.php');
require_once('./component/db.php');

if(array_key_exists('add1', $_POST)) {
  addTransactions('3080Ti', 1799.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/index.php');
  exit;
}
else if(array_key_exists('add2', $_POST)) {
  addTransactions('3070Ti', 1499.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/index.php');
  exit;
}
else if(array_key_exists('add3', $_POST)) {
  addTransactions('3060Ti', 1099.99);
  header('https://cpsc332simplephp.herokuapp.com/index.php');
  exit;
}
else if(array_key_exists('add4', $_POST)) {
  addTransactions('3070Ti', 1299.99);
  header('https://cpsc332simplephp.herokuapp.com/index.php');
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    
     <title>Hardware</title>
</head>
<body>
      <?php
        navbar();
      ?>
      <br>
    <div class="container">
        <h2>START SHOPPING NOW</h2>
        <hr />
        <br>
        <div class="row g-2">
          <div class="col-6">
            <div class='p-2 card shadow' style='width: 600px;'>
              <div class='row'>
                <?php
                $id = '3080Ti';
                $result = getProductData($id);
                $row = mysqli_fetch_assoc($result);
                component("EVGA GeForce RTX 3080 Ti FTW3 Ultra Gaming, 12G-P5-3967-KR, 12GB GDDR6X, iCX3 Technology, ARGB LED, Metal Backplate", $row['price'], "./Image/3080Ti.jpg");
                ?>
                <form method='post' style='margin-left: 270px;'>
                  <input class='btn btn-primary' name='add1' type='submit' value='Add to Cart'/>               
                </form>
              </div>
            </div>     
          </div>
          <div class="col-6">
            <div class='p-2 card shadow' style='width: 600px;'>
              <div class='row'>
                <?php
                $id = '3070Ti';
                $result = getProductData($id);
                $row = mysqli_fetch_assoc($result);
                component("EVGA GeForce RTX 3070 Ti FTW3 Ultra Gaming, 12G-P5-3967-KR, 12GB GDDR6X, iCX3 Technology, ARGB LED, Metal Backplate", $row['price'], "./Image/3070Ti.jpg");
                ?>
                <form method='post' style='margin-left: 270px;'>
                  <input class='btn btn-primary' name='add2' type='submit' value='Add to Cart'/>               
                </form>
              </div>
            </div>     
          </div>
          <div class="col-6">
            <div class='p-2 card shadow' style='width: 600px;'>
              <div class='row'>
                <?php
                  $id = '3060Ti';
                  $result = getProductData($id);
                  $row = mysqli_fetch_assoc($result);
                  component("ZOTAC Gaming GeForce RTX™ 3060 Ti Twin Edge OC LHR 8GB GDDR6 256-bit 14 Gbps PCIE 4.0 Gaming Graphics Card, IceStorm 2.0 Advanced Cooling", $row['price'], "./Image/3060Ti.jpg")
                ?>
              <form method='post' style='margin-left: 270px;'>
                <input class='btn btn-primary' name='add3' type='submit' value='Add to Cart'/>               
              </form>
              </div>
            </div>            
          </div>
          <div class="col-6">
            <div class='p-2 card shadow' style='width: 600px;'>
              <div class='row'>
                <?php
                $id = '3070Ti';
                $result = getProductData($id);
                $row = mysqli_fetch_assoc($result);
                component("EVGA GeForce RTX 3070 Ti FTW3 Ultra Gaming, 12G-P5-3967-KR, 12GB GDDR6X, iCX3 Technology, ARGB LED, Metal Backplate", 1299.99, "./Image/3070Ti.jpg");
                ?>
                <form method='post' style='margin-left: 270px;'>
                  <input class='btn btn-primary' name='add4' type='submit' value='Add to Cart'/>               
                </form>
              </div>
            </div>     
          </div>
          </div>
        </div>
      </div>
</body>
</html>