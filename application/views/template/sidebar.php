<?php 
$menu = array(
    'dashboard' => "dashboard", 
    'user' => "user", 
    'pelanggan' => "pelanggan", 
    'keuangan' => "keuangan",
    'pegawai' => "pegawai"
    );
 ?>
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <?php foreach ($menu as $nm => $link): ?>
                
            <li class="treeview">
                <a href="#">
                    <span><?php echo strtoupper($nm); ?></span>
                    <span class="label label-primary pull-right">-></span>
                </a>
                <?php if ($nm=="pelanggan") {
                    echo "
                        <ul class='treeview-menu'>
                            <li><a href=".base_url('pelanggan/tambah_pelanggan')."><i class='fa fa-plus'></i>Tambah Pelanggan</a></li>"."
                            <li><a href=".base_url('pelanggan/data_pelanggan')."><i class='fa fa-table'></i>Data Pelanggan</a></li>
                        </ul>";
                    
                } ?>               
            </li>
            <?php endforeach ?>        
    </section>
    <!-- /.sidebar -->
</aside>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">