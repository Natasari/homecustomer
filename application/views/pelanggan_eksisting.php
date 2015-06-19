<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <link href="<?=base_url()?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/timeline.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/sb-admin-2.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/morrisjs/morris.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <style>
        .kelas{
            padding-left: 5px;
            padding-right: 5px;
            padding-top: 7px;
            padding-bottom: 7px;
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
                    <h1 class="page-header">Pelanggan Eksisting</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                        <table >
                              <tr>
                                <td><label>Cluster</label></td>
                                <td class="kelas">:</td>
                                <td class="kelas"><input type="text" id="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></td>
                              </tr>
                              <tr>
                                <td><label>Produk</label></td>
                                <td class="kelas">:</td>
                                <td class="kelas"><input type="text" id="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></td>
                              </tr>
                              <tr>
                                <td><label>Kuadran</label></td>
                                <td class="kelas">:</td>
                                <td class="kelas"><input type="text" id="search" class="form-control input-sm" placeholder="" aria-controls="dataTables-example"></td>
                              </tr>
                             
                        </table>
                      
                    </div>
                </div>
            </div>
            
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Pelanggan Eksisting
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
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=base_url()?>assets/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url()?>assets/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url()?>assets/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url()?>assets/raphael/raphael-min.js"></script>
    <script src="<?=base_url()?>assets/morrisjs/morris.min.js"></script>
    <script src="<?=base_url()?>assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>

</body>

</html>
