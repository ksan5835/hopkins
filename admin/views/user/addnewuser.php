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
                First Name:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="hpuserfirstname" value="<?php echo @$reUserDetails['fname'];?>"  required >
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
               Last Name:
                <span class="required">*</span>
                   </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" value="<?php echo @$reUserDetails['lname'];?>" name="hpuserlastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Email:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="email" id="email" value="<?php echo @$reUserDetails['uemail'];?>" name="hpuseremail" data-parsley-trigger="change" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Phone:</label>
                    <div class="col-sm-8">
                        <input type="text" name="hpuserphone" value="<?php echo @$reUserDetails['uphone'];?>" class="input-mask form-control" data-inputmask="&apos;mask&apos;:&apos;999-999-9999&apos;" required>
                        <div class="help-block">999-999-9999</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                               Role:
                                <span class="required">*</span>
                            </label>
                    <div class="col-sm-8">
                        <form>

                <select class="form-control" required name="hpcategory">
                <option>Select</option>
                <option value="admin">Admin</option>
                <option value="manager">Manager</option>
                <option value="user">User</option>
                <option value="test">Test</option>
                </select>

                        </form>
                        <div class="divider"></div>
                        <div class="form-group">
                            <input type="text" name="updateuserid" value="<?php echo @$reUserDetails['uid'];?>" />
                            <input type="text" name="saveflag" value="<?php echo $actflag;?>" />
                            <div class="col-sm-offset-2 col-sm-8">
                                <button class="btn btn-md btn-primary">
                                       Submit
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </form>

            <!-- #page-content -->

        </div>
        <?php  require_once('templates/hopkins/footer_dashboard.php '); ?>
        <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/parsley/parsley.js"></script>
        <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/input-mask/inputmask.js"></script>

        <script type="text/javascript">
            /* Input masks */

            $(function() {
                "use strict";
                $(".input-mask").inputmask();
            });
        </script>
        <!-- #page-content-wrapper -->