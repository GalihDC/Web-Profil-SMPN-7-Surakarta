<?php $this->load->view('admin/v_header'); ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Guru
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Guru</li>
      </ol>
    </section>
    <?php echo $this->session->flashdata('msg'); ?>

        <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Guru</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
					<th style="width:70px;">#</th>
                    <th>Photo</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tempat/TglLahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Mata Pelajaran</th>
                    <th>Jabatan</th>
                    <th>Jenis Guru</th>
                    <th>Keterangan</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                	<?php foreach ($guru as $g) { ?>
                	<tr>
                		<td><?php echo $no; ?></td>

                		<td>
                			<?php if(empty($g['guru_photo'])){ ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png'?>"> </img>
                			<?php } else { ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url().'assets/images/'.$g['guru_photo']?>"> </img>
                			<?php } ?>

                		</td>
                		<td><?php echo $g['guru_nip']; ?></td>
                		<td><?php echo $g['guru_nama']; ?></td>
                		<td><?php echo $g['guru_tmp_lahir'].', '.$g['guru_tgl_lahir']; ?></td>
                		<td><?php echo $g['guru_jenkel']; ?></td>
                		<td><?php echo $g['guru_mapel']; ?></td>
                    <td><?php echo $g['jabatan_nama']; ?></td>
                    <td><?php echo $g['jenis_guru_nama']; ?></td>
                    <td><?php echo $g['guru_keterangan']; ?></td>
                		<td style="text-align:right;">
                        	<a class="btn" data-toggle="modal" data-target="#Editmodal<?php echo $g['guru_id'];?>"><span class="fa fa-pencil" ></span></a>
                        	<a class="btn" data-toggle="modal" data-target="#Hapusmodal<?php echo $g['guru_id']; ?>"><span class="fa fa-trash"></span></a>
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
        <h4 class="modal-title" id="exampleModalLabel">Tambah Guru</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/guru/simpan') ?>" method='post' enctype="multipart/form-data">
            	<div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nip" id="NIP" placeholder="NIP">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="Nama" placeholder="Nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Jenkel" class="col-sm-2 control-label">Jenis Kelamin</label>
                	<div class="col-sm-10">
  						<div class="row">
  							<div class="col-xs-3">
  								<input type="radio" name="jenkel" id="optionsRadios1" value="L" checked>
                      Laki-Laki					
  							</div>	
  							<div class="col-xs-3">
  								<input type="radio" name="jenkel" id="optionsRadios2" value="P">
                      Perempuan				
  							</div>		
  						</div>              		
                		
                  </div>
                  </div>	

                <div class="form-group">
                  <label for="TempatLahir" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tempatlahir" id="TempatLahir" placeholder="Contoh : Surakarta">
                  </div>
                </div>

                <div class="form-group">
                  <label for="TanggalLahir" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="tanggallahir" id="TanggalLahir" placeholder="Contoh : 1 Januari 2000">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Mapel" class="col-sm-2 control-label">Mata Pelajaran</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="mapel" id="Mapel" placeholder="Contoh : Matematika, Fisika">
                  </div>
              </div>

              <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-7">
                      <select name="jabatan" class="form-control" required>
                        <option value="">-Pilih-</option>
                        <?php

                            foreach ($jabatan as $j) {
                              $id=$j['jabatan_id'];
                              $nama=$j['jabatan_nama'];
                            
                        ?>

                          <option value="<?php echo $id;?>"><?php echo $nama;?></option>

                        <?php } ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Jenis Guru</label>
                    <div class="col-sm-7">
                      <select name="jenis" class="form-control" required>
                        <option value="">-Pilih-</option>
                        <?php

                            foreach ($jenis as $jns) {
                              $id=$jns['jenis_guru_id'];
                              $nama=$jns['jenis_guru_nama'];
                            
                        ?>
                        <?php if($g['guru_jenis_id']==$jns['jenis_guru_id']):?>
                          <option value="<?php echo $id;?>" selected><?php echo $nama;?></option>
                        <?php else:?>
                          <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                        <?php endif;?>
                        <?php } ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="eIsi" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" name="keterangan"> </textarea>
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
<?php foreach ($guru as $g){?>
<!-- edit -->
<div class="modal fade" id="Editmodal<?php echo $g['guru_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="EditmodalLabel">Edit Guru</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/guru/edit_guru') ?>" method="post" enctype="multipart/form-data">
            	<div class="form-group">
                  <label for="NIP" class="col-sm-2 control-label">NIP</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eNIP" name="enip" value="<?php echo $g['guru_nip'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eNama" name="enama" value="<?php echo $g['guru_nama'] ?>">
                  </div>
                </div>
                <input type="hidden" value="<?php echo $g['guru_id']?>" name="eid">

                <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-7">
                      <?php if($g['guru_jenkel']=='L'):?>
                       <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="L" name="ejenkel" checked>
                            <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="P" name="ejenkel">
                            <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php else:?>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="L" name="ejenkel">
                            <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="P" name="ejenkel" checked>
                            <label for="inlineRadio2"> Perempuan </label>
                        </div>
                      <?php endif;?>
                    </div>
                </div>	

                <div class="form-group">
                  <label for="TempatLahir" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eTempatLahir" name="etmplahir" value="<?php echo $g['guru_tmp_lahir'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="TanggalLahir" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eTanggalLahir" name="etgllahir" value="<?php echo $g['guru_tgl_lahir'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="Mapel" class="col-sm-2 control-label">Mata Pelajaran</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eMapel" name="emapel" value="<?php echo $g['guru_mapel'] ?>">
                  </div>
              </div>

              <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-7">
                      <select name="ejabatan" class="form-control" required>
                        <option value="">-Pilih-</option>
                        <?php

                            foreach ($jabatan as $j) {
                              $id_jabatan=$j['jabatan_id'];
                              $nama_jabatan=$j['jabatan_nama'];
                            
                        ?>
                        <?php if($g['guru_jabatan_id']==$j['jabatan_id']):?>
                          <option value="<?php echo $id_jabatan;?>" selected><?php echo $nama_jabatan;?></option>
                        <?php else:?>
                          <option value="<?php echo $id_jabatan;?>"><?php echo $nama_jabatan;?></option>
                        <?php endif;?>

                        <?php } ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Jenis Guru</label>
                    <div class="col-sm-7">
                      <select name="ejenis" class="form-control" required>
                        <option value="">-Pilih-</option>
                        <?php

                            foreach ($jenis as $jns) {
                              $id_jenis=$jns['jenis_guru_id'];
                              $nama_jenis=$jns['jenis_guru_nama'];
                            
                        ?>
                        <?php if($g['guru_jenis_id']==$jns['jenis_guru_id']):?>
                          <option value="<?php echo $id_jenis;?>" selected><?php echo $nama_jenis;?></option>
                        <?php else:?>
                          <option value="<?php echo $id_jenis;?>"><?php echo $nama_jenis;?></option>
                        <?php endif;?>
                        <?php } ?>
                      </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="eIsi" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" name="eketerangan" > <?php echo $g['guru_keterangan'] ?> </textarea>
                      </div>
                    </div>

                 <div class="form-group">
                 	<label for="inputUserName" class="col-sm-2 control-label">Photo</label>
                 	                 	<div class="col-sm-10">
                 	 	<input type="file" name="filefoto" value="<?php echo $g['guru_photo'] ?>"/>
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
<?php foreach ($guru as $g){?>

<!-- Modal Hapus -->
<div class="modal fade" id="Hapusmodal<?php echo $g['guru_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Guru</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/guru/hapus_guru'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                      <input type="hidden" name="id" value="<?php echo $g['guru_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus guru <b><?php echo $g['guru_nama'];?></b> ?</p>
                               
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