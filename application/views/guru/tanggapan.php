<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title;?></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() . 'assets/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() . 'assets/css/sb-admin-2.min.css' ?>" rel="stylesheet">

  
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"><b><?php echo $this->session->userdata('nama');?></b></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="<?php echo site_url('Homepage/home_guru'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
  </div>


  

  <!-- Heading -->
  <div class="sidebar-heading">
    Data
  </div>

  <!-- Nav Item - Charts -->
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('Homepage/'); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Kunjungan</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

      <!-- Sidebar Toggle (Topbar) -->
      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
      </button>

      <!-- Topbar Search -->
      <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
          <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
          </a>
          <!-- Dropdown - Messages -->
          <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b><?php echo $this->session->userdata('nama');?></b></span>
            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Logout
            </a>
          </div>
        </li>

      </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->

      <div>
        <?php foreach($kunjungan as $edit) { ?>
        <form action="<?php echo site_url('Homepage/tanggapan_guru'); ?>" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="id_kunjung" value="<?php echo $edit->id_kunjung ?>">
            <div class="row">
                <div class="col">
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Nama Siswa</label>
                    <div class="col-sm-6">
                    <input type="text" name="nama"  value="<?php echo $edit->nama_siswa ?>" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Kelas</label>
                    <div class="col-sm-6">
                    <input type="text" name="kls" value="<?php echo $edit->kelas ?>" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">No Absen</label>
                    <div class="col-sm-6">
                    <input type="text" name="noabsen" value="<?php echo $edit->no_absen ?>" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Tanggal Kunjungan</label>
                    <div class="col-sm-6">
                    <input type="date" name="tgl" value="<?php echo $edit->tgl_kunjungan ?>" class="form-control" style="margin-top: -5px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Keperluan Ke Sekolah</label>
                    <div class="col-sm-6">
                    <textarea name="keper" value="<?php echo $edit->keperluan ?>" class="form-control" rows="7"></textarea><br>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Keterangan:</label>
                        <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ket" value="1">Sehat
                </label>
            </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="ket" value="2">Tidak Sehat
                    </label>
                </div>
            </div>
                <div class="form-group row">
                        <label class="col-sm-2" style="margin-left: 10%; font-size: 20px;">Status:</label>
                            <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sta" value="ACC">ACC
                    </label>
                </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sta" value="DECLINE">DECLINE
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7">
                    <button class="btn btn-info" type="submit" style="margin-left: 1100px; width: 20%; font-size: 20px; font-family: candara;">Submit form</button>
                    </div>
                </div>

                </div>
            </div>
        </form>
        <?php } ?>
    </div>



    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2020</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <a class="btn btn-primary" href="<?php echo site_url('Homepage/logout'); ?>">Logout</a>
    </div>
  </div>
</div>
</div>



  <!-- Bootstrap core JavaScript-->
  <script src=" <?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src=" <?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src=" <?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>" src=""></script>

  <!-- Custom scripts for all pages-->
  <script src=" <?= base_url('assets/js/sb-admin-2.min.js') ?>" src=""></script>

</body>

</html>
