 <?php 
session_start();

        if(isset($_POST['recovery'])){
        echo $_POST['oldPass'];
          echo $_POST['newPass'];
            $new= $_POST['oldPass'];
            $con= $_POST['newPass'];
        if (strcmp($new, $con) == 0){    
            include "../config.php";
            $x=$_SESSION["user_id"];
            $s="Select * From Profile_R";

            $result=mysqli_query($connect,$s) or die("Query Unsucessfull.");

            $reg = "UPDATE Profile_R SET password ='{$new}' where s_id= $x";;
             
            mysqli_query($connect,$reg) or die("Query Unsucessfull");
            header('location: profile.php');

        }
            else
            {
                echo "Password does not match with Confirm Password.";
            }
        }
?>
                                                    

                                  