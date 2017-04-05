<?php 
if($action =="login" && $controller == "login"){
    require_once('templates/hopkins/header_login.php ');
}else{
    require_once('templates/hopkins/header_dashboard.php ');
}
?>
<!-- end f header section -->


<?php require_once('routes.php'); ?>

<!-- include footer section -->
<?php

if($action =="login" && $controller == "login"){
    require_once('templates/hopkins/footer_login.php ');
}else{
    require_once('templates/hopkins/footer_dashboard.php ');
}

?>

<!-- end of footer section -->
   
        




        
