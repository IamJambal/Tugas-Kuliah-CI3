  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>admin/dashboard" class="brand-link">
      <img src="<?= base_url() ?>assets/dist/img/favicon.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">STEKOM.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>assets/dist/img/toddy.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Toddy Inggil Arifiandi</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <!-- Nav ITEMNYA -->
          <li class="nav-item">
            <a href="<?= base_url() ?>admin/dashboard " class="nav-link">
              <i class="nav-icon fas fa-tv"></i>
              <p> Dashboard</p>
            </a>
          </li>
          <!-- End NAV ITEM -->
          <!-- Nav ITEMNYA -->
          <li class="nav-item">
            <a href="<?= base_url() ?>mahasiswa" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p> Mahasiswa</p>
            </a>
          </li>
          <!-- End NAV ITEM -->
          <!-- Nav ITEMNYA -->
          <li class="nav-item">
            <a href="<?= base_url() ?>dosen" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p> Dosen</p>
            </a>
          </li>
          <!-- End NAV ITEM -->
          <!-- Nav ITEMNYA -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p> Jadwal Kuliah</p>
            </a>
          </li>
          <!-- End NAV ITEM -->
          <!-- Nav ITEMNYA -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p> Jurusan</p>
            </a>
          </li>
          <!-- End NAV ITEM -->
          <li class="nav-item my-2">
          <h6 class="ml-4 mt-2 text-white opacity-6 " >Halaman Akun</h6>
          </li>
          <!-- Nav ITEMNYA -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p> Ganti Password</p>
            </a>
          </li>
          <!-- End NAV ITEM -->
          <!-- Nav ITEMNYA -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-window-close"></i>
              <p> Keluar</p>
            </a>
          </li>
          <!-- End NAV ITEM -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
