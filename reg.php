<?php
 if(isset($_POST['account'])){
session_start();

$name =$_POST['name'];
$sname = $_POST['shopname'];
$Email =$_POST['email'];
$contact =$_POST['number'];
$pass =$_POST['password'];
$conpass =$_POST['passwordrep'];
$pincode = $_POST['PinCode'];
$add = $_POST['address'];
$City =$_POST['city'];
$State =$_POST['state'];

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
                  $reg = "Insert into Profile_R(name,s_name,email,contact,password,address,city,state,PinCode)
                    values('$name','$sname','$Email','$contact','$pass','$add' ,'$City','$State','$pincode');";
                mysqli_query($connect,$reg) or die("Query Unsucessfull");
                
//                   ===================================================================
  

//                   ===================================================================
                  
               } else {
                    
                   echo "<div class='alert alert-danger' role='alert'>kindly tick the Terms & Condition.</div>";
            }
       }
    }
 }

?>


<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>DOT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="DOT">

    
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet"></head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
           
                <div class="h-100">
                    <div class="h-100 no-gutters row">
                        <div class="h-100 d-md-flex d-sm-block bg-white justify-content-center align-items-center col-md-12 col-lg-7">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9">
                                <!-- <div class="app-logo"></div> -->
                                <img src="assets/icons/Logo-dot.png" width="100px" , height="100px">
                                <h4>
                                    <div>Welcome,</div>
                                    <span>It only takes a <span class="text-success">few seconds</span> to create your account</span></h4>
                                <div>
                                    <form id="form-1" method="post">
                                    
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleName" class="">Name</label><input name="name" id="exampleName" placeholder="Name here..." type="text" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleName" class="">Shop Name</label><input name="shopname" id="exampleName" placeholder="Shop Name here..." type="text" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleEmail" class=""><span class="text-danger">*</span> Email</label><input name="email" id="exampleEmail" placeholder="Email here..." type="email" required
                                                                                                                                                                                    class="form-control"
                                                ></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleName" class="">Contact Number</label><input name="number"  placeholder="Contact here..." type="text" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="examplePassword" class=""><span class="text-danger">*</span> Password</label><input name="password" id="examplePassword" placeholder="Password here..." required
                                                                                                                                                                                          type="password" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label  class=""><span class="text-danger">*</span> Repeat Password</label><input name="passwordrep" id="examplePasswordRep" required
                                                                                                                                                                                                    placeholder="Repeat Password here..." type="password"
                                                                                                                                                                                                    class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label  class="">Address</label><input name="address"  placeholder="Address here..."  type="text" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label  class="">PinCode</label><input name="PinCode"  placeholder="PinCode here..."  type="text" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleName" class="">City</label><input name="city" id="exampleName" placeholder="City here..." type="text" class="form-control" required></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="exampleName" class="">State</label><input name="state" id="exampleName" placeholder="State here..." type="text" class="form-control" required></div>
                                            </div>
                                        </div>
                                        <div class="mt-3 position-relative form-check">
                                            <input name="check" type="checkbox" class="form-check-input">
                                            <label  class="form-check-label">Accept our <a href="javascript:void(0);">Terms
                                            and Conditions</a>.</label>
                                        </div>
                                        
                                        <div class="mt-4 d-flex align-items-center"><h5 class="mb-0">Already have an account? <a href="index.php" class="text-primary">Sign in</a></h5>
                                            <div class="ml-auto">
                                                <button class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" name="account" onclick="getLocation()">Create Account</button>
                                                <p id="demo"></p>
                                                <div id="output"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="d-lg-flex d-xs-none col-lg-5">
                            <div class="slider-light">
                                <div class="slick-slider slick-initialized">
                                    <div>
                                        <div class="h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('assets/images/originals/citynights.jpg');"></div>
                                            <div class="slider-content"><h3>Scalable, Modular, Consistent</h3>
                                                <p>We bring Smartness and Simplicity together to bring novelity in every aspect of people's lifestyle.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script></body>
    
<!--    GeoLoaction For Latitude and Longitude -->
    <script src="http://maps.google.com/maps/api/geocode/json?"></script>
    <script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
<!--
    <script>
        $('#output').click(function(){
    var x = document.getElementById('output');
        
    function getLocation(){
        if(navigation.geolocation){
            navigator.geolocation.getCurrentPosition(
            showPosition);
        }
        else{
            x.innerHTML = "Browser not supporting";
        }
    }
        function showPosition(position){
            x.innerHTML = "Latitude " +position.coords.latitude+"<br>"
            x.innerHTML = "Longitute " +position.coords.longitude
        }});
    </script>
-->
    
</html>
