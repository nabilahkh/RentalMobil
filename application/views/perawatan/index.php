<?php
  if($this->session->userdata('ROLE')!='administrator'){
    redirect(base_url().'index.php/dashboard');
  }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Daftar Perawatan Mobil</h1>
        </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
                    <li class="breadcrumb-item active">Daftar PerawatanMobil</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kelola Data Perawatan Mobil</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm">
                      <a class="btn btn-success btn-sm" href="create" role="button"><i class="fas fa-plus-circle"></i> Tambah Data</a>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 330px;">
                <table class="table table-head-fixed text-nowrap">
                
                <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Biaya</th>
                                <th scope="col">KM Mobil</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Mobil ID</th>
                                <th scope="col">Jenis Perawatan ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $number = 1;
                                foreach($list_rawatmobil as $rawatmobil) {
                            ?>

                            <tr>
                                <th scope="row"><?=$number?></th>
                                <td><?=$rawatmobil->id?></td>
                                <td><?=$rawatmobil->tanggal?></td>
                                <td><?=$rawatmobil->biaya?></td>
                                <td><?=$rawatmobil->km_mobil?></td>
                                <td><?=$rawatmobil->deskripsi?></td>
                                <td><?=$rawatmobil->mobil_id?></td>
                                <td><?=$rawatmobil->jenis_perawatan_id?></td>
                                <td>
                                    <a href="<?php echo base_url();?>index.php/perawatan/view?id=<?=$rawatmobil->id?>">
                                        <button class="btn btn-success btn-xs rounded-5" type="button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button>
                                    </a>
                                    <a href="<?php echo base_url();?>index.php/perawatan/edit?id=<?=$rawatmobil->id?>">
                                        <button class="btn btn-warning btn-xs rounded-5" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit" style="color:white;"></i></button>
                                    </a>
                                    <a href="<?php echo base_url();?>index.php/perawatan/delete?id=<?=$rawatmobil->id?>"
                                    onclick="if(!confirm('Anda Yakin Akan Menghapus Data Prodi dengan kode : <?=$rawatmobil->id?>?')){return false}">
                                        <button class="btn btn-danger btn-xs rounded-5" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" style="color:white;"></i></button>
                                    </a>
                                </td>
                            </tr>

                            <?php
                                $number++;
                                }
                            ?>
                        </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </section>
    <!-- /.content -->
</div>