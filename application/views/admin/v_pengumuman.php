<?php $this->load->view('admin/v_header'); ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pengumuman
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Pengumuman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#ModalPengumuman"><span class="fa fa-plus"></span>Tambah Pengumuman</a>
            </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-striped" style="font-size:12px;">
                  <thead>
                  <tr>
  					          <th style="width:70px;">#</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Tanggal Post</th>
                      <th>Penulis</th>
                      <th style="text-align:right;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($pengumuman as $p){?>
                    
                 
				
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $p['pengumuman_judul'];?></td>
                  <td><?php echo $p['pengumuman_isi'];?></td>
                  <td><?php echo $p['pengumuman_tanggal']?></td>
                  <td><?php echo $p['pengumuman_author']?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#EditPengumuman<?php echo $p['pengumuman_id'];?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $p['pengumuman_id'];?>"><span class="fa fa-trash"></span></a>
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

  <!--Modal Add Pengumuman-->
<!-- Tambah -->
<div class="modal fade" id="ModalPengumuman" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/pengumuman/simpan') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Judul" placeholder="Judul" name="judul">
                  </div>
                </div>

                <div class="form-group">
                    <label for="Isi" class="col-sm-2 control-label">Isi</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" placeholder="Isikan. . ." name="isi"></textarea>
                      </div>
                    </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Penulis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Judul" placeholder="Penulis" name="author">
                  </div>
                </div>
                 
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

<?php foreach ($pengumuman as $p){?>
<!-- Modal Edit Pengumuman -->
<div class="modal fade" id="EditPengumuman<?php echo $p['pengumuman_id']  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Edit Pengumuman</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/pengumuman/edit_pengumuman'?>" method="post">
              <div class="form-group">
                  <label for="eJudul" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eJudul" name="judul" value="<?php echo $p['pengumuman_judul'] ?>">
                  </div>
                </div>
                <input type="hidden" name="id" value="<?php echo $p['pengumuman_id'];?>"/> 
                <div class="form-group">
                    <label for="eIsi" class="col-sm-2 control-label">Isi</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" name="isi"> <?php echo $p['pengumuman_isi'] ?></textarea>
                      </div>
                    </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Penulis</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Judul" value="<?php echo $p['pengumuman_author'] ?>" name="author">
                  </div>
                </div>
                 
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
<?php foreach ($pengumuman as $p){?>

<!-- Modal Hapus -->
<div class="modal fade" id="ModalHapus<?php echo $p['pengumuman_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Pengumuman</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/pengumuman/hapus_pengumuman'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
              <input type="hidden" name="id" value="<?php echo $p['pengumuman_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus pengumuman <b><?php echo $p['pengumuman_judul'];?></b> ?</p>
                               
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

<!--Modal Hapus Pengumuman-->
        
<?php $this->load->view('admin/v_footer'); ?>
<script>
$(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>