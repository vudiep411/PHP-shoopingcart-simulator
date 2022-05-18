<?php
require_once('./component/component.php');
require_once('./component/db.php');

if(array_key_exists('add9', $_POST)) {
  addTransactions('LOL', 9.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/Software.php');
  exit;
}
else if(array_key_exists('add10', $_POST)) {
  addTransactions('CODWZ', 59.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/Software.php');
  exit;
}
else if(array_key_exists('add11', $_POST)) {
  addTransactions('ELDENRING', 59.99);
  header('Location: https://cpsc332simplephp.herokuapp.com/Software.php');
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
    <title>Software</title>
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
              component("League of Legends", 9.99, "./Image/lol.jpg")
            ?>
            <form method='post' style='margin-left: 270px;'>
              <input class='btn btn-primary' name='add9' type='submit' value='Add to Cart'/>               
            </form>
          </div>
        </div>
        
      </div>
      <div class="col-6">
        <div class='p-2 card shadow' style='width: 600px;'>
          <div class='row'>
            <?php
              component("COD: WARZONE", 59.99, "./Image/wz.jpg")
            ?>
            <form method='post' style='margin-left: 270px;'>
              <input class='btn btn-primary' name='add10' type='submit' value='Add to Cart'/>               
            </form>
          </div>
        </div>
      </div>
        
      <div class="col-6">
        <div class='p-2 card shadow' style='width: 600px;'>
          <div class='row'>
            <?php
              component("Elden Rings", 59.99, "./Image/elden.jpg")
            ?>
            <form method='post' style='margin-left: 270px;'>
              <input class='btn btn-primary' name='add11' type='submit' value='Add to Cart'/>               
            </form>
          </div>
        </div>
      </div>
        
      
      </div>
    </div>
  </div>
</body>
</html>