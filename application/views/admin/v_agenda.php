<?php $this->load->view('admin/v_header'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Agenda Sekolah
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Agenda Sekolah</li>
      </ol>
    </section>

        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Agenda</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
					<th style="width:70px;">#</th>
                    <th>Agenda</th>
                    <th>Deskripsi</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Waktu</th>
                    <th>Keterangan</th>
                    <th>Author</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                	<?php foreach ($agenda as $ag) {?>
                	
                	<tr>
           
                		<td><?php echo $ag['agenda_tanggal'];?></td>
                		<td><?php echo $ag['agenda_nama']; ?></td>
                		<td><?php echo $ag['agenda_deskripsi']; ?></td>
                		<td><?php echo $ag['agenda_mulai'].' s/d '.$ag['agenda_selesai']; ?></td>
                		<td><?php echo $ag['agenda_tempat']; ?></td>
                		<td><?php echo $ag['agenda_waktu']; ?></td>
                		<td><?php echo $ag['agenda_keterangan']; ?></td>
                		<td><?php echo $ag['agenda_author']; ?></td>
                		<td style="text-align:right;">
                        	<a class="btn" data-toggle="modal" data-target="#Editagenda<?php echo $ag['agenda_id'];?>"><span class="fa fa-pencil" ></span></a>
                        	<a class="btn" data-toggle="modal" data-target="#Hapusagenda<?php echo $ag['agenda_id']; ?>"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                   <?php }?>

                </tbody>	
                </table>


            </div>
		   </div>
		</div>
	  </div>
	</section>
    <!-- /.content -->
  </div>

  <!--Modal Add agenda-->
<!-- Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Agenda</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/agenda/simpan') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Agenda</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Agenda" placeholder="Nama Agenda" name="agenda">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Isi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Isi" placeholder="Deskripsi" name="deskripsi">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-2 control-label">Mulai</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="mulai" class="form-control pull-right" id="datepicker" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-2 control-label">Selesai</label>
                 	<div class="col-sm-7">
                      <div class="input-group date">
                      	 <div class="input-group-addon">
                        	<i class="fa fa-calendar"></i>
		                 </div>
		                 <input type="text" name="selesai" class="form-control pull-right" id="datepicker2" required>
		               </div>
		              </div>
		          </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Tempat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Tempat" placeholder="Contoh : Surakarta" name="tempat">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Waktu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Waktu" placeholder="Contoh : 08.00-10.00 WIB" name="waktu">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Keterangan" placeholder="Keterangan. . ." name="keterangan">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Author</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Author" placeholder="Masukkan penulis" name="author">
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

<?php foreach ($agenda as $ag) {?>
<div class="modal fade" id="Editagenda<?php echo $ag['agenda_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Agenda</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/agenda/edit_agenda') ?>" method="post">
              <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Agenda</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="agenda" value='<?php echo $ag['agenda_nama']?>' name="nama">
                  </div>
                </div>

                <input type="hidden" name="id" value="<?php echo $ag['agenda_id'];?>"/> 

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Isi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Isi" value='<?php echo $ag['agenda_deskripsi']?>' name="deskripsi">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-2 control-label">Mulai</label>
                  <div class="col-sm-7">
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="mulai" class="form-control pull-right" id="datepicker" value='<?php echo $ag['agenda_mulai']?>' required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputUserName" class="col-sm-2 control-label">Selesai</label>
                 	<div class="col-sm-7">
                      <div class="input-group date">
                      	 <div class="input-group-addon">
                        	<i class="fa fa-calendar"></i>
		                 </div>
		                 <input type="text" name="selesai" class="form-control pull-right" id="datepicker2" value='<?php echo $ag['agenda_selesai']?>' required>
		               </div>
		              </div>
		          </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Tempat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Tempat" value='<?php echo $ag['agenda_tempat']?>' name="tempat">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Waktu</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Waktu" value='<?php echo $ag['agenda_waktu']?>' name="waktu">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Keterangan" value='<?php echo $ag['agenda_keterangan']?>' name="keterangan">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Judul" class="col-sm-2 control-label">Author</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Author" value='<?php echo $ag['agenda_author']?>' name="author">
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
<?php }?>

<?php foreach ($agenda as $ag) {?>
<!-- Modal Hapus -->
<div class="modal fade" id="Hapusagenda<?php echo $ag['agenda_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Agenda</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/agenda/hapus_agenda'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                      <input type="hidden" name="id" value="<?php echo $ag['agenda_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus Agenda <b><?php echo $ag['agenda_nama'];?></b> ?</p>
                               
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


    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
    });  
    


    });
  });
</script>