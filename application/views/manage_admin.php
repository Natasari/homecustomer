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
                    <h1 class="page-header">Manage Admin</h1>  <label>
                                                    <a href="<?=base_url()?>index.php/admin/tambah"><button type="button" class="btn btn-primary">Add User</button></a>
                                                </label>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <th>Blablabla</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>    
                                    <tr class="gradeA odd" role="row">
                                    <?php

                                        foreach ($listuser as $products)
                                        {
                                           
                                        ?>
                                            <tr>
                                                <td><?php echo $products->USERNAME; ?></td>
                                                <td><?php echo $products->PREV; ?></td>
                                                <td><?php echo 'terserah' ?></td>
                                                <td><button type="button" class="btn btn-warning">Edit</button></td>
                                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tr></tbody>
                                </table>
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

    <!-- DataTables JavaScript -->
    <script src="<?=base_url()?>assets/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url()?>assets/js/sb-admin-2.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
