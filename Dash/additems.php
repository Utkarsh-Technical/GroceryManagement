<?php

session_start();

    include "../config.php";
    echo  $items_id= $_POST['id'];
     echo $item = $_POST['items'];
    echo  $price = $_POST['price'];
    echo  $weight = $_POST['weight'];
    
$rs1=mysqli_query($connect,"Select * from DOT.Shop_Items where Items_id='$items_id'") or die("Query Failed.");
    if(mysqli_num_rows($rs1) == 0){
        $rs=mysqli_query($connect,"Select * from DOT.Items where Items_id='$items_id'") or die("Query Failed.");
         if(mysqli_num_rows($rs) > 0){
           while($row = mysqli_fetch_assoc($rs)){
              echo $img= $row['img'];
            $sql = "Insert Into DOT.Shop_Items (Items_id ,s_id ,Items ,weight ,Price,img) values('{$items_id}','{$_SESSION["user_id"]}','{$item}','{$weight}','{$price}','{$img}')";

       $result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");
       header("Location: Total-Item.php");
        mysqli_close($connect);   
           }
         }
    }
else{
    echo "Items is already added";
}

?>
