<?php 

	require_once('templates/hopkins/header_dashboard.php');
	
?><div id="page-content-wrapper" class="rm-transition">
<div id="page-content">
    <div class="page-box">
            <h3 class="page-title">
                Add new Role
            </h3>
     <form id="demo-form" class="form-horizontal" method="post" action="<?php echo SITE_ROOT;?>index.php?controller=user&action=Insertrole" data-parsley-validate="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Role Name:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input autocomplete="off" class="form-control" type="text" name="rolename" value="<?php echo @$roleDetails['rolename'];?>"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Description:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <textarea class="form-control" autocomplete="off" type="text" name="roledesc" value="<?php echo @$roleDetails['roledesc'];?>"  required><?php echo @$roleDetails['roledesc'];?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Staff Responsibility:
                <span class="required">*</span>
                    </label> 
             <div class="col-sm-8">
                 
                 <?php 
                 $arrstaffResp = array('Staff Rating','Student Performance','Decision Making','Appraisal','Student Attendance','Fees Reminder','Staff Attendance');
 
                 for($i=0;$i<count($arrstaffResp);$i++) {
                 
                     if(@array_search($arrstaffResp[$i],@$roleDetails['chkbox'])){
                         $checkedStatus = 'checked="checked"';
                     }else{
                         $checkedStatus = "";
                     }
                
                 ?>
                 <div class="checkbox">
          <label>
    <input type="checkbox" autocomplete="off" name="chkbox[]" value="<?php echo $arrstaffResp[$i];?>" <?php echo $checkedStatus;?>><?php echo $arrstaffResp[$i];?> 
          </label>
                 </div>
                   <?php } ?>
             </div>
                </div>
         
          <div class="col-sm-offset-2 col-sm-8">
            <input type="hidden" name="updateroleid" value="<?php echo @$roleDetails['updateroleid'];?>" /><br/>
            <input type="hidden" name="saveflag" value="<?php echo @$actflag;?>" />
            <button class="btn btn-md btn-primary">
                      Submit
            </button>
          </div>
            </form>
    </div>
</div><!-- #page-content -->

 </div><!-- #page-content-wrapper -->
<?php 

	 require_once('templates/hopkins/footer_dashboard.php ');
?>

