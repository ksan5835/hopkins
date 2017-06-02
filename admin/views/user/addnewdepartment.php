<?php require_once('templates/hopkins/header_dashboard.php'); ?>
<div id="page-content-wrapper" class="rm-transition">

                    

                    
<div id="page-content">
    <div class="page-box">
            <h3 class="page-title">
                Add new Role
                <small>
            View all kinds of Tables examples below.
                </small>
            </h3>
     <form id="demo-form" class="form-horizontal" method="post" action="<?php echo SITE_ROOT;?>index.php?controller=user&action=registerdept" data-parsley-validate="">
                <div class="form-group">
                    <label for="" class="col-sm-3 control-label">
                Department Name:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="deptname" value="<?php echo @$deptDetails['deptname'];?>"  required>
                    </div>
                </div>
         <div class="form-group">
                    <label for="" class="col-sm-3 control-label">
                Department Description:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <textarea class="form-control" type="text" name="deptdesc" value="<?php echo @$deptDetails['deptdesc'];?>" required><?php echo @$deptDetails['deptdesc'];?></textarea>
                    </div>
         </div>
          <div class="col-sm-offset-3 col-sm-8">
            <input type="text" name="updatedeptid" value="<?php echo @$deptDetails['updatedeptid'];?>" /><br/>
            <input type="text" name="saveflag" value="<?php echo @$actflag;?>" />
            <button class="btn btn-md btn-primary">
             Submit
            </button>
         </div>
            </form>
    </div>
</div><!-- #page-content -->

                </div><!-- #page-content-wrapper -->
 <?php  require_once('templates/hopkins/footer_dashboard.php '); ?>