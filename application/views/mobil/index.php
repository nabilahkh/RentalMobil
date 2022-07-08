<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Daftar Persediaan Mobil</h1>
        </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url ('index.php')?>">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Mobil</li>
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
                <h3 class="card-title">Kelola Data Persediaan Mobil</h3>

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
                            <th scope="col">No</th>
                            <th scope="col">Nomor Polisi</th>
                            <th scope="col">Warna</th>
                            <th scope="col">Biaya Sewa</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">CC</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Merk_ID</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $nomor = 1;
                            foreach($list_mobil as $mobil){
                        ?>

                        <tr>
                            <td><?= $nomor ?></th>
                            <td><?= $mobil->nopol ?></td>
                            <td><?= $mobil->warna ?></td>
                            <td><?= $mobil->biaya_sewa ?></td>
                            <td><?= $mobil->deskripsi ?></td>
                            <td><?= $mobil->cc ?></td>
                            <td><?= $mobil->tahun ?></td>
                            <td><?= $mobil->merk_id ?></td>
                            <td>
                              <div class="container">
                                <div class="col-md-4 px-0">

                                    <?php 
                                        $filegambar = base_url('/uploads/'.$mobil->foto);

                                        $array = get_headers($filegambar);
                                        $string = $array[0];
                                        if(strpos($string, "200"))
                                        {
                                            echo '<img src="'.$filegambar.'" alt="foto" class="img-fluid"> ';
                                        }
                                        else
                                        {
                                            echo '<img src"'.base_url('/dist2/images/nophoto.png').'" alt="foto1" class="img-fluid">';
                                        }
                                    ?>

                                    <br>
                                    <br>
                                    <?php echo form_open_multipart('mobil/upload');?>
                                        <input type="hidden" name="nopol" value="<?=$mobil->nopol?>">
                                        <input type="file" name="fotomobil">
                                        <br>
                                        <br>
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    <?php echo form_close()?>

                                </div>
                              </div>

                            </td>
                            <td>
                                <a href="mobil/view?id=<?=$mobil->id?>">
                                    <button class="btn btn-success btn-xs rounded-5" type="button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button>
                                </a>
                                <a href="mobil/edit?id=<?=$mobil->id?>">
                                    <button class="btn btn-warning btn-xs rounded-5" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit" style="color:white;"></i></button>
                                </a>
                                <a href="mobil/delete?id=<?=$mobil->id?>"
                                onclick="if(!confirm('Anda Yakin Akan Menghapus Data Prodi dengan kode : <?=$mobil->nopol?>?')){return false}">
                                    <button class="btn btn-danger btn-xs rounded-5" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash" style="color:white;"></i></button>
                                </a>
                            </td>
                        </tr>

                        <?php
                            $nomor++;
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