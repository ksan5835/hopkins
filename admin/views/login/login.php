<?php  require_once('templates/hopkins/header_login.php '); ?>
<style type="text/css">

    body {
        background: #fafafa;
        height: 100% !important;
    }

</style>
<div class="center-vertical">
    <div class="center-content">
        <div class="col-md-6 clearfix center-margin">

            <div class="col-md-5">
                <h3 class="text-transform-upr font-size-17">Hopkins International School</h3>
                <p class="font-gray">Beyond schooling...</p>
                <div class="divider"></div>
                Contents will come here
                <div class="divider"></div>
<!--
                <?php if(!$getLoggedData) { ?> 
                <small style="color:#aa000; "><?php echo $error; ?> </small>
    <?php } ?>
-->
            </div>
            <div class="col-md-7">
                <form method="post" action="<?php echo SITE_ROOT;?>index.php?controller=login&action=processlogin">
                    <div class="content-box">
                        <h3 class="content-box-header content-box-header-alt bg-default">
                            <span class="icon-separator">
                                <i class="glyph-icon icon-cog"></i>
                            </span>
                            <div class="header-wrapper">
                                Administrator
                                <small>Use the form below to login to your account.</small>
                            </div>
                           
                        </h3>
                        <div class="content-box-wrapper">
                            <div class="form-group"> 
                                <div class="input-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="hpusername" placeholder="Enter email">
                                    <span class="input-group-addon bg-blue">
                                        <i class="glyph-icon icon-envelope-o"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="hppassword" placeholder="Password">
                                    <span class="input-group-addon bg-blue">
                                        <i class="glyph-icon icon-unlock-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="" title="Recover password">Forgot Your Password?</a>
                    
                            </div>
                           
                            
                            <button class="btn btn-success btn-block" name="login">Sign In</button>
                        </div>
                    </div>
                </form>
               
            </div>
            
        </div>

    </div>
</div>



    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/modal/modal.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/all-demo.js"></script>
    <!--[if !(IE 8)]><!-->
    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/skycons/skycons.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/charts/piegage/piegage.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/charts/piegage/piegage-demo.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/charts/sparklines/sparklines.js"></script>
    <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/charts/sparklines/sparklines-demo.js"></script>
    <![endif]-->
  <!--[if lt IE 9]>
    <script src="<?php echo TEMPLATE_PATH; ?>/assets-minified/js-core/html5shiv.js"></script>
  <![endif]-->

<?php  require_once('templates/hopkins/footer_login.php '); ?>