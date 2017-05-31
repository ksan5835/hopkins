<?php require_once('templates/hopkins/header_dashboard.php '); ?>
<div id="page-content-wrapper" class="rm-transition">
    <div id="page-content">
        <div class="page-box">
            <h3 class="page-title">
                Manage Users
                <small>
                View all kinds of Tables examples below.
                </small>
                <select class="form-control" name="hprole" required onchange="showUser(this.value)">
<!--                    <option value="" selected>select Roles</option>-->
                    <?php for($i=0;$i<count($arrGetRole);$i++) { ?>
                   <?php $userRole = $arrGetRole[$i];?>
                    <option value=" <?php echo $userRole['role_id'];?> " > <?php echo $userRole['roles'];?></option>
                <?php } ?>
            
                </select>   
            </h3>
                <div><h3>Person info will be listed here...</h3></div>

            <div class="example-box-wrapper" id="txtHint">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User Name</th>
<!--                            <th>Role</th>-->
                            <th>Nationality</th>
                            <th>User Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<count($arrGetData);$i++) { ?>
                        <?php $userData = $arrGetData[$i];?>
                

            <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo $userData['user_name'];?></td>
<!--            <td><?php echo $userData['role_id'];?></td>-->
            <td><?php echo $userData['nationality'];?></td>
            <td><?php echo $userData['user_email'];?></td>
            <td class="text-right">
                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=editmanageuser&editid=<?php echo $userData['user_id'];?>" class="btn btn-sm hover-blue-alt tooltip-button" data-placement="top" title="" data-original-title="Edit">
                    <i class="glyph-icon icon-edit"></i>
                </a>
                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=deletemanageuser&delid=<?php echo $userData['user_id'];?>" class="btn btn-sm hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">
                    <i class="glyph-icon icon-remove"></i>
                </a>
            </td>
                
            </tr>
                 <?php } ?>
                    </tbody>
                </table>
                </div>
            
            
            
            
        </div>
    </div>
</div>
<!-- #page-content-wrapper -->

<?php  require_once('templates/hopkins/footer_dashboard.php '); ?>
<script>
function showUser(str) {
  // alert(str);

    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
          
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","<?php echo SITE_ROOT;?>index.php?controller=user&action=getrole&id="+str,true);
        xmlhttp.send();
    }
}
</script>