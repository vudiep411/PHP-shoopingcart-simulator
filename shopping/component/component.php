<?php


function component($productName, $productPrice, $image){
    $element="

        <div class='col-sm-5'>
            <img class='card-img' src='$image' alt='3080'>
        </div>
        <div class='col-sm-7'>
            <div class='card-body'>
                <h5 class='card-title'>$productName</h5>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star checked'></span>
                <span class='fa fa-star'></span>
                <span class='fa fa-star'></span>
                <h5 class='card-text'>$$productPrice</h5>                         
            </div>
        </div>

";
    echo $element;
}

function drinksComponent($productName, $productPrice, $image)
{
    $element = "
    <div class='p-2 card shadow' style='width: 600px;'>
            <div class='row'>
                <div class='col-sm-5'>
                    <img class='card-img' src='$image' alt='3080'>
                </div>
                <div class='col-sm-7'>
                    <div class='card-body'>
                        <h5 class='card-title'>$productName</h5>
                        <br>
                        <br>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star checked'></span>
                        <span class='fa fa-star'></span>
                        <span class='fa fa-star'></span>
                        <br>
                        <h5 class='card-text'>$$productPrice</h5>
                        <br>
                        <button class='btn btn-primary' name='add' type='submit'>Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    ";
    echo $element;
}

function navbar()
{
    $element = "
    <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <a class='navbar-brand' href='index.php'>&nbsp;&nbsp;Vu's Shop</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarNav'>
          <ul class='navbar-nav'>
            <li class='nav-item active'>
              <a class='nav-link' href='About.php'>About<span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='Accessories.php'>Accessories</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='Software.php'>Software</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='index.php'>Hardware</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='Inventory.php'>Inventory Items</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='Orders.php'>Order History</a>
            </li>        
          </ul>
        </div>
        <a href='Cart.php' class='btn btn-success' style='margin-right: 6px;'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
            <path d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z'/>
          </svg>&nbsp;Cart</a>
      </nav>
    ";
    echo $element;
}

