<?php $this->load->view('admin/v_header'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Photo
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Photo</li>
      </ol>
    </section>
    <?php echo $this->session->flashdata('msg'); ?>

        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Photo</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr><th style="width:70px;">#</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Album</th>
                    <th>Author</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                	<?php foreach ($galeri as $gr) { ?>
                	<tr>
                		<td><?php echo $no; ?></td>

                		<td>
                			<?php if(empty($gr['galeri_gambar'])){ ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png'?>"> </img>
                			<?php } else { ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url().'assets/images/'.$gr['galeri_gambar']?>"> </img>
                			<?php } ?>

                		</td>
                		<td><?php echo $gr['galeri_judul']; ?></td>
                		<td><?php echo $gr['galeri_tanggal']; ?></td>
                		<td><?php echo $gr['album_nama']; ?></td>
                		<td><?php echo $gr['galeri_author']; ?></td>
                		<td style="text-align:right;">
                        	<a class="btn" data-toggle="modal" data-target="#Editmodal<?php echo $gr['galeri_id'];?>"><span class="fa fa-pencil" ></span></a>
                        	<a class="btn" data-toggle="modal" data-target="#Hapusmodal<?php echo $gr['galeri_id']; ?>"><span class="fa fa-trash"></span></a>
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
        <h4 class="modal-title" id="exampleModalLabel">Tambah Photo</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/galeri/simpan') ?>" method='post' enctype="multipart/form-data">
            	<div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" id="NIP" placeholder="Nama photo">
                  </div>
                </div>	

                <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Nama Album</label>
                    <div class="col-sm-7">
                      <select name="album" class="form-control" required>
                        <option value="-Pilih-">-Pilih-</option>
                        <?php

                            foreach ($album as $alb) {
                              $id=$alb['album_id'];
                              $nama=$alb['album_nama'];
                            
                        ?>

                          <option value="<?php echo $id;?>"><?php echo $nama;?></option>

                        <?php } ?>
                      </select>
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
<?php foreach ($galeri as $gr){?>
<!-- edit -->
<div class="modal fade" id="Editmodal<?php echo $gr['galeri_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="EditmodalLabel">Edit galeri</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/galeri/edit_galeri') ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">Judul</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="judul" id="NIP" value="<?php echo $gr['galeri_judul']; ?>">
                  </div>
                </div>

                <input type="hidden" name="album_id_sbl" value="<?php echo $gr['galeri_album_id'];?>"/>

               <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Nama Album</label>
                    <div class="col-sm-7">
                      <select name="album" class="form-control" required>
                        <option value="-Pilih-">-Pilih-</option>
                        <?php

                            foreach ($album as $alb) {
                              $id=$alb['album_id'];
                              $nama=$alb['album_nama'];
                            
                        ?>
                        <?php if($alb['album_id']==$gr['galeri_album_id']):?>
                          <option value="<?php echo $id;?>" selected><?php echo $nama;?></option>
                        <?php else:?>
                          <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                        <?php endif;?>


                        <?php } ?>
                      </select>
                    </div>
                </div>



	                <div class="form-group">
	                  <label for="NIP" class="col-sm-2 control-label">Author</label>

	                  <div class="col-sm-10">
	                    <input type="text" class="form-control" name="author" id="NIP" value="<?php echo $gr['galeri_author']; ?>">
	                  </div>
	                </div>
           

                 <div class="form-group">
                 	<label for="inputUserName" class="col-sm-2 control-label">Photo</label>
                 	                 	<div class="col-sm-10">
                 	 	<input type="file" name="filefoto"/>
                 	 </div>
               	</div>

                <input type="hidden" value="<?php echo $gr['galeri_id']?>" name="id">
       
            
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
<?php foreach ($galeri as $gr){?>

<!-- Modal Hapus -->
<div class="modal fade" id="Hapusmodal<?php echo $gr['galeri_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus galeri</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/galeri/hapus_galeri'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                      <input type="hidden" name="id" value="<?php echo $gr['galeri_id'];?>"/>
                      <input type="hidden" name="album_id" value="<?php echo $gr['galeri_album_id'];?>"/>
                            <p>Apakah Anda yakin mau menghapus photo <b><?php echo $gr['galeri_judul'];?></b> ?</p>
                               
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