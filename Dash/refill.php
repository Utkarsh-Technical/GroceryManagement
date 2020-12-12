<?php
session_start();

include "../config.php";

echo  $items_id= $_GET['id'];
echo  $stock_Update = $_POST['stocks'];

$sql = "Update DOT.Items SET stock='{$stock_Update}' where items_id = '{$item_id}' ";
$result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");

//header("Location: Total-Item.php");
mysqli_close($connect); 


?>