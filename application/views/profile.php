<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>
    <link href="<?=base_url()?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/timeline.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/morrisjs/morris.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.7.2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.core.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.widget.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.position.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.autocomplete.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/smoothness/jquery-ui-1.8.21.custom.css"/>

    <script type="text/javascript">
		$(document).ready(function(){
			$('#search').autocomplete({
				source: "<?php echo site_url('admin/search?='); ?>"
			});
		});
	</script>
</head>

<body>

    <div id="wrapper">
        <?php $this->load->view('header_admin')?>
        <?php $this->load->view('sidebar_admin')?>    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Teknik</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                	<div class="row">
                                		<div class="col-sm-6">
                                			<input type="text" id="search"/>
                                		</div>
                                	<div class="col-sm-6"><div id="dataTables-example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></label></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 170px;">Rendering engine</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 207px;">Browser</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 188px;">Platform(s)</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 147px;">Engine version</th><th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 108px;">CSS grade</th></tr>
                                    </thead>
                                    <tbody>    
                                    <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.7</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        </tr><tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 2.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">1.8</td>
                                            <td class="center">A</td>
                                        
                                        </tr></tbody>
                                </table></div></div><div class="row"><div class="col-sm-6"><div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">4</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">5</a></li><li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">6</a></li><li class="paginate_button next" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li></ul></div></div></div></div>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
</body>

</html>
