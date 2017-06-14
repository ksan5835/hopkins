<?php 
	
	require_once('templates/hopkins/header_dashboard.php');
?>

<div id="page-content-wrapper" class="rm-transition">

    <div id="page-content">
        <div class="page-box">
            <h3 class="page-title">
                Add new Users
            </h3>
            <form id="demo-form" class="form-horizontal" method="post" action="<?php echo SITE_ROOT;?>index.php?controller=user&action=registeruser" data-parsley-validate="">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
              Name:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" autocomplete="off" type="text" name="username" value="<?php echo @$reUserDetails['username'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Gender:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <?php 
                          $arrGender = array('male','female');
                          
                           //print_r($reUserDetails);
                        
                for($i=0;$i<count($arrGender);$i++){
                $checkedStatus = (@$reUserDetails['gender'] == $arrGender[$i] ) ? 'checked="checked"' : "";
                        ?> 
                        <div class="col-sm-4">
                            <div class="radio">
                                <label>
                        <input type="radio" required autocomplete="off" name="gender" <?php echo $checkedStatus;?> value="<?php echo $arrGender[$i];?>"><?php echo $arrGender[$i];?></label>
                            </div>
                        </div>
                        
                        <?php } ?>                        

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">
               DOB:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <div class="input-prepend input-group demo-margin">
                            <span class="add-on input-group-addon">
                            <i class="glyph-icon icon-calendar"></i>
                        </span>
                            <input style="width: 200px" class="bootstrap-datepicker form-control" id="datepicker" value="<?php echo @$reUserDetails['dob'];?>" data-date-format="mm/dd/yy" name="dob" type="text" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Email:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" autocomplete="off" type="email" value="<?php echo @$reUserDetails['useremail'];?>" name="useremail" data-parsley-trigger="change" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Role:
                    <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                 <select class="form-control" name="userroleid" required onchange="showUser(this.value)">
                    <option value="" selected="selected" disabled>Select Role</option>
                    <?php for($i=0;$i<count($arrGetRole);$i++) { ?>
                   <?php $userRole = $arrGetRole[$i];?>
                    <option value="<?php echo @$userRole['role_id'];?>"><?php echo $userRole['roles'];?></option>
                <?php } ?>
                </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Phone:
                       <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" autocomplete="off" name="userphone" value="<?php echo @$reUserDetails['userphone'];?>" class="input-mask form-control" data-inputmask="&apos;mask&apos;:&apos;999-999-9999&apos;" required>
                        <div class="help-block">999-999-9999</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Address:<?php echo @$reUserDetails['address'];?>
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <textarea autocomplete="off" class="form-control" type="text" name="useraddress" value="<?php echo @$reUserDetails['address'];?>" required><?php echo @$reUserDetails['useraddress'];?></textarea>
                    </div>
                </div>

                
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="divider"></div>
                    <div class="form-group">
                        <input type="hidden" name="updateuserid" value="<?php echo @$reUserDetails['updateuserid'];?>" />
                        <input type="hidden" name="saveflag" value="<?php echo @$actflag;?>" />
                    </div>
                    <button class="btn btn-md btn-primary">
                                       Submit
                    </button>
                </div>
            </form>


            <!-- #page-content -->

        </div>
    </div>
    </div>
        
<?php 

	 require_once('templates/hopkins/footer_dashboard.php ');
?>
        
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/parsley/parsley.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/input-mask/inputmask.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/datepicker-ui/datepicker.js"></script>

  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

<script type="text/javascript">
    /* Input masks */

    $(function() {
        "use strict";
        $(".input-mask").inputmask();
    });
</script>



<!-- #page-content-wrapper -->