<?php require_once('templates/hopkins/header_dashboard.php '); ?>
<div id="page-content-wrapper" class="rm-transition">

                    

                    
<div id="page-content">
    
    <div class="page-box">
                            <h3 class="page-title">
                                Admin Users
                                <small>
                                    View all kinds of Tables examples below.
                                </small>
                            </h3>


                            <div class="example-box-wrapper">

        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Row 1</th>
                    <th>Row 2</th>
                    <th>Row 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#</td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                </tr>
                <tr>
                    <td>#</td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                </tr>
                <tr>
                    <td>#</td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                </tr>
                <tr>
                    <td>#</td>
                    <td>Row 1</td>
                    <td>Row 2</td>
                    <td>Row 3</td>
                </tr>
            </tbody>
        </table>

		
        
    </div>

                            </div>
    
    <button class="btn btn-default btn-md" data-toggle="modal" data-target="#myModal">
            Launch demo modal
        </button>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>Modal content here ...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

</div><!-- #page-content -->

                </div><!-- #page-content-wrapper -->
<script type="text/javascript" src="<?php echo TEMPLATE_PATH; ?>/assets-minified/widgets/modal/modal.js"></script>

 <?php  require_once('templates/hopkins/footer_dashboard.php '); ?>