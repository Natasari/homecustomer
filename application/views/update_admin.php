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

<body>

    <div id="wrapper">
        <?php $this->load->view('header_admin')?>
        <?php $this->load->view('sidebar_admin')?>    
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Admin</h1>  
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        <div class="row">
                <div class="col-lg-6">
                    <div style="width:500px;" class="panel panel-default" >
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div style="width:100%;" class="col-lg-10">
                                    <form role="form" method="post" action="<?php echo site_url('admin/update_insert') ?>">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" id="disabledInput" type="hidden" name="username" placeholder="Username" value="<?php echo $USERNAME;?>">
                                            <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled value="<?php echo $USERNAME;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="password" placeholder="New Password" value="<?php echo set_value('password');?>">
                                        </div>
                                        <div class="kotak"><?php echo form_error('password'); ?></div>
                                        <div class="form-group">
                                            <label>Re-type Password</label>
                                            <input class="form-control" type="password" name="rpassword" placeholder="New Password" value="<?php echo set_value('rpassword');?>">
                                        </div>
                                        <div class="kotak"><?php echo form_error('rpassword'); ?></div> 
                                        <button type="submit" style="float:right;" class="btn btn-default">Submit</button>
                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
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
    

</body>

</html>
