<!DOCTYPE html> 
<html lang="en">
<head> 

    <meta charset="UTF-8">
<!--[if gte IE 9]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<!--[if IE 8]><meta http-equiv="X-UA-Compatible" content="IE=8"><![endif]-->
<title> Login page 2 </title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo TEMPLATE_PATH; ?>/assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo TEMPLATE_PATH; ?>/assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo TEMPLATE_PATH; ?>/assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo TEMPLATE_PATH; ?>/assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?php echo TEMPLATE_PATH; ?>/assets/images/icons/favicon.png">



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