<?php 

	require_once('templates/hopkins/header_dashboard.php');

?><div id="page-content-wrapper" class="rm-transition">

    <div id="page-content">

        <script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/parsley/parsley.js"></script>
               <div class="page-box">
            <h3 class="page-title">
                Manage Role
                <small>
         Edit and update Roles
                </small>
            </h3>


            <form id="demo-form" class="form-horizontal" method="post" action="" data-parsley-validate="">
<!--
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">
                               Filter By Role:
                            </label>
                    <div class="col-sm-8">
                <select class="form-control" name="hprole" required onchange="showUser(this.value)">
                    <?php for($i=0;$i<count($arrGetRole);$i++) { ?>
                   <?php $userRole = $arrGetRole[$i];?>
                    <option value="<?php echo $userRole['role_id'];?>"><?php echo $userRole['roles'];?></option>
                <?php } ?>
                </select>
                        <div class="divider"></div>
                    </div>
                </div>
-->
            </form>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Role Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<count($arrGetRole);$i++) { ?>
                        <?php $userRole = $arrGetRole[$i];?>
            <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo $userRole['roles'];?></td>
            <td><?php echo $userRole['role_desc'];?></td>
            <td class="text-right">
                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=edituserrole&editid=<?php echo $userRole['role_id'];?>" class="btn btn-sm hover-blue-alt tooltip-button" data-placement="top" title="" data-original-title="Edit">
                    <i class="glyph-icon icon-edit"></i>
                </a>
                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=deleteuserrole&delid=<?php echo $userRole['role_id'];?>" class="btn btn-sm hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">
                    <i class="glyph-icon icon-remove"></i>
                </a>
            </td>
                
            </tr>
                <?php } ?>
                    </tbody>
                </table>

            <!-- #page-content -->

        </div>
        <!-- #page-content-wrapper -->
<?php 

	 require_once('templates/hopkins/footer_dashboard.php ');
?>        
        
        