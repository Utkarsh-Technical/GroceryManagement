<?php

include "config.php";

$email=$_POST['email']

$s= "Select * from signup where email ='$email'";
$result = mysqli_query($connect,$s) or die("Query Unsucessfull");

$num = mysqli_num_rows($result);

if($num == 0)
{
    echo "Account Does not exits.";
}
else
{
    
}