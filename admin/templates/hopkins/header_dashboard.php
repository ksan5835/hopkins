<!DOCTYPE html> 
<html lang="en">
<head> 

    <meta charset="UTF-8">
<!--[if gte IE 9]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<!--[if IE 8]><meta http-equiv="X-UA-Compatible" content="IE=8"><![endif]-->
<title> Hopkins &amp; Admin Template </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/icons/favicon.png">



    <!-- JS Core -->

    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/js-core.js"></script>



<script type="text/javascript">
    $(window).load(function(){
        setTimeout(function() {
            $('#loading').fadeOut( 400, "linear" );
        }, 300);
    });
</script>
<style>
    #loading {position: fixed;width: 100%;height: 100%;left: 0;top: 0;right: 0;bottom: 0;display: block;background: #fff;z-index: 10000;}
    #loading img {position: absolute;top: 50%;left: 50%;margin: -23px 0 0 -23px;}
</style>        

        <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH; ?>/assets-minified/all-demo.css">

</head> 
<body>
    <div id="loading"><img src="<?php echo TEMPLATE_PATH; ?>/images/spinner/loader-dark.gif" alt="Loading..."></div>

     <div id="sb-site">
            <div id="page-wrapper">


            <div id="page-header" class="clearfix">
    <div id="header-logo" class="rm-transition">
        <a href="#" class="tooltip-button hidden-desktop" title="Navigation Menu" id="responsive-open-menu">
            <i class="glyph-icon icon-align-justify"></i>
        </a>
        <span>Bratilius <i class="opacity-80">1.0</i>
        </span>

        <a id="collapse-sidebar" href="#" title="">
            <i class="glyph-icon icon-chevron-left"></i>
        </a>
    </div>
    <!-- #header-logo -->

    <div id="header-left">

        <div class="dropdown">

            <a data-toggle="dropdown" href="#" title="">
                <span class="bs-badge badge-absolute bg-orange">5</span>
                <i class="glyph-icon icon-bell"></i>
            </a>
            <div class="dropdown-menu">

                <div class="popover-title display-block clearfix pad10A">
                    Notifications
                </div>
                <div class="scrollable-content scrollable-nice box-md scrollable-small">

                    <ul class="no-border notifications-box">
                        <li>
                            <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                            <span class="notification-text font-blue">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                            <span class="notification-text font-green">A success message example.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text font-blue">Alternate notification styling.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-green icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text font-green">A success message example.</span>
                            <div class="notification-time">
                                <b>2 hours</b> ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is an error notification</span>
                            <div class="notification-time">
                                a few seconds ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                        <li>
                            <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                            <span class="notification-text">This is a warning notification</span>
                            <div class="notification-time">
                                <b>15</b> minutes ago
                                <span class="glyph-icon icon-clock-o"></span>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="pad10A button-pane button-pane-alt text-center">
                    <a href="#" class="btn btn-primary" title="View all notifications">
                        View all notifications
                    </a>
                </div>

            </div>
        </div>

        <div class="dropdown">

            <a data-toggle="dropdown" href="#" title="">
                <span class="bs-badge badge-absolute bg-red">2</span>
                <i class="glyph-icon icon-tasks"></i>
            </a>
            <div class="dropdown-menu pad0A" id="progress-dropdown">

                <div class="scrollable-content scrollable-nice box-sm scrollable-small">

                    <ul class="no-border progress-box progress-box-links">
                        <li>
                            <a href="#" title="">
                                <div class="progress-title">
                                    Finishing uploading files
                                    <b>23%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="23">
                                    <div class="progressbar-value bg-blue-alt">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <div class="progress-title">
                                    Roadmap progress
                                    <b>91%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="91">
                                    <div class="progressbar-value bg-red">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <div class="progress-title">
                                    Images upload
                                    <b>58%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="58">
                                    <div class="progressbar-value bg-green"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <div class="progress-title">
                                    WordPress migration
                                    <b>74%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="74">
                                    <div class="progressbar-value bg-purple"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <div class="progress-title">
                                    Agile development procedures
                                    <b>91%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="91">
                                    <div class="progressbar-value bg-black">
                                        <div class="progressbar-overlay"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <div class="progress-title">
                                    Systems integration
                                    <b>58%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="58">
                                    <div class="progressbar-value bg-azure"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="">
                                <div class="progress-title">
                                    Code optimizations
                                    <b>97%</b>
                                </div>
                                <div class="progressbar-smaller progressbar" data-value="97">
                                    <div class="progressbar-value bg-yellow"></div>
                                </div>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="pad5A button-pane button-pane-alt text-center">
                    <a href="#" class="btn display-block font-normal hover-green" title="View all notifications">
                        View all notifications
                    </a>
                </div>

            </div>
        </div>

        <div class="dropdown">
            <a href="#" data-toggle="dropdown" data-placement="left" class="popover-button-header tooltip-button" title="Example menu">
                <span class="bs-badge badge-absolute bg-green">9</span>
                <i class="glyph-icon icon-th"></i>
            </a>
            <div class="dropdown-menu">
                <div class="box-sm">
                    <div class="pad5T pad10B pad10L pad10R dashboard-buttons clearfix">
                        <a href="#" class="btn vertical-button hover-blue-alt" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                </span>
                            Dashboard
                        </a>
                        <a href="#" class="btn vertical-button hover-green" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                </span>
                            Widgets
                        </a>
                        <a href="#" class="btn vertical-button hover-orange" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                </span>
                            Tables
                        </a>
                        <a href="#" class="btn vertical-button hover-orange" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                </span>
                            Charts
                        </a>
                        <a href="#" class="btn vertical-button hover-purple" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                </span>
                            Buttons
                        </a>
                        <a href="#" class="btn vertical-button hover-azure" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                </span>
                            Panels
                        </a>
                    </div>

                    <div class="bg-gray text-transform-upr font-size-12 font-gray-dark pad10A">Dashboard menu</div>
                    <div class="pad5T pad10B pad10L pad10R dashboard-buttons clearfix">
                        <a href="#" class="btn vertical-button remove-border btn-info" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                </span>
                            Dashboard
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                </span>
                            Widgets
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                </span>
                            Tables
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                </span>
                            Charts
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                </span>
                            Buttons
                        </a>
                        <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                                <span class="glyph-icon icon-separator-vertical pad0A medium">
                                    <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                </span>
                            Panels
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="header-right">
        <div class="user-profile dropdown">
            <a href="#" title="" class="user-ico clearfix" data-toggle="dropdown">
                <img width="36" class="img-rounded" src="<?php echo TEMPLATE_PATH; ?>/dummy-images/gravatar.jpg" alt="">
                <span>John Applebee</span>
                <i class="glyph-icon icon-chevron-down"></i>
            </a>
            <div class="dropdown-menu pad0B float-right">
                <div class="box-sm">
                    <div class="login-box clearfix">
                        <div class="user-img">
                            <a href="#" title="" class="change-img">Change photo</a>
                            <img src="<?php echo TEMPLATE_PATH; ?>/dummy-images/gravatar.jpg" alt="">
                        </div>
                        <div class="user-info">
                        <span>
                            Horia Simon
                            <i>Front-end web developer</i>
                        </span>
                            <a href="#" title="">Edit profile</a>
                            <a href="#" title="">View notifications</a>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <ul class="reset-ul mrg5B">
                        <li>
                            <a href="#">
                                View login page example
                                <i class="glyph-icon float-right icon-caret-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                View lockscreen example
                                <i class="glyph-icon float-right icon-caret-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                View account details
                                <i class="glyph-icon float-right icon-caret-right"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="pad5A button-pane button-pane-alt text-center">
                        <a href="<?php echo SITE_ROOT;?>index.php?controller=login&action=logout" class="btn display-block font-normal btn-danger">
                            <i class="glyph-icon icon-power-off"></i>
                            Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="page-nav-right">
            <a href="#" title="" class="btn sb-open-right no-shadow updateEasyPieChart">
                <i class="glyph-icon icon-cogs"></i>
                Statistics
            </a>
            <a href="#" title="" class="btn sb-open-left no-shadow updateEasyPieChart">
                <i class="glyph-icon icon-comment"></i>
                Chat
            </a>
        </div>

    </div>

