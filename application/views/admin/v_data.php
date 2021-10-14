<?php $this->load->view('admin/v_header'); ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#Modaldata"><span class="fa fa-plus"></span> Tambah Data</a>
            </div>
          <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-striped" style="font-size:12px;">
                  <thead>
                  <tr>
  					  <th style="width:70px;">#</th>
                      <th>Sambutan</th>

                      <th style="text-align:right;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($data as $dt){?>
                    
                 
				
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $dt['data_sambutan'];?></td>

                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#Editdata<?php echo $dt['data_id'];?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $dt['data_id'];?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
                <?php $no++; ?>
                 <?php } ?>
                </tbody>
              </table>
            </div>
      
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!--Modal Add data-->
<!-- Tambah -->

<div class="modal fade" id="Modaldata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah data</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/data/simpan')?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="eIsi" class="col-sm-2 control-label">Sambutan</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" name="sambutan" value="Kata Sambutan"> </textarea>
                      </div>
                    </div>

<!--                 <div class="form-group">
                    <label for="eIsi" class="col-sm-2 control-label">Visi</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" name="visi" value ="Visi"> </textarea>
                      </div>
                    </div>
                <div class="form-group">
                    <label for="eIsi" class="col-sm-2 control-label">Misi</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" name="misi" value="Misi "> </textarea>
                      </div>
                    </div> -->
                 
              <!-- /.box-body -->
              <!-- /.box-footer -->
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Simpan" name="submit">
      </div>
      </form>
    </div>
  </div>
</div>
</div>

<?php foreach ($data as $dt){?>
<!-- Modal Edit data -->
<div class="modal fade" id="Editdata<?php echo $dt['data_id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit data</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/data/edit_data'?>" method="post">
              <div class="form-group">
                    <label for="eIsi" class="col-sm-2 control-label">Sambutan</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" name="sambutan"> <?php echo $dt['data_sambutan'] ?></textarea>
                      </div>
                    </div>
                <input type="hidden" name="id" value="<?php echo $dt['data_id'];?>"/> 
                  <!-- <div class="form-group">
                      <label for="eIsi" class="col-sm-2 control-label">Visi</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" rows="2" name="visi"> <?php echo $dt['data_visi'] ?></textarea>
                        </div>
                      </div>
                  <div class="form-group">
                      <label for="eIsi" class="col-sm-2 control-label">Misi</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" rows="2" name="misi"> <?php echo $dt['data_misi'] ?></textarea>
                        </div>
                      </div> -->
                 
              <!-- /.box-body -->
              <!-- /.box-footer -->
            
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update">
      </div>
      </form>
    </div>
  </div>
</div>

<?php } ?>
<?php foreach ($data as $dt){?>

<!-- Modal Hapus -->
<div class="modal fade" id="ModalHapus<?php echo $dt['data_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus data</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/data/hapus_data'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
              <input type="hidden" name="id" value="<?php echo $dt['data_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus data <b><?php echo $dt['data_sambutan'];?></b> ?</p>
                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary btn-flat" id="simpan" value="Hapus">
                    </div>
                    </form>
                </div>
            </div>
        </div>
<?php } ?>

<?php $this->load->view('admin/v_footer'); ?>