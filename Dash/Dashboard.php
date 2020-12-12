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
    <title>DOT | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="assets/images/Logo-dot.png">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="main.07a59de7b920cd76b874.css" rel="stylesheet"></head>
<style>
    
    .order-placed-table{
        height: 523px;
    }
    .stock-up-table{
        height: 430px;
    }
   .app-container{
       position: absolute;
       height: 174%;
       width: 100%;
    } 
    #preloader  {
     position: fixed;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #FFFFFF;
     z-index: 99;
    height: 100%;
 }

#status  {
     width: 100%;
     height: 100%;
     position: absolute;
   
     background-image: url("https://i.ibb.co/2h7qHk1/132.gif");
     background-repeat: no-repeat;
     background-position: center;
 }
    
</style>
<body>
    <div id="preloader">
  <div id="status"></div>
</div>
<div class="app-container app-theme-gray">
        <div class="app-main">
            <div class="app-sidebar-wrapper">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title="Team DOT" class="logo-src"><img src="assets/images/Logo-dot.png" width="60px"></a>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                        </button>
                    </div>
                    <div class="scrollbar-sidebar scrollbar-container">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading" style="color: #c26c04 !important; font-size: 18px">Menu</li>
                                <li class="mm-active">
                                    <a href="Dashboard.php" >
                                        <i class="metismenu-icon"><img src="assets/icons/dashboard.png" width="25px">  </i>
                                        Dashboards
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Profile.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Profile.png" width="25px">  </i>
                                        Profile
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Item.php">
                                        <i class="metismenu-icon"><img src="assets/icons/online-shop.png" width="25px">  </i>
                                        Items
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Order.php">
                                        <i class="metismenu-icon"><img src="assets/icons/orders.png" width="25px">  </i>
                                        Orders
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Stock%20Ups.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Stock.png" width="25px">  </i>
                                        Stock Ups
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Analytics.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Analytic.png" width="25px">  </i>
                                        Analytics
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Map.php">
                                       <i class="metismenu-icon"><img src="assets/icons/1.png" width="25px">  </i>
                                        Map
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="Support.php">
                                        <i class="metismenu-icon"><img src="assets/icons/Support.png" width="25px">  </i>
                                        Support
                                    </a>
                                </li>
                                <li class="mm-active">
                                    <a href="../index.php">
                                        <i class="metismenu-icon"><img src="assets/icons/logout.png" width="25px">  </i>
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template" class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                            <span>
                                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                    <span class="btn-icon-wrapper">
                                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                                    </span>
                                </button>
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="app-header">
                        <div class="page-title-heading">
                            <?php echo $_SESSION["Shop Name"]; ?>
                            <div class="page-title-subheading">
                                <img width="30" class="rounded-circle" src="assets/icons/1.png">
                                <?php 
                                echo $_SESSION["Address"]; 
                                echo " , ";
                                echo $_SESSION["city"];
                                ?>

                            </div>
                        </div>
                        <div class="app-header-right">
                            <div class="search-wrapper">
                                <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                                <input type="text" placeholder="Search...">
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="header-dots">

                                    <div class="dropdown">
                                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                            <i class="typcn typcn-bell"></i>
                                            <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                        </button>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header mb-0">
                                                <div class="dropdown-menu-header-inner bg-night-sky">
                                                    <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                                    <div class="menu-header-content text-light">
                                                        <h5 class="menu-header-title">Notifications</h5>
                                                        <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                        <span>Events</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                        <span>System</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="notifications-box">
                                                                    <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Something not important
                                                                                        <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/1.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/2.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/3.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/4.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/5.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                            src="assets/images/avatars/9.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/7.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                                <div class="avatar-icon"><img
                                                                                                        src="assets/images/avatars/8.jpg"
                                                                                                        alt=""></div>
                                                                                            </div>
                                                                                            <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                                <div class="avatar-icon"><i>+</i></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in">
                                                                                    <h4 class="timeline-title">Build the production release
                                                                                        <span class="badge badge-danger ml-2">NEW</span>
                                                                                    </h4>
                                                                                    <span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                            <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                                <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="p-3">
                                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                        class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                        class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                                    <div class="scroll-area-sm">
                                                        <div class="scrollbar-container">
                                                            <div class="no-results pt-3 pb-0">
                                                                <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                                    <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <span class="swal2-success-line-tip"></span>
                                                                    <span class="swal2-success-line-long"></span>
                                                                    <div class="swal2-success-ring"></div>
                                                                    <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                                    <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                                </div>
                                                                <div class="results-subtitle">All caught up!</div>
                                                                <div class="results-title">There are no system errors!</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item"></li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-btn-lg pr-0">
                                <div class="widget-content p-0">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="btn-group">
                                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                                    <?php
                      $connect = mysqli_connect('database-server.cil0lbnaent8.ap-south-1.rds.amazonaws.com','admin','Dash_Utkarsh','DOT') or die("Failed to Connect with Database ");
                      $y= $_SESSION["user_id"];
                      $sql = "Select * From Profile_R where s_id = {$y}";
                     
                         $result = mysqli_query($connect,$sql) or die("Query Unsuccessful.");
                        
                      $row = mysqli_fetch_assoc($result);
                                                   
                                                    
                                              if(isset($row['images']))
                                                    { 
                                    echo '<img width="45"  height="45" class= "rounded" src="assets/images/Shopkeeper/'. $row['images'].'" >';
                                                    }
                                              else
                                                    {
                                echo "<img width='45' height='45' class='rounded' src='assets\images\Shopkeeper\Profile.png'>" ;
                                                    }
                               ?>
                                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                                </a>
                                                <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                                    <div class="dropdown-menu-header">
                                                        <div class="dropdown-menu-header-inner bg-info">
                                                            <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                            <div class="menu-header-content text-left">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle"
                                                                                 src="assets/images/avatars/3.jpg"
                                                                                 alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading">Minnie Betts
                                                                            </div>
                                                                            <div class="widget-subheading opacity-8">A short profile description
                                                                            </div>
                                                                        </div>
                                                                        <div class="widget-content-right mr-2">
                                                                            <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="scroll-area-xs" style="height: 150px;">
                                                        <div class="scrollbar-container ps">
                                                            <ul class="nav flex-column">
                                                                <li class="nav-item-header nav-item">Activity
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Chat
                                                                        <div class="ml-auto badge badge-pill badge-info">8
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Recover Password
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item-header nav-item">My Account
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Settings
                                                                        <div class="ml-auto badge badge-success">New
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Messages
                                                                        <div class="ml-auto badge badge-warning">512
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="javascript:void(0);" class="nav-link">Logs
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider mb-0 nav-item"></li>
                                                    </ul>
                                                    <div class="grid-menu grid-menu-2col">
                                                        <div class="no-gutters row">
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                                    <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                                    Message Inbox
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                                    <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                                    <b>Support Tickets</b>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-divider nav-item">
                                                        </li>
                                                        <li class="nav-item-btn text-center nav-item">
                                                            <button class="btn-wide btn btn-primary btn-sm">
                                                                Open Messages
                                                            </button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>    </div>
                        <div class="app-header-overlay d-none animated fadeIn"></div>
                    </div>
                    <div class="app-inner-layout app-inner-layout-page">
                        
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__sidebar">
                                <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                                    <div class="nav flex-column">
                                        <div class="nav-item-header text-primary nav-item">
                                            Dashboards Examples
                                        </div>
                                        <a class="dropdown-item" href="analytics-dashboard.html">Analytics</a>
                                        <a class="dropdown-item active" href="management-dashboard.html">Management</a>
                                        <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                        <a class="dropdown-item" href="index.html">Helpdesk</a>
                                        <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                        <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                        <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                        <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                        <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                    </div>                            </div>
                            </div>
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card mb-3 widget-content bg-night-fade">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Order Pending</div>
<!--                                                            <div class="widget-subheading">Orders need to be confirmed</div>-->
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>500</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card mb-3 widget-content bg-plum-plate">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Orders Packed</div>
<!--                                                            <div class="widget-subheading"></div>-->
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>250</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card mb-3 widget-content bg-arielle-smile">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Orders Shipped</div>
<!--                                                            <div class="widget-subheading">Total Clients Profit</div>-->
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>200</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card mb-3 widget-content bg-happy-green">
                                                    <div class="widget-content-wrapper text-white">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Order Delivered</div>
