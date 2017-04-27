<?php require_once('templates/hopkins/header_dashboard.php '); ?>
<div id="page-content-wrapper" class="rm-transition">
    <div id="page-content">
        <div class="page-box">
            <h3 class="page-title">
                Manage Users
                <small>
                View all kinds of Tables examples below.
                </small>
            </h3>

            <div class="example-box-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>User First Name</th>
                            <th>User Last Name</th>
                            <th>User Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<count($arrGetData);$i++) { ?>
                        <?php $userData = $arrGetData[$i];?>
                

            <tr>
            <td><?php echo $i + 1; ?></td>
            <td><?php echo $userData['user_firstname'];?></td>
            <td><?php echo $userData['user_lastname'];?></td>
            <td><?php echo $userData['user_email'];?></td>
            <td class="text-right">
                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=editmanageuser&editid=<?php echo $userData['id'];?>" class="btn btn-sm hover-blue-alt tooltip-button" data-placement="top" title="" data-original-title="Edit">
                    <i class="glyph-icon icon-edit"></i>
                </a>

                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=deletemanageuser&delid=<?php echo $userData['id'];?>" class="btn btn-sm hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">
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