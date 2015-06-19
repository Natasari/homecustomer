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
    <style>
        td {
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <?php $this->load->view('header_admin')?>
        <?php $this->load->view('sidebar_admin')?>    
        <div id="page-wrapper">
            
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        
                        <div class="row">
                            <div id="dataTables-example_filter" class="dataTables_filter">
                                <label style="float:left; margin-right:15px;"> Search Area:  
                                    <input type="text" id="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Keterangan
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="dataTables-example_length">
                                            <table>
                                              <tr>
                                                <td><label>Area</label></td>
                                                <td>:</td>
                                                <td>Area</td>
                                              </tr>
                                              <tr>
                                                <td><label>Lokasi</label></td>
                                                <td>:</td>
                                                <td>Lokasi</td>
                                              </tr>
                                              <tr>
                                                <td><label>Koordinat</label></td>
                                                <td>:</td>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <td><label>Jumlah Rumah</label></td>
                                                <td>:</td>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <td><label>Jumlah Blok</label></td>
                                                <td>:</td>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <td><label>Jumlah Ruko</label></td>
                                                <td padding="1">:</td>
                                                <td></td>
                                              </tr>
                                              <tr>
                                                <td><label>Jumlah Hunian</label></td>
                                                <td>:</td>
                                                <td></td>
                                              </tr>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Kompetitor
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="dataTables-example_length">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Demo Revenue Indohome
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_length" id="dataTables-example_length">
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