<!--                                                            <div class="widget-subheading">People Interested</div>-->
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-white"><span>190</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-5">
                                                <div class="mb-3 card order-placed-table">
                                                    <div class="card-header-tab card-header-tab-animation card-header">
                                                        <div class="card-header-title">
                                                            <img width="35" class="rounded-circle" src="assets/icons/2.2.png">
                                                            Orders Placed
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                               
                                                                
                                                                <div class="scroll-area">
                                                                    <div class="scrollbar-container">
                                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">

                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/5.jpg"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ruben
                                                                                                Tillman
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                UI
                                                                                                Designer
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                 23/06/2020
                                                                                                </small>
                                                                                                
                                                                                               
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/4.jpg"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Mukul Khadhe
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                #qwer4567
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    11/07/2020
                                                                                                </small>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/3.jpg"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ella-Rose Henry
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                Customer ID
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    11/06/2020
                                                                                                </small>
                                                                                                <span></span>
<!--
                                                                                                <small class="text-danger pl-2">
                                                                                                 dropdown of list
<i class="fa fa-angle-down"></i>
                                                                                                </small>
-->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/2.jpg"
                                                                                                 alt="">
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Customer Name
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                customer id
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    Delivery Date
                                                                                                </small>
                                                                                                
<!--
                                                                                                <small class="text-success pl-2">
                                                                                                    <i class="fa fa-angle-up"></i>
                                                                                                </small>
