    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Update Perawatan Mobil</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive p-0" style="margin-left: 330px;"">
        <div class="col-md-8">
        </br>
        <?php
            $hidden = ['perawatanedit'=>$perawatanedit->id]
        ?>
        <?php echo form_open('jenis_perawatan/save', '', $hidden);?>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                <input id="nim" name="nama" value="<?=$perawatanedit->nama?>" type="text" class="form-control">
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

        <!-- /.card-footer-->
      </div>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  
