<?php
require_once('./component/component.php');
require_once('./component/db.php');

if(array_key_exists('add5', $_POST)) {
  addTransactions('RAZERORNATAKB', 59.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/Accessories.php');
  exit;
}
else if(array_key_exists('add6', $_POST)) {
  addTransactions('RAZERVIPERMOUSE', 59.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/Accessories.php');
  exit;
}
else if(array_key_exists('add7', $_POST)) {
  addTransactions('MONSTERDRINK', 9.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/Accessories.php');
  exit;
}
else if(array_key_exists('add8', $_POST)) {
  addTransactions('DRPEPPER', 9.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/Accessories.php');
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
    <title>Accessories</title>
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
          component("Razer Ornata Chroma Gaming Keyboard: Hybrid Mechanical Key Switches - Customizable Chroma RGB Lighting - Individually Backlit Keys", 59.99, "./Image/razerkb.jpg");
        ?>
        <form method='post' style='margin-left: 270px;'>
          <input class='btn btn-primary' name='add5' type='submit' value='Add to Cart'/>               
        </form>
          </div>
        </div>        
      </div>

      <div class="col-6">
        <div class='p-2 card shadow' style='width: 600px;'>
          <div class='row'>
            <?php
            component("Razer Viper Ultimate Hyperspeed Lightweight Wireless Gaming Mouse & RGB Charging Dock: Fastest Gaming Mouse Switch", 59.99, "./Image/razermouse_.jpg");
            ?>
            <form method='post' style='margin-left: 270px;'>
              <input class='btn btn-primary' name='add6' type='submit' value='Add to Cart'/>               
            </form>
          </div>
        </div>
      </div>

      <div class="col-6">
        <div class='p-2 card shadow' style='width: 600px;'>
          <div class='row'>
            <?php
              component("Monster Energy Drink, Green, Original, 16 Ounce (Pack of 24)", 9.99, "./Image/monster.jpg");
            ?>
            <form method='post' style='margin-left: 270px;'>
              <input class='btn btn-primary' name='add7' type='submit' value='Add to Cart'/>               
            </form>
          </div>
        </div>
        
      </div>
      <div class="col-6">
        <div class='p-2 card shadow' style='width: 600px;'>
          <div class='row'>
            <?php
              component("Dr Peper Drink, Red, Original, 16 Ounce (Pack of 24)", 9.99, "./Image/drpeper.jpg");
            ?>
            <form method='post' style='margin-left: 270px;'>
              <input class='btn btn-primary' name='add8' type='submit' value='Add to Cart'/>               
            </form>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</body>
</html>