-->
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-7">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title">
                                                           <img width="35" class="rounded-circle" src="assets/icons/3.png">
                                                            Order Placed Vs Order Completed
                                                        </div>
                                                        <div class="btn-actions-pane-right">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="tab-eg-55">
                                                            <div class="widget-chart p-0">
                                                                <div id="bar-vertical-candle-lg"></div>
                                                                <div class="widget-chart-content">
                                                                    <div class="widget-description mt-0 text-warning">
                                                                        <i class="fa fa-arrow-right"></i>
                                                                        <span class="pl-1">175.5%</span>
                                                                        <span class="text-muted opacity-8 pl-1">Orders</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pt-2 card-body">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            63%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Orders Recieved
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-danger"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="63"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 63%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="widget-content">
                                                                            <div class="widget-content-outer">
                                                                                <div class="widget-content-wrapper">
                                                                                    <div class="widget-content-left">
                                                                                        <div class="widget-numbers fsize-3 text-muted">
                                                                                            32%
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="widget-content-right">
                                                                                        <div class="text-muted opacity-6">
                                                                                            Orders Completed
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-progress-wrapper mt-1">
                                                                                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                        <div class="progress-bar bg-success"
                                                                                             role="progressbar"
                                                                                             aria-valuenow="32"
                                                                                             aria-valuemin="0"
                                                                                             aria-valuemax="100"
                                                                                             style="width: 32%;"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-6 col-xl-7">
                                                <div class="mb-3 card">
                                                    <div class="card-header-tab card-header">
                                                        <div class="card-header-title">
                                                            <img width="35" class="rounded-circle" src="assets/icons/unnamed.png">
                                                            Sales Vs Revenue
                                                        </div>
                                                        <div class="btn-actions-pane-right">
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="tab-content">
                                                        <div class="widget-chart widget-chart2 text-left p-0">
                                                            <div class="widget-chat-wrapper-outer">
                                                                <div class="widget-chart-content widget-chart-content-lg pb-0">
                                                                    <div class="widget-chart-flex">
                                                                        <div class="widget-title opacity-5 text-muted text-uppercase">
                                                                            Monthly
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-numbers">
                                                                        <div class="widget-chart-flex">
                                                                            <div>
                                                                                <span class="text-warning">34</span>
                                                                            </div>
                                                                            <div class="widget-title ml-2 font-size-lg font-weight-normal text-dark">
                                                                                <span class="opacity-5 text-muted pl-2 pr-1">5%</span>
                                                                                increase
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                                    <div id="dashboard-sparkline-2"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="pt-2 card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="widget-content">
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-numbers fsize-3 text-muted">
                                                                                        40%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="text-muted opacity-6">
                                                                                        Sales
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-progress-wrapper mt-1">
                                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                    <div class="progress-bar bg-danger"
                                                                                         role="progressbar"
                                                                                         aria-valuenow="40"
                                                                                         aria-valuemin="0"
                                                                                         aria-valuemax="100"
                                                                                         style="width: 63%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="widget-content">
                                                                        <div class="widget-content-outer">
                                                                            <div class="widget-content-wrapper">
                                                                                <div class="widget-content-left">
                                                                                    <div class="widget-numbers fsize-3 text-muted">
                                                                                        32%
                                                                                    </div>
                                                                                </div>
                                                                                <div class="widget-content-right">
                                                                                    <div class="text-muted opacity-6">
                                                                                        Revenue Gengrated
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="widget-progress-wrapper mt-1">
                                                                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                                                    <div class="progress-bar bg-success"
                                                                                         role="progressbar"
                                                                                         aria-valuenow="32"
                                                                                         aria-valuemin="0"
                                                                                         aria-valuemax="100"
                                                                                         style="width: 32%;"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-lg-6 col-xl-5">
                                                <div class="mb-3 card stock-up-table">
                                                    <div class="card-header-tab card-header-tab-animation card-header">
                                                        <div class="card-header-title" style="padding-top: 10px; padding-bottom: 10px">
                                                            <img width="35" class="rounded-circle" src="assets/icons/5.1.jfif">
                                                               &nbsp  Stock Up 
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="tab-content">
                                                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                                               
                                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">
                                                                    Your Items are Running Out</h6>
                                                                <div class="scroll-area">
                                                                    <div class="scrollbar-container">
                                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
