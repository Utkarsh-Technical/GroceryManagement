<?php
session_start();

$name = $_POST['Dname'];
$address = $_POST['Dadd'];
$Contact = $_POST['Dcontact'];
$aadharID = $_POST['DaadharID'];

if(isset($_POST['save'])){
    
include "config.php";
$sql = "Insert Into DeliveryBoy_R (d_name,s_id,d_contact_number,d_address,d_aadhar_card,Approval) values('{$name}','{$_SESSION["user_id"]}','{$Contact}','{$address}','{$aadharID}',0)";
$result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");
//header("Location: Profile.php");
//mysqli_close($con);
    
}
?>
?>