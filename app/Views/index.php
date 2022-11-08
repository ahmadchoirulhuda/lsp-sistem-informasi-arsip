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
<?php if (!empty(session())) { ?><?php } ?>
<div class="flash-data" data-flashdata="<?= session()->getflashdata('flash') ?>"></div>
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
            <a href="<?= base_url() ?>/" class="nav-link active">
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

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-12 p-0">
                  <h1 style="font-size: 45px;" class="mb-2">Arsip Surat</h1>
                </div><!-- /.col -->
                <div style="font-size: 17px;" class="col-sm-8 p-0">
                  <p class="mb-0">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</p>
                  <p class="mb-0">Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
              <div class="row mb-4">
                  <div style="font-size: 17px;" class="col-md-2">
                      Cari Surat :
                  </div>
                  <div class="col-md-8">
                      <form action="<?= base_url() ?>/cari" method="POST" enctype="multipart/form-data">
                          <div class="input-group">
                              <input type="search" name="cari" class="form-control form-control-lg" placeholder="Search . . .">
                              <div class="input-group-append">
                                  <button type="submit" class="btn btn-lg btn-default">
                                      Cari
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th width="15%">Nomor Surat</th>
                        <th width="13%">Kategori</th>
                        <th>Judul</th>
                        <th width="19%">Waktu Pengarsipan</th>
                        <th width="27%">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php foreach($database as $data){ ?>
                      <tr>
                        <td><?= $data['no_surat'] ?></td>
                        <td><?= $data['kategori'] ?></td>
                        <td><?= $data['judul'] ?></td>
                        <td><?= $data['waktu_arsip'] ?></td>
                        <td class="text-center">
                            <a id="btnHapus" href="<?= base_url() ?>/hapus?id=<?= $data['id'] ?>" class="btn btn-danger">Hapus</a>
                            <a href="<?= base_url() ?>/dokumen/<?= $data['file_arsip'] ?>" class="btn btn-warning" download>Unduh</a>
                            <a href="<?= base_url() ?>/lihat?id=<?= $data['id'] ?>" class="btn btn-primary">Lihat >></a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              <div class="d-flex justify-content-start pt-3 pb-4">
                  <a href="arsip-surat" class="btn btn-primary">Arsipkan Surat</a>
              </div>
              <!-- /.row -->
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
<script src="<?= base_url() ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url() ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
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
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "searching": false, "paging": false, "info": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });

  $("a#btnHapus").click(function(e) {
    e.preventDefault();
    const href = $(this).attr("href");
    Swal.fire({
      text: "Apakah anda yakin ingin menghapus arsip surat ini ?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yakin'
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      }
    })
  });
  
</script>
</body>
</html>
