<div id="page-content-wrapper" class="rm-transition">




    <div id="page-content">

        <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/parsley/parsley.js"></script>
        <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/input-mask/inputmask.js"></script>

        <script type="text/javascript">
            /* Input masks */

            $(function() {
                "use strict";
                $(".input-mask").inputmask();
            });
        </script>
        <div class="page-box">
            <h3 class="page-title">
                Add new Users
                <small>
         View all kinds of Tables examples below.
                </small>
            </h3>


            <form id="demo-form" class="form-horizontal" method="post" action="<?php echo SITE_ROOT;?>index.php?controller=user&action=registernonadminuser" data-parsley-validate="">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                First Name:
                <span class="required">*</span>
            </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="email" name="hpuserfirstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
               Last Name:
                <span class="required">*</span>
            </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" id="email" name="hpuserlastname" required>
                    </div>
                </div>
             

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                               Role:
                                <span class="required">*</span>
                            </label>
                    <div class="col-sm-8">
                        <form>

                            <select class="form-control" required>
                <option>Select</option>
                <option>Admin</option>
                <option>Manager</option>
                <option>User</option>
                <option>Test</option>
            </select>

                        </form>
                        <div class="divider"></div>
                        <div class="form-group">
                            <input type="hidden" name="superhidden" id="superhidden">
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
        <!-- #page-content-wrapper -->