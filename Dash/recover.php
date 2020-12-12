<?php
session_start()
?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-forgot-password-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 May 2020 15:04:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Reset Password </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <style>
        .full-body{
            background: #FF512F;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #F09819, #FF512F);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #F09819, #FF512F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .msg {
  position: fixed;
  top: 40px;
  left: 50%;
  padding: 10px 20px;
  border-radius: 5px;
  color: white;
  font-size: 14px;
  font-weight: 800;
  box-shadow: 0 0 14px rgba(0, 0, 0, 0.05);
}

.msg-success {
  background-color: #28a745;
}

.msg-warning {
  color: #6d5200;
  background-color: #ffc107;
}

.msg-danger {
  background-color: #dc3545;
}

.msg-info {
  background-color: #17a2b8;
}

/*fade*/
.animate {
  opacity: 0;
  transition: all 1s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

.animate.active {
  opacity: 1;
  transform: translateX(-50%) translateY(-50%);
}

.slide-in-down {
  transform: translateY(-100%) translateX(-50%);
}
.form-group{
  width: 60%;
  margin: 0 auto;
  margin-top: 25px; 
}
.submit-btn{
  margin: 0 auto;
  width: 100%;
  height: 40px;
  letter-spacing: 3px;
  
}
    </style>

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet">

</head>


<body>
    <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100 bg-plum-plate bg-animation">
                    <div class="d-flex h-100 justify-content-center align-items-center full-body">

                        <div class="mx-auto app-login-box col-md-6">
                            <div class="msg animate slide-in-down"></div>

                            <div class="app-logo-inverse mx-auto mb-3"><img src="assets/images/Logo-dot.png" width="75px"  style="margin-top: -50px;"> </div>
                            <div class="modal-dialog w-100">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="h5 modal-title">Want to reset your Password?<h6 class="mt-1 mb-0 opacity-8"><span>Use the form below to reset it.</span></h6></div>
                                    </div>
                                    
                                        <div>
                                            <form action="auth_pass.php" method="post">

  <div class="form-group">
    
    <input type="password" class="form-control" id="exampleInputEmail1"  placeholder="Enter Old Password">
    
  </div>
  <div class="form-group">
    
    <input type="password" class="form-control" id="exampleInputEmail1" name="newPass" placeholder="Enter New Password">
    
  </div>
  <div class="form-group">
   
    <input type="password" class="form-control" id="exampleInputPassword1" name="oldPass" placeholder="Confirm Password">
  </div>
  <div class="form-group form-check">
   
      <small id="emailHelp" class="form-text text-muted">We'll never share your details with anyone else.</small>
  </div>
  <button type="submit" name="recovery" class="btn btn-primary submit-btn">Submit</button>
                                                
</form>
                                           
                                        
                                        <h6 class="mb-0"><a href="javascript:void(0);" class="text-primary"></a></h6></div>
                                    
                                </div>
                            </div>
                            <div class="text-center text-white opacity-8 mt-3" style="margin-top: 55px;">Copyright © DOT 2020</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    (function(){

// data
var clear;
var msgDuration = 2000; // 2 seconds
var $msgSuccess = 'Your password has been successfully reset';
var $msgDanger  = 'Careful with that!';
var $msgWarning = 'Try that again and see what happens';
var $msgInfo    = 'This is a friendly reminder';

// cache DOM
var $msg        = $('.msg');
var $btnSuccess = $('.btn-success');
var $btnDanger  = $('.btn-danger');
var $btnWarning = $('.btn-warning');
var $btnInfo    = $('.btn-info');

// render message
function render(message){

    hide();

    switch (message) {
        case 'success':
            $msg.addClass('msg-success active').text($msgSuccess);
            break;
        case 'danger':
            $msg.addClass('msg-danger active').text($msgDanger);
            break;
        case 'warning':
            $msg.addClass('msg-warning active').text($msgWarning);
            break;
        case 'info':
            $msg.addClass('msg-info active').text($msgInfo);
            break;
    }
}

function timer(){
    clearTimeout(clear);
    clear = setTimeout(function(){
        hide();
    }, msgDuration)
}

function hide(){
    $msg.removeClass('msg-success msg-danger msg-warning msg-info active');
}

// bind events
$btnSuccess.on('click', function(){render('success');});
$btnDanger .on('click', function(){render('danger');});
$btnWarning.on('click', function(){render('warning');});
$btnInfo   .on('click', function(){render('info');});
$msg       .on('transitionend', timer);

})();

</script>
</body>


<!-- Mirrored from demo.dashboardpack.com/kero-html-sidebar-pro/pages-forgot-password-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 May 2020 15:04:09 GMT -->
</html>
