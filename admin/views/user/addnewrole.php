<?php require_once('templates/hopkins/header_dashboard.php '); ?>
<div id="page-content-wrapper" class="rm-transition">
<div id="page-content">
    <div class="page-box">
            <h3 class="page-title">
                Add new Role
                <small>
            View all kinds of Tables examples below.
                </small>
            </h3>
     <form id="demo-form" class="form-horizontal" method="post" action="<?php echo SITE_ROOT;?>index.php?controller=user&action=Insertrole" data-parsley-validate="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Role Name:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" name="rolename" value="<?php echo @$roleDetails['rolename'];?>"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Description:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                        <textarea class="form-control" type="text" name="roledesc" value="<?php echo @$roleDetails['roledesc'];?>"  required><?php echo @$roleDetails['roledesc'];?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                Staff Responsibility:
                <span class="required">*</span>
                    </label> 
             <div class="col-sm-8">
                  <?php for($i=0;$i<count($arrGetStaffRole);$i++) { ?>
                   <?php $userStaffRole = $arrGetStaffRole[$i];?>
                 <div class="checkbox">
          <label>
    <input type="checkbox" name="chkbox[]" value="<?php echo $userStaffRole['resp_name'];?>" <?php if(@$roleDetails['chkbox']){echo "checked";} ?>> <?php echo $userStaffRole['resp_name'];?>
        </label>
                 </div>
                   <?php } ?>
             </div>
                </div>
         
         <div id='result'></div>
          <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                FIle Upload:
                <span class="required">*</span>
                    </label>
                    <div class="col-sm-8">
                       <input type="file" name="userfile[]" id="sortpicture" multiple="">
                    </div>
                </div>
         
          <div class="col-sm-offset-2 col-sm-8">
            <input type="text" name="updateroleid" value="<?php echo @$roleDetails['updateroleid'];?>" /><br/>
            <input type="text" name="saveflag" value="<?php echo @$actflag;?>" />
            <button class="btn btn-md btn-primary" id="upload" onclick='valid()'>
                      Submit
            </button>
          </div>
            </form>
    </div>
</div><!-- #page-content -->

                </div><!-- #page-content-wrapper -->
 <?php  require_once('templates/hopkins/footer_dashboard.php '); ?>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>-->
<script type="text/javascript">
    function valid(){
    var file_data = $('#sortpicture').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    alert(form_data);                             
    $.ajax({
                url: 'test.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(data){
                    alert(data);
                    $('#result').html(data); // display response from the PHP script, if any
                }
     });
}
</script>