<?php $this->load->view('admin/v_header'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Album
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data album</li>
      </ol>
    </section>
    <?php echo $this->session->flashdata('msg'); ?>

        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Album</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr><th style="width:70px;">#</th>
                    <th>Photo</th>
                    <th>Album</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Author</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                	<?php foreach ($album as $a) { ?>
                	<tr>
                		<td><?php echo $no; ?></td>

                		<td>
                			<?php if(empty($a['album_cover'])){ ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url('assets/images/user_blank.png')?>"> </img>
                			<?php } else { ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url('assets/images/').$a['album_cover']?>"> </img>
                			<?php } ?>

                		</td>
                		<td><?php echo $a['album_nama']; ?></td>
                		<td><?php echo $a['album_tanggal']; ?></td>
                		<td><?php echo $a['album_count']; ?></td>
                		<td><?php echo $a['album_author']; ?></td>
                		<td style="text-align:right;">
                        	<a class="btn" data-toggle="modal" data-target="#Editmodal<?php echo $a['album_id'];?>"><span class="fa fa-pencil" ></span></a>
                        	<a class="btn" data-toggle="modal" data-target="#Hapusmodal<?php echo $a['album_id']; ?>"><span class="fa fa-trash"></span></a>
                        </td>
                        </tr>

                     <?php $no++;

                   } ?>

                </tbody>	
                </table>


            </div>
		   </div>
		</div>
	  </div>
	</section>
    <!-- /.content -->
  </div>

<!-- Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah album</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/album/simpan') ?>" method='post' enctype="multipart/form-data">
            	<div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Album</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="NIP" placeholder="Nama Album">
                  </div>
                </div>

                <div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Author</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="author" id="NIP" placeholder="Pengambil gambar">
                  </div>
                </div>
           

                 <div class="form-group">
                 	<label for="inputUserName" class="col-sm-2 control-label">Photo</label>
                 	                 	<div class="col-sm-10">
                 	 	<input type="file" name="filefoto"/>
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
<?php foreach ($album as $a){?>
<!-- edit -->
<div class="modal fade" id="Editmodal<?php echo $a['album_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="EditmodalLabel">Edit album</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/album/edit_album') ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Album</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="NIP" value="<?php echo $a['album_nama']; ?>">
                  </div>
                </div>

                <input type="hidden" value="<?php echo $a['album_id']?>" name="id">
                <div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Author</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="author" id="NIP" value="<?php echo $a['album_author']; ?>">
                  </div>
                </div>
           

                 <div class="form-group">
                 	<label for="inputUserName" class="col-sm-2 control-label">Photo</label>
                 	                 	<div class="col-sm-10">
                 	 	<input type="file" name="filefoto" />
                 	 </div>
               	</div>
                               

                
              <!-- /.box-body -->
              <!-- /.box-footer -->
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value"Simpan">
      </div>
      </form>
    </div>
  </div>
</div>

<?php } ?>
<?php foreach ($album as $a){?>

<!-- Modal Hapus -->
<div class="modal fade" id="Hapusmodal<?php echo $a['album_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus album</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/album/hapus_album'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                      <input type="hidden" name="id" value="<?php echo $a['album_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus album <b><?php echo $a['album_nama'];?></b> ?</p>
                               
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


<?php $this->load->view('admin/v_footer') ;?>
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