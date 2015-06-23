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
</head>

<body>

    <div id="wrapper">
    	
        <?php $this->load->view('header_admin')?>
        <?php $this->load->view('sidebar_admin')?>    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Home Admin</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SUMMARY CLUSTER WITEL SIDOARJO
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <label>Selects</label>
                                    <form id="myform" role="form" method="post" action="<?php echo site_url('admin/home_admin')?>">
                                        <select name="waktu" id="waktu" class="form-control" style="width:30%;">
                                            <?php 
                                            $awal = 2015;
                                            $tahun = date('Y');
                                            for($a=0; $a<=($tahun-$awal); $a++){
                                                $awal = $awal + $a;
                                                for ($m=1; $m<=12; $m++) { 
                                                        echo '  <option value="' . $m .' '. $awal.' " if($sel_mnth == $m) echo "selected=\'selected\'";>' . date('M', mktime(0,0,0,$m)) . ' '. $awal . '</option>' . PHP_EOL;
                                                }
                                            }
                                            ?>
                                        </select>
                                        <select id="terms" name="terms" class="form-control" style="width:30%;margin-top:10px;">
                                            <option value="all">All</option>
                                            <option value="PL">PERSONAL LINE</option>
                                            <option value="BL">BUSSINESS LINE</option>
                                            <option value="CL">CORPORATE LINE</option>
                                        </select>
                                            <button type="submit" style="float:left; margin-top:15px; margin-bottom:15px;" class="btn btn-primary">Show Report</button>
                                    </form>
                                </div>

                                <table style="text-align:center;" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align:middle; text-align:center;" rowspan="2" text-align="middle">Area </th>
                                            <th style="vertical-align:middle; text-align:center;" rowspan="2">Jumlah cluster</th>
                                            <th style="vertical-align:middle; text-align:center;" rowspan="2">Jumlah bangunan</th>
                                            <th colspan="3" style="text-align:center;">Customer </th> 
                                            <th colspan="3" style="text-align:center;">Revenue </th>
                                        </tr>
                                            <tr>
                                                <th style="text-align:center;">Wireline</th> <th style="text-align:center;">Internet</th> <th style="text-align:center;">Total</th>  
                                                <th style="text-align:center;">Wireline</th> <th style="text-align:center;">Internet</th> <th style="text-align:center;" >Total</th>  
                                            </tr>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                       foreach ($hasilcluster as $products)
                                        {
                                        ?>
                                            <tr>
                                                <td><?php echo $products->KANDATEL; ?></td>
                                                <td><?php echo $products->JUMLAH; ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
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
    <script type="text/javascript">
        document.getElementById('waktu').value = "<?php echo $_POST['waktu'];?>";
        document.getElementById('terms').value = "<?php echo $_POST['terms'];?>";
    </script>

</body>

</html>
