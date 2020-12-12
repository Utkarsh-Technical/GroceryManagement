<?php
session_start();

                
echo $user= $_SESSION["user_id"];

echo $email = ($_POST['email']);
echo $contact= ($_POST['Contact']);

if(isset($_POST['aadhar'])){
   if(isset($_POST['update_R'])){
    
    $connect = mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
    
   $sql="UPDATE Profile_R SET email='{$email}', contact='{$contact}', AadharCard='{$aadhar}' where s_id= $user";
   $result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");
   
    echo "query  1 Successful";
    header("Location: Profile.php");
   }
}

else{
  if(isset($_POST['update_R'])){
    
    $connect = mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
    
   $sql="UPDATE Profile_R SET email='{$email}', contact='{$contact}' where s_id= $user";
   $result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");
   
    echo "query 2 Successful";
    header("Location: Profile.php");
   }
}
?>