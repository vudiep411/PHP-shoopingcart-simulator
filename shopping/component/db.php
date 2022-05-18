<?php
$noOfitem = 0;
function con()
{
    $host="";
    $user="";
    $password="";
    $dbname="";

    $db = new mysqli($host, $user, $password, $dbname) or die("Not successful");
    return $db;
}

function getProductData($id)
{
    $sql="SELECT * FROM item WHERE UPC = '$id'";
    $db = con();
    $result = mysqli_query($db, $sql);
    return $result;
    
}

function getAllProducts()
{
    $sql="SELECT * FROM item";
    $db = con();
    $result = mysqli_query($db, $sql);
    return $result;
}

function addTransactions($productId, $price)
{
    $date = date("m/d/Y");
    $sql="INSERT INTO transactions(date, item_bought, price, customer_id) VALUES('$date', '$productId', $price, null)";
    $db = con();
    mysqli_query($db, $sql);
}

function getTransactions()
{
    $sql = "SELECT * FROM transactions";
    $db = con();
    $result = mysqli_query($db, $sql);
    return $result;
    
}

function deleteItemTransactions($id)
{
    $sql = "DELETE FROM transactions WHERE ID='$id'";
    $db = con();
    mysqli_query($db, $sql);
}

function clearTransactions()
{
    $sql = "DELETE FROM transactions";
    $db = con();
    mysqli_query($db, $sql);
}

function addOrders($amount_of_items, $total)
{
    $date = date("m/d/Y");
    $sql="INSERT INTO orders(date, amount_of_items, delivery_id, total) VALUES('$date', $amount_of_items, null, $total)";
    $db = con();
    mysqli_query($db, $sql);
}

function getAllOrders()
{
    $sql="SELECT * FROM orders";
    $db = con();
    $result = mysqli_query($db, $sql);
    return $result;
}

function clearOrders()
{
    $sql = "DELETE FROM orders";
    $db = con();
    mysqli_query($db, $sql);
}

function getCoupon($id)
{
    $sql="SELECT * FROM coupon WHERE ID = '$id'";
    $db = con();
    $result = mysqli_query($db, $sql);
    return $result;
}