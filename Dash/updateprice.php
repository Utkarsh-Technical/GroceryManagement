<?php
session_start();
   
include "../config.php";

echo $items_id = $_POST['id'];  

echo $price = $_POST['price'];

$sql = "UPDATE DOT.Shop_Items SET `Price` = '{$price}' WHERE (`Items_id` = '{$items_id}');";
$result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");
header("Location: Item.php");
mysqli_close($connect);

?>