</div>
<!-- #page-header -->



<div id="page-sidebar" class="rm-transition">
    <div id="page-sidebar-wrapper">

        <div id="sidebar-menu">

            <div id="sidebar-search">
    <input type="text" placeholder="Autocomplete search..." class="autocomplete-input tooltip-button" data-placement="right" title="Type &apos;j&apos; to see the available tags..." name="">
    <i class="glyph-icon icon-search"></i>
</div>
<ul>
<li>
    <a href="<?php echo SITE_ROOT;?>index.php?controller=home&action=dashboard" title="Applications">
        <i class="glyph-icon icon-linecons-tv"></i>
        <span>Dashboard</span>
    </a>
</li>
<li>
    <a href="index.html" title="Applications">
        <i class="glyph-icon icon-linecons-shop"></i>
        <span>Users</span>      
    </a>
    <ul>
        <li class="header"><span>Admin Users</span></li>
         <li><a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=addnewuser" title="Carousels"><span>Add New User</span></a></li>
        <li><a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=manageuser" title="Carousels"><span>Manage Users</span></a></li>
        <li><a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=addnewrole" title="Carousels"><span>Add Role</span></a></li>
        <li><a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=managerole" title="Slideshows"><span>Manage Role</span></a></li>
<!--
    </ul>
     <ul>
        <li class="header"><span>Non Admin Users</span></li>
-->
         <li><a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=addnewdepartment" title="Add user"><span>Add department</span></a></li>
        <li><a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=managedepartment" title="Admin"><span>Manage department</span></a></li>
    </ul>
</li>  
    
   
</ul>

        </div><!-- #sidebar-menu -->

        <div class="divider"></div>

        <div class="hidden-mobile text-center mrg15A">
            <div class="btn-group btn-group-sm">
                <a href="javascript:;" class="btn btn-primary tooltip-button" data-placement="top" title="Top tooltip">
                    <i class="glyph-icon icon-flag"></i>
                </a>
                <a href="javascript:;" class="btn btn-primary tooltip-button" data-placement="bottom" title="Bottom tooltip">
                    <i class="glyph-icon icon-inbox"></i>
                </a>
                <a href="javascript:;" class="btn btn-primary tooltip-button" data-placement="right" title="Right tooltip">
                    <i class="glyph-icon icon-hdd-o"></i>
                </a>
            </div>
        </div>

        <div class="divider"></div>
    </div><!-- #page-sidebar-wrapper -->
</div><!-- #page-sidebar -->