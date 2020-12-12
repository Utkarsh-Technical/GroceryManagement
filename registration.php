<?php

session_start();

echo $name =$_POST['name'];
echo $sname = $_POST['shopname'];
echo $Email =$_POST['email'];
echo $contact =$_POST['number'];
echo $pass =$_POST['password'];
echo $conpass =$_POST['passwordrep'];
echo $pincode = $_POST['PinCode'];
echo $add = $_POST['address'];
echo $City =$_POST['city'];
echo $State =$_POST['state'];

include "config.php";

$s="Select * From Profile_R where email='$Email'";

$result=mysqli_query($connect,$s) or die("Query Unsucessfull.");

$num = mysqli_num_rows($result);

if($pass != $conpass)
{
    echo "Password is not same";     
}

else 
{
        if($num == 1)
        {
            echo "Username Already Taken";
        }
       else{
               if (isset($_POST['check'])) {
                   echo "Good To GO";
               } else {
                    
                   echo "kindly tick the Terms & Condition.";
                    // mysqli_query($connect,$reg) or die("Query Unsucessfull");
                    //header('location: index.php');
            }
       }
}
?>