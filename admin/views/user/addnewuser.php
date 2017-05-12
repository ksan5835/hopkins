<?php require_once('templates/hopkins/header_dashboard.php '); ?>
<div id="page-content-wrapper" class="rm-transition">

    <div id="page-content">
        <div class="page-box">
            <h3 class="page-title">
                Add new Users
                <small>
            View all kinds of Tables examples below.
                </small>
            </h3>
            <form id="demo-form" class="form-horizontal" method="post" action="<?php echo SITE_ROOT;?>index.php?controller=user&action=registeruser" data-parsley-validate="">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
              Name:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="username" value="<?php echo @$reUserDetails['username'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Gender:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <div class="col-sm-4">
                            <div class="radio">
                                <label><input type="radio" name="radio" value="<?php echo @$reUserDetails['radio'];?>">Male</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="radio">
                                <label><input type="radio" name="radio" value="<?php echo @$reUserDetails['radio'];?>">Female</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
               DOB:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <div class="input-prepend input-group demo-margin">
                            <span class="add-on input-group-addon">
                            <i class="glyph-icon icon-calendar"></i>
                        </span>
                            <input style="width: 200px" class="bootstrap-datepicker form-control" value="<?php echo @$reUserDetails['dob'];?>" data-date-format="mm/dd/yy" name="dob" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Email:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="email" id="email" value="<?php echo @$reUserDetails['useremail'];?>" name="useremail" data-parsley-trigger="change" required>
                    </div>
                </div>


                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                               Role:
                                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">

                        <select class="form-control" name="userrole" required onchange="showUser(this.value)">
                    <?php for($i=0;$i<count($arrGetRole);$i++) { ?>
                   <?php $userRole = $arrGetRole[$i];?>
                    <option><?php echo $userRole['roles'];?></option>
                <?php } ?>
                </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                              Department:
                            </label>
                    <div class="col-sm-8">
                        <select class="form-control" name="department" required>
                    <?php for($i=0;$i<count($arrGetDept);$i++) { ?>
                   <?php $userDept = $arrGetDept[$i];?>
                  
                    <option><?php echo $userDept['dept_name'];?></option>
                <?php } ?>
                </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Phone:
                       <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input type="text" name="userphone" value="<?php echo @$reUserDetails['userphone'];?>" class="input-mask form-control" data-inputmask="&apos;mask&apos;:&apos;999-999-9999&apos;" required>
                        <div class="help-block">999-999-9999</div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Address:<?php echo @$reUserDetails['address'];?>
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <textarea class="form-control" type="text" name="useraddress" value="<?php echo @$reUserDetails['address'];?>" required><?php echo @$reUserDetails['useraddress'];?></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Experience:
                        <span class="required">*</span>
                     </label>
                    <div class="col-sm-8">
                        <div class="input-prepend input-group demo-margin">
                            <span class="add-on input-group-addon">
                            <i class="glyph-icon icon-calendar"></i>
                        </span>
                            <input style="width: 200px" name="userexp" id="daterangepicker-example" class="form-control" value="03/18/2013 - 03/23/2013" type="text">
                            <!--                    <input type="text" style="width: 200px" name="userexp" id="daterangepicker-example" class="form-control" value="<?php echo @$reUserDetails['userexp'];?>">-->
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
              Previous Work Done:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="prework" value="<?php echo @$reUserDetails['prework'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
              Nationality:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="nationality" value="<?php echo @$reUserDetails['nationality'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
             Qualification:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="qualification" value="<?php echo @$reUserDetails['qualification'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
             Known languages:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="language" value="<?php echo @$reUserDetails['language'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
              Job Type:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="jobtype" value="<?php echo @$reUserDetails['jobtype'];?>" required>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="divider"></div>
                    <div class="form-group">
                        <input type="text" name="updateuserid" value="<?php echo @$reUserDetails['updateuserid'];?>" />
                        <input type="text" name="saveflag" value="<?php echo @$actflag;?>" />
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
<?php  require_once('templates/hopkins/footer_dashboard.php '); ?>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/parsley/parsley.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/input-mask/inputmask.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/datepicker/datepicker.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/datepicker/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript">
    /* Datepicker bootstrap */

    $(function() {
        $('.bootstrap-datepicker').bsdatepicker({
            format: 'mm-dd-yyyy'
        });
    });
</script>

<script type="text/javascript">
    /* Input masks */

    $(function() {
        "use strict";
        $(".input-mask").inputmask();
    });
</script>

<!-- #page-content-wrapper -->