<?php
include "../config.php";
session_start();

                    if(isset($_FILES['img'])){
                            $errors = array();
                                $file_name = $_FILES['img']['name'];
                        echo $file_name;
                                $file_size = $_FILES['img']['size'];
                                $file_tmp = $_FILES['img']['tmp_name'];
                                $file_type = $_FILES['img']['type'];
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
                                move_uploaded_file($file_tmp,"assets\images\Shopkeeper/" .$file_name);
                            }
                            
                            else{
                                print_r($errors);
                                die();
                            }
                    }

                    $x=$_SESSION["user_id"];
                    $sql = "UPDATE Profile_R SET images = '{$file_name}' WHERE s_id = {$x}";
                    $result = mysqli_query($connect, $sql) or die("Query Unsuccessfull.");
                    header("Location: Profile.php");
?>