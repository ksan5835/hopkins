<?php 
require_once('templates/hopkins/header_dashboard.php');
	echo "<div id='content'>";

?><div id="page-content-wrapper" class="rm-transition">

    <div id="page-content">

        <div class="page-box">
            <h3 class="page-title">
                Manage Department
            </h3>


            <div class="example-box-wrapper">

                <table class="table">
                    <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Department Name</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=0;$i<count($arrGetAllDept);$i++) { ?>
                        <?php $userDept = $arrGetAllDept[$i];?>
                        <tr>
                            <td><?php echo $i + 1;?></td>
                            <td><?php echo $userDept['dept_name'];?></td>
                            <td><?php echo $userDept['dept_desc'];?></td>
                            <td class="text-right">
                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=edituserdept&editid=<?php echo $userDept['dept_id'];?>" class="btn btn-sm hover-blue-alt tooltip-button" data-placement="top" title="" data-original-title="Edit">
                    <i class="glyph-icon icon-edit"></i>
                </a>

                <a href="<?php echo SITE_ROOT;?>index.php?controller=user&action=deleteuserdept&delid=<?php echo $userDept['dept_id'];?>" class="btn btn-sm hover-red tooltip-button" data-placement="top" title="" data-original-title="Remove">
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
    <!-- #page-content -->

</div>
<!-- #page-content-wrapper -->

<?php 

	 require_once('templates/hopkins/footer_dashboard.php ');
?>