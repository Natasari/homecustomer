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
<<<<<<< HEAD
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<style type="text/css">
.search{
    float: left;
}
.top{
    float: right;
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
=======
    <link href="<?=base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"></head>
>>>>>>> 0172b05c60b3e8aafbacd04849715814baa7925a

<body>
    <div id="wrapper">
        <?php $this->load->view('header_admin')?>
        <?php $this->load->view('sidebar_admin')?>    
        <div id="page-wrapper">
             <h2 class="page-header">List User &nbsp&nbsp&nbsp <a href="<?=base_url()?>index.php/admin/tambah"><button type="button" class="btn btn-primary">Add User</button></a></h2>
            <div class="row">

                    
                <div class="col-lg-12">
<<<<<<< HEAD
                    <h1 class="page-header">Manage Admin</h1>  
                            <a href="<?=base_url()?>index.php/admin/tambah">
                                <button type="button" style="margin-bottom:15px;float:left;" class="btn btn-primary">Add User</button>
                            </a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tabel Daftar Admin
=======
                   <div class="panel panel-default">
                        <div class="panel-heading">
>>>>>>> 0172b05c60b3e8aafbacd04849715814baa7925a
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
<<<<<<< HEAD
                                            <th>User Admin</th>
                                            <th>Previlidge</th>
                                            <th class="edit">Edit</th>
=======
                                            <th>Username</th>
                                            <th>Jabatan</th>
                                            <th>Blablabla</th>
                                            <th>Blablabla</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
>>>>>>> 0172b05c60b3e8aafbacd04849715814baa7925a
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
<<<<<<< HEAD
                                                <td class="editButton">
                                                    <form action="<?=base_url()?>index.php/admin/update" method="post">
                                                        <input type="hidden" name="username" value="<?php echo $products->USERNAME;?>">
                                                        <button type="submit" class="btn btn-warning">Edit</button>
                                                    </form>
                                                </td>
=======
                                                <td><?php echo 'a' ?></td>
                                                <td><?php echo 'b' ?></td>
                                                <td><a href="<?=base_url()?>index.php/admin/edit"><button type="button" class="btn btn-warning">Edit</button></td>
                                                <td><a href="<?=base_url()?>index.php/admin/delete"><button type="button" class="btn btn-danger">Delete</button></td>
>>>>>>> 0172b05c60b3e8aafbacd04849715814baa7925a
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tr></tbody>
                                        <?php $id=$products->USERNAME; ?>
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
            "dom":' <"search"f><"top"l>rt<"bottom"ip><"clear">'
        });
    });
    </script>

</body>

</html>
