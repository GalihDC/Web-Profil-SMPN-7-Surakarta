<?php $this->load->view('admin/v_header'); ?>
!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Download
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Download</li>
      </ol>
    </section>

        <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah File</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
					<th style="width:70px;">Tanggal Post</th>
                    <th>Judul File</th>
                    <th>Author</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                	<?php foreach ($files as $f) { ?>
            
                	<tr>
                		<td><?php echo $f['file_tanggal'];?></td>
                		<td><?php echo $f['file_judul']; ?></td>
                		<td><?php echo $f['file_oleh']; ?></td>
                		<td style="text-align:right;">
                        	<a class="btn" data-toggle="modal" data-target="#Editfile<?php echo $f['file_id'];?>"><span class="fa fa-pencil" ></span></a>
                        	<a class="btn" data-toggle="modal" data-target="#Hapusfile<?php echo $f['file_id']; ?>"><span class="fa fa-trash"></span></a>
                        	<a class="btn" href="<?php echo base_url().'admin/files/aksi_download/'?><?php echo $f['file_data'] ?>"><span class="fa fa-download"></span></a>
                        </td>
                    </tr>
                   <?php } ?>
                   <?php $no++; ?>

                </tbody>	
                </table>


            </div>
		   </div>
		</div>
	  </div>
	</section>
    <!-- /.content -->
  </div>

   <!--Modal Add file-->
<!-- Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah File</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('admin/files/simpan') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">file</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="file" placeholder="Judul file" name="file">
                  </div>
                </div>


                <input type="hidden" name="id" value="<?php echo $f['file_id'];?>"/>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Author</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" placeholder="Masukkan penulis" name="author">
                  </div>
                </div>

                <div class="form-group">
                 	<label for="inputUserName" class="col-sm-2 control-label">File</label>
                 	     <div class="col-sm-10">
                 	 	<input type="file" name="filemtr"/>
                 	 </div>
               	</div>

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

<?php foreach ($files as $f) {?>
<!--Modal Edit Pengguna-->
        <div class="modal fade" id="Editfile<?php echo $f['file_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Edit File</h4>
                    </div>
                        <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('admin/files/edit_file') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">file</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="file" value="<?php echo $f['file_judul']; ?>" name="file">
                  </div>
                </div>


                <input type="hidden" name="id" value="<?php echo $f['file_id'];?>"/>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Author</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" value="<?php echo $f['file_oleh']; ?>" name="author">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-2 control-label">File</label>
                       <div class="col-sm-10">
                    <input type="file" name="filemtr"/>
                    NB: file harus bertype pdf|doc|docx|ppt|pptx|zip. ukuran maksimal 2,7 MB.
                   </div>
                </div>

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
 <?php } ?>

 <?php foreach ($files as $f) {?>
<!-- Modal Hapus -->
<div class="modal fade" id="Hapusfile<?php echo $f['file_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus File</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/files/hapus_file'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                      <input type="hidden" name="id" value="<?php echo $f['file_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus file <b><?php echo $f['file_judul'];?></b> ?</p>
                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary btn-flat" id="simpan" value="Hapus">
                    </div>
                    </form>
                </div>
            </div>
        </div>
<?php }?>
<?php $this->load->view('admin/v_footer') ;?>