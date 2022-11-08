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
            <a href="<?= base_url() ?>/about" class="nav-link active">
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

  <div class="content-wrapper" style="height: 609px;">
    <section class="content">
      <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-12 p-0">
                  <h1 style="font-size: 45px;" class="mb-2">About</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?= base_url() ?>/profil/2031730019.jpg" width="150" class="img img-thumbnail">
                    </div>
                    <div class="col-md-8">
                        <h4>Aplikasi ini dibuat oleh :</h4>
                        <div class="row">
                            <div class="col-md-2">Nama</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-8">Ahmad Choirul Huda</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">NIM</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-8">2031730019</div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">Tanggal</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-8">6 November 2022</div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
      </div>
    </section>
  </div>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/dist/js/adminlte.js"></script>

</body>
</html>
