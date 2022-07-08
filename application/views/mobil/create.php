<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <h1>Form Kelola Data Perawatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
          <h3 class="card-title">Form Tambah Perawatan Mobil</h3>

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
        <div class="col-md-12">
        <?php echo form_open('mobil/save');?>
          <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">No Polisi</label> 
            <div class="col-8">
              <input id="nim" name="nopol"  type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Warna Mobil</label> 
            <div class="col-8">
              <input id="nama" name="warna"  type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Biaya Sewa</label> 
            <div class="col-8">
              <input id="tmp_lahir" name="biaya_sewa"  type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Deskripsi</label> 
            <div class="col-8">
              <input id="tgl_lahir" name="deskripsi"  type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">CC Mobil</label> 
            <div class="col-8">
              <input id="ipk" name="cc"  type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">Tahun</label> 
            <div class="col-8">
              <input id="ipk" name="tahun"  type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">Merk ID</label> 
            <div class="col-8">
              <input id="ipk" name="merk_id"  type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">Foto</label> 
            <div class="col-8">
              <input id="ipk" name="foto"  type="text" class="form-control">
            </div>
          </div>
            <br>

          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        <?php echo form_close();?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->    