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
<style type="text/css">
.search{
    float: left;
    margin-top: 20px;
    margin-bottom: 5px;
}
.top{
    float: right;
    margin-top: 20px;
    margin-bottom: 5px;
}
.table{

}
.edit{
    text-align: center;
    width: 130px;
}
.editButton{
    text-align: center;
}

.bottom{
    float: right;
}


</style>

<body>

    <div id="wrapper">
        <?php $this->load->view('header_admin')?>
        <?php $this->load->view('sidebar_admin')?>    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Standarisasi Alamat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Daftar Alamat
                        </div>
                        <!-- /.panel-heading -->

                        <div class="panel-body">
                            <div class="form-group">
                                    <label>Selects</label>
                                    <form id="myform" role="form" method="post" action="<?php echo site_url('admin/Standarisasi')?>">
                                        <div style="float:left;width:24%;">
                                            <select name="waktu" id="waktu" class="form-control" style=";">
                                            <?php 
                                            $awal = 2014;
                                            $tahun = date('Y');
                                            for($a=0; $a<=($tahun-$awal); $a++){
                                                $awal = $awal + $a;
                                                for ($m=1; $m<=12; $m++) { 
                                                        echo '  <option value="' . $m .' '. $awal.' " if($sel_mnth == $m) echo "selected=\'selected\'";>' . date('M', mktime(0,0,0,$m)) . ' '. $awal . '</option>' . PHP_EOL;
                                                }
                                            }
                                            ?>
                                            </select>
                                        </div>
                                        <div style="float:left;">
                                            <button type="submit" style="float:left;margin-left:15px" class="btn btn-primary">Show</button>
                                        </div>
                                    </form>
                                </div>
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NCLI</th>
                                            <th>Nama</th>
                                            <th>Jalan</th>
                                            <th>No</th>
                                            <th>Kelurahan</th>
                                            <th>Kota</th>
                                            <th class="edit">Edit</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        foreach ($listuser as $products)
                                        {
                                        ?>
                                            <tr>
                                                <td><?php echo $products->NCLI; ?></td>
                                                <td><?php echo $products->NAMA; ?></td>
                                                <td><?php echo $products->JALAN; ?></td>
                                                <td><?php echo $products->NO_JALAN; ?></td>
                                                <td><?php echo $products->KELURAHAN; ?></td>
                                                <td><?php echo $products->KOTA; ?></td>
                                                <td class="editButton">
                                                    <form action="<?=base_url()?>index.php/admin/update_standarisasi" method="post">
                                                        <input type="hidden" name="ncli" value="<?php echo $products->NCLI;?>">
                                                        <input type="hidden" name="nama" value="<?php echo $products->NAMA;?>">
                                                        <input type="hidden" name="jalan" value="<?php echo $products->JALAN;?>">
                                                        <input type="hidden" name="no_jalan" value="<?php echo $products->NO_JALAN;?>">
                                                        <input type="hidden" name="kelurahan" value="<?php echo $products->KELURAHAN;?>">
                                                        <input type="hidden" name="kota" value="<?php echo $products->KOTA;?>">
                                                        <button type="submit" class="btn btn-warning">Edit</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tr></tbody>
                                </table>
                            </div>                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            </div>
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

    <!-- DataTables JavaScript -->
    <script src="<?=base_url()?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">'
        });
    });
    </script>

</body>

</html>
