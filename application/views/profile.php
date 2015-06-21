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
                                <label style="float:left; margin-right:15px;"> Cluster :  
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
                            <div class="table-responsive">
                                <table style="text-align:center;" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="text-align:center;" rowspan="2" text-align="middle">Area </th>
                                            <th style="text-align:center;" rowspan="2">Jumlah cluster</th>
                                            <th style="text-align:center;" rowspan="2">Jumlah bangunan</th>
                                            <th colspan="3" style="text-align:center;">Customer </th> 
                                            <th colspan="3" style="text-align:center;">Revenue </th>
                                        </tr>
                                            <tr>
                                                <th>Wireline</th> <th>Internet</th> <th>Total</th>  
                                                <th>Wireline</th> <th>Internet</th> <th>Total</th>  
                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    
    
    <script src="<?php echo base_url(); ?>assets/jquery/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery-1.7.2.min.js"></script> <!-- autocmplete-->
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.core.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.widget.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.position.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery/jquery.ui.autocomplete.min.js"></script>
    <script type="text/javascript">
        var $jq = jQuery.noConflict(true);
        $jq(document).ready(function(){
            $jq('#search').autocomplete({
                source: "<?php echo site_url('admin/search?='); ?>"
            });
        });
    </script>
     <!-- -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/metisMenu/dist/metisMenu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery/smoothness/jquery-ui-1.8.21.custom.css"/>

    
</body>

</html>
