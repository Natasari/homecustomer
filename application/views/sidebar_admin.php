<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?=base_url()?>index.php/admin/manage_admin"
                                <?php
                                   if(strpos(current_url(), site_url("manage_admin"))!== false){
                                    echo 'class="active';
                                   } 
                                ?>
                                ><i class="fa fa-user fa-fw"></i> Manage Admin</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Profile Cluster<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>index.php/admin/profile"
                                        <?php
                                           if(strpos(current_url(), site_url("profile"))!== false){
                                            echo 'class="active';
                                           } 
                                        ?>
                                        >Profile</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/admin/denah_cluster"
                                        <?php
                                           if(strpos(current_url(), site_url("denah_cluster"))!== false){
                                            echo 'class="active';
                                           } 
                                        ?>
                                        >Denah Cluster</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/admin/data_teknik"
                                        <?php
                                           if(strpos(current_url(), site_url("data_teknik"))!== false){
                                            echo 'class="active';
                                           } 
                                        ?>
                                        >Data Teknik</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/admin/pelanggan_eksisting"
                                        <?php
                                           if(strpos(current_url(), site_url("pelanggan_eksisting"))!== false){
                                            echo 'class="active';
                                           } 
                                        ?>
                                        >Pelanggan Eksisting</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                       
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Revenue<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?=base_url()?>index.php/admin/revenue_per_bulan">Revenue per Bulan</a>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>index.php/admin/rekap_revenue">Rekap Revenue</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>
