<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Perawatan Mobil</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <div class="row mb-2">
          <div class="col-sm-8">

              <table class="table table-bordered">
                <tbody>
                    <tr><td>No</td><td><?= $perawatan_mobil->id?></td></tr>
                    <tr><td>Tanggal</td><td><?= $perawatan_mobil->tanggal?></td></tr>
                    <tr><td>Biaya</td><td><?= $perawatan_mobil->biaya?></td></tr>
                    <tr><td>KM Mobil</td><td><?= $perawatan_mobil->km_mobil?></td></tr>
                    <tr><td>Deskripsi</td><td><?= $perawatan_mobil->deskripsi?></td></tr>
                    <tr><td>Mobil ID</td><td><?= $perawatan_mobil->mobil_id?></td></tr>
                    <tr><td>Jenis Perawatan ID</td><td><?= $perawatan_mobil->jenis_perawatan_id?></td></tr>
                </tbody>
              </table>  

          </div>
          <div class="col-sm-4">

          </div>
        </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->