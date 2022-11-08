<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Arsip Surat</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php if (!empty(session())) { ?><?php } ?>
<div class="flash-data" data-flashdata="<?= session()->getflashdata('flash') ?>"></div>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <span class="brand-text font-weight-light pl-4">Menu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?= base_url() ?>/" class="nav-link">
              <i class="nav-icon fa fa-star"></i>
              <p>
                Arsip
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url() ?>/about" class="nav-link">
              <i class="nav-icon fa fa-exclamation-triangle"></i>
              <p>
                About
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper"  style="height: 859px;">
    <!-- Content Header (Page header) -->
    <div class="content-header px-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 style="font-size: 45px;" class="mb-2">Arsip Surat >> Lihat</h1>
          </div><!-- /.col -->
          <div style="font-size: 17px;" class="col-sm-8">
            <div class="row">
                <div class="col-md-2">Nomor</div>
                <div class="col-md-1">:</div>
                <div class="col-md-8"><?= $database[0]['no_surat'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2">Kategori</div>
                <div class="col-md-1">:</div>
                <div class="col-md-8"><?= $database[0]['kategori'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2">Judul</div>
                <div class="col-md-1">:</div>
                <div class="col-md-8"><?= $database[0]['judul'] ?></div>
            </div>
            <div class="row">
                <div class="col-md-2">Waktu</div>
                <div class="col-md-1">:</div>
                <div class="col-md-8"><?= $database[0]['waktu_arsip'] ?></div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content px-4">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                <embed type="application/pdf" src="<?=base_url()?>/dokumen/<?= $database[0]['file_arsip'] ?>" width="100%" height="545px"></embed>
              </div>
          </div>
        <div class="row">
            <div class="col-md-4 d-flex justify-content-between pt-3 pb-4">
                <a href="<?= base_url() ?>/" class="btn btn-primary"><< Kembali</a>
                <a href="<?= base_url() ?>/dokumen/<?= $database[0]['file_arsip'] ?>" class="btn btn-primary" download>Unduh</a>
                <a href="<?= base_url() ?>/edit-arsip?id=<?= $database[0]['id'] ?>" class="btn btn-primary">Edit/Ganti File</a>
            </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/dist/js/adminlte.js"></script>
<script src="<?= base_url() ?>/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<script>
  const flashData = $('.flash-data').data('flashdata');
  if (flashData) {
    if (flashData == "berhasil") {
      Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        showConfirmButton: false,
        timer: 2000
      })
    }
  }
</script>
</body>
</html>
