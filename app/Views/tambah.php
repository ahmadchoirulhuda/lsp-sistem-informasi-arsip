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
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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

  <div class="content-wrapper"  style="height: 609px;">
    <!-- Content Header (Page header) -->
    <div class="content-header px-4">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1 style="font-size: 45px;" class="mb-2">Arsip Surat >> Unggah</h1>
          </div><!-- /.col -->
          <div style="font-size: 17px;" class="col-sm-8">
            <p class="mb-0">Unggah surat yang telah terbit pada form ini untuk diterbitkan.</p>
            <p class="mb-0">Catatan : </p>
            <p class="mb-0 pl-4">Gunakan file berformat PDF</p>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content px-4">
      <div class="container-fluid">
        <form action="<?= base_url() ?>/simpan-arsip" method="POST" enctype="multipart/form-data">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="mb-0" style="padding-top:6px;">Nomor Surat</label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" name="no_surat" class="form-control" placeholder="Nomor Surat" required>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="mb-0" style="padding-top:6px;">Kategori</label>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <div class="form-group">
                        <select name="kategori" class="form-control select2bs4" required>
                            <option value="undangan">Undangan</option>
                            <option value="pengumuman">Pengumuman</option>
                            <option value="nota dinas">Nota Dinas</option>
                            <option value="pemberitahuan">Pemberitahuan</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
            <!-- /.col-md-6 -->
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="mb-0" style="padding-top:6px;">Judul</label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-md-3">
                <div class="form-group">
                    <label class="mb-0" style="padding-top:6px;">File Surat (PDF)</label>
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <div class="input-group">
                      <div class="custom-file">
                          <input name="file" type="file" accept=".pdf" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                  </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <div class="row">
              <div class="col-md-3 d-flex justify-content-between pt-3">
                  <a href="<?= base_url() ?>/" class="btn btn-primary"><< Kembali</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
          </div>
        </form>
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
<script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "searching": false, "paging": false, "info": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  $(function () {
    bsCustomFileInput.init();
  });
</script>
</body>
</html>
