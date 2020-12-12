<?php
session_start();

include "../config.php";
  
         if(isset($_POST['save'])){
                        
                        if(isset($_FILES['image'])){
                            $errors = array();
                                $file_name = $_FILES['image']['name'];
                                $file_size = $_FILES['image']['size'];
                                $file_tmp = $_FILES['image']['tmp_name'];
                                $file_type = $_FILES['image']['type'];
                                $file_ext = end(explode('.',$file_name));
                            
                                $extension = array("jpeg","jpg","png");
                            
                            if(in_array($file_ext,$extension) === false)
                            {
                                $errors[] = "This extension file mot allowed, Please choose a JPEG , JPG and  PNG file.";
                            }
                            
                            if($file_size > 2097152)
                            {
                                $errors[] = "File size must be 2mb or lower.";
                            }
                            
                            if(empty($errors)==true){
                                move_uploaded_file($file_tmp,"assets\images\deliveryboy/" .$file_name);
                            }
                            
                            else{
                                print_r($errors);
                                die();
                            }
                    }

                     echo $name =($_POST['name']);
                     echo $address = ($_POST['add']);
                     echo $Contact = ($_POST['con']);
                     echo $aadharID = ($_POST['addhar']);
                    
                    $x=$_SESSION["user_id"];
                    $sql = "Insert Into DeliveryBoy_R (s_id, d_name, d_contact, d_address ,d_aadhar,Approval,images) values('$x','{$name}','{$Contact}','{$address}','{$aadharID}',0,'{$file_name}')";
                    $result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");
             header("Location: Profile.php");
            }
?>