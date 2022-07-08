  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('Dashboard/index')?>" class="brand-link">
      <img src="<?php echo base_url('dist2/images/logo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text font-weight-light">.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('dist/img/user1-128x128.jpg')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo site_url('Dashboard/index')?>" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo site_url('dashboard/index')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-window-restore"></i>
              <p>
                Kelola Sewa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url ('index.php/mobil')?>" class="nav-link">
                  <i class="nav-icon fas fa-car"></i>
                  <p>Kelola Mobil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url ('index.php/merk')?>" class="nav-link">
                  <i class="nav-icon fas fa-receipt"></i>
                  <p>Merk Mobil</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-car"></i>
              <p>
                Perawatan Mobil
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url ('jenis_perawatan/index')?>" class="nav-link">
                  <i class="nav-icon fas fa-car-side"></i>
                  <p>Jenis Perawatan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url ('perawatan/index')?>" class="nav-link">
                  <i class="nav-icon fas fa-car"></i>
                  <p>Perawatan Kendaraan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url ('user/index')?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
              <p>Kelola User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url ('index.php/login')?>" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>