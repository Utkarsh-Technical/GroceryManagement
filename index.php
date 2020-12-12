<?php
@ob_start();
session_start();
?>
<!doctype html>
<html lang="en">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Login - DOT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="DOT website">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet"></head>

<body>
    
    <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 no-gutters row">
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="slider-light">
                                <div class="slick-slider">
                                    <div>
                                        <div class="h-100 d-flex justify-content-center align-items-center bg-plum-plate" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('assets/images/originals/city.jpg');"></div>
                                            <div class="slider-content"><h3>Perfect Balance</h3>
                                                <p>We bring innovation and simplicity together. We try to chnage and uplift the world to the different horizon.</p></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
<!--                                <div class="app-logo"></div>-->
                                 <img src="assets/images/Logo-dot.png" width="100px" , height="100px">
                                <h4 class="mb-0">
                                    <span class="d-block">Welcome back,</span>
                                    <span>Please sign in to your account.</span></h4>
                                <h6 class="mt-3">No account? <a href="reg.php" class="text-primary">Sign up now</a></h6>
                                <div class="divider row"></div>
                                <div>
                                    <form class="" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="user_id" id="exampleEmail" placeholder="Email here..." type="email" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="examplePassword" class="">Password</label><input name="pass" id="examplePassword" placeholder="Password here..." type="password" required
                                                                                                                                                       class="form-control"></div>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox" class="form-check-input"><label for="exampleCheck" class="form-check-label">Keep me logged in</label></div>
                                        <div class="divider row"></div>
                                        <div class="d-flex align-items-center">
                                            <div class="ml-auto"><a href="#" class="btn-lg btn btn-link">Recover Password</a>
                                                <button class="btn btn-primary btn-lg" name="Login" >Login to Dashboard</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                    
                                    <?php
                                    if(isset($_POST['Login'])){
                                        
                                        include "config.php";
                                        
                                         $email =$_POST['user_id'];
                                         $password =$_POST['pass'];
                                        $rs=mysqli_query($connect,"select * from Profile_R where email='$email' and password='$password'") or die("Query Failed.");
                                        
                                        if(mysqli_num_rows($rs) > 0){
                                           
                                            while($row = mysqli_fetch_assoc($rs)){
//                                                    session_start();
                                                    $_SESSION["user_id"]=$row['s_id'];
                                                    $_SESSION["username"]=$row['name'];
                                                    $_SESSION["Shop Name"]=$row['s_name'];
                                                    $_SESSION["Email"]=$row['email'];
                                                    $_SESSION["Contact"]=$row['contact'];
                                                    $_SESSION["Address"]=$row['address'];
                                                    $_SESSION["city"]=$row['city'];
                                                    $_SESSION["state"]=$row['state'];
                                                    $_SESSION["pincode"]=$row['PinCode'];
                                                    
                                                
//                                                  $to = $email;
//                                                  $subject = "Welcome to DOT";
//                                                  $message= "Everything Start with a DOT. We welcome you into new innovation                                              world where we bring innovation and simplicity together. Thank you for joining Us.";
//                                                  $headers ="dot.customerservices@gmail.com";
//                                                  mail($to, $subject, $message , $headers);
                                                  echo "Successfully Login";
                                                  header("Location: Dash/Dashboard.php");

                                            }
                                          }
                                        else{
                                            echo '<div class= "alert alert-danger">Username and Password are not matched.<div>';
                                         } 
                                    }
                                    else{
                                        echo "Something Went Wrong.";
                                    }
                                        
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script></body>

</html>
