<aside class="main-sidebar sidebar-dark-primary elevation-4" style="width:260px">
    <a href="<?php echo base_url('/'); ?>" class="brand-link">
        <img src="<?php echo base_url('themes/dist/img/bis.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Rental Bus Pariwisata</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('themes/dist/img/anan.jpg'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Afnan Ahsana Syadida BUS</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('/'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('data-pelanggan'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Pelanggan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('data-bus'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>Data Bus</p>
                    </a>
                </li>
                <li class="nav-header">ACCOUNT</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('/logout'); ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>