<!--
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/9.jpg"
                                                                                                 alt="">
-->
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ella-Rose Henry
                                                                                            </div>
                                                                                            <div class="widget-subheading">
                                                                                                It will soon Run Out.
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <span>129</span>
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    Kg
                                                                                                </small>
                                                                                                
                                                                                                <small class="text-danger pl-2">
                                                                                                    <i class="fa fa-angle-down"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
<!--
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/5.jpg"
                                                                                                 alt="">
-->
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Ruben
                                                                                                Tillman
                                                                                            </div>
<!--
                                                                                            <div class="widget-subheading">
                                                                                                UI
                                                                                                Designer
                                                                                            </div>
-->
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <span>54</span>
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    Kg
                                                                                                </small>
                                                                                                
                                                                                                <small class="text-danger pl-2">
                                                                                                    <i class="fa fa-angle-down"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="list-group-item">
                                                                                <div class="widget-content p-0">
                                                                                    <div class="widget-content-wrapper">
                                                                                        <div class="widget-content-left mr-3">
<!--
                                                                                            <img width="42"
                                                                                                 class="rounded-circle"
                                                                                                 src="assets/images/avatars/4.jpg"
                                                                                                 alt="">
-->
                                                                                        </div>
                                                                                        <div class="widget-content-left">
                                                                                            <div class="widget-heading">
                                                                                                Vinnie
                                                                                                Wagstaff
                                                                                            </div>
<!--
                                                                                            <div class="widget-subheading">
                                                                                                Java
                                                                                                Programmer
                                                                                            </div>
-->
                                                                                        </div>
                                                                                        <div class="widget-content-right">
                                                                                            <div class="font-size-xlg text-muted">
                                                                                                <span>9</span>
                                                                                                <small class="opacity-5 pr-1">
                                                                                                    kg
                                                                                                </small>
                                                                                                <small class="text-warning pl-2">
                                                                                                    <i class="fa fa-dot-circle"></i>
                                                                                                </small>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                       </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
            
                            </div>
        </div>

</div>
                </div></div></div></div>
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="assets/scripts/main.07a59de7b920cd76b874.js"></script></body>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
  

<script>
// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
    jQuery("#status").delay(1000).fadeOut();
        // will fade out the whole DIV that covers the website.
        jQuery("#preloader").delay(1000).fadeOut();

})

</script>

</html>
