<div id="page-content-wrapper" class="rm-transition">

                    

                    
<div id="page-content">

<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/parsley/parsley.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/input-mask/inputmask.js"></script>

<script type="text/javascript">
    /* Input masks */

    $(function() { "use strict";
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
				

                    <form id="demo-form" class="form-horizontal" data-parsley-validate="">
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">
                First Name:
                <span class="required">*</span>
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">
               Last Name:
                <span class="required">*</span>
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="text" id="email" name="email" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-2 control-label">
                Email:
                <span class="required">*</span>
            </label>
            <div class="col-sm-8">
                <input class="form-control" type="email" id="email" name="email" data-parsley-trigger="change" required>
            </div>
        </div>
       
       <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Phone:</label>
                    <div class="col-sm-8">
                    <input type="text" class="input-mask form-control" data-inputmask="&apos;mask&apos;:&apos;999- 999-9999&apos;" required>
                    <div class="help-block">999- 999-9999</div>
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

    </form>
</div>

</div><!-- #page-content -->

                </div><!-- #page-content-wrapper -->
                