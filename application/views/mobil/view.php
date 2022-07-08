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
          <h3 class="card-title">Data Mobil</h3>

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
                  <tr><td>No</td><td><?= $mobil->id?></td></tr>
                    <tr><td>Nomor Polisi</td><td><?= $mobil->nopol?></td></tr>
                    <tr><td>Warna</td><td><?= $mobil->warna?></td></tr>
                    <tr><td>Biaya Sewa</td><td><?= $mobil->biaya_sewa?></td></tr>
                    <tr><td>Deksripsi</td><td><?= $mobil->deskripsi?></td></tr>
                    <tr><td>CC</td><td><?= $mobil->cc?></td></tr>
                    <tr><td>Tahun</td><td><?= $mobil->tahun?></td></tr>
                    <tr><td>Merk_id</td><td><?= $mobil->merk_id?></td></tr>
                    <tr><td>Foto</td><td><?= $mobil->foto?></td></tr>
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