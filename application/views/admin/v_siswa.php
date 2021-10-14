<?php $this->load->view('admin/v_header'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       	Siswa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Siswa</li>
      </ol>
    </section>

        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus"></span> Tambah Siswa</a>
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#exampleModa2"><span class="fa fa-plus"></span> Tambah Exel</a>
            </div>
            
            <!-- <form method="post" enctype="multipart/form-data" action="siswa/upload_exel.php">
              Pilih File: 
            </form> -->
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
					<th style="width:70px;">#</th>
                    <th>Photo</th>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Tempat/TglLahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Keterangan</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                	<?php foreach ($siswa as $s) { ?>
                	<tr>
                		<td><?php echo $no; ?></td>
                		<td>
                			<?php if(empty($s['siswa_photo'])){ ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png'?>"> </img>
                			<?php } else { ?>
                			<img width="50" height="50" class="img-circle" src="<?php echo base_url().'assets/images/'.$s['siswa_photo']?>"> </img>
                			<?php } ?>

                		</td>
                		<td><?php echo $s['siswa_nis']; ?></td>
                		<td><?php echo $s['siswa_nama']; ?></td>
                		<td><?php echo $s['siswa_tmp_lahir'].','.$s['siswa_tgl_lahir']; ?></td>
                		<td><?php echo $s['siswa_jenkel']; ?></td>
                		<td><?php echo $s['kelas_nama']; ?></td>
                		<td><?php echo $s['siswa_alamat']; ?></td>
                    <td><?php echo $s['siswa_keterangan']; ?></td>
                		<td style="text-align:right;">
                        	<a class="btn" data-toggle="modal" data-target="#Editsiswa<?php echo $s['siswa_id'];?>"><span class="fa fa-pencil" ></span></a>
                        	<a class="btn" data-toggle="modal" data-target="#Hapussiswa<?php echo $s['siswa_id']; ?>"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>

                     <?php $no++;} ?>

                </tbody>	
                </table>


            </div>
		   </div>
		</div>
	  </div>
	</section>
    <!-- /.content -->
  </div>

<!-- TAMBAH -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Siswa</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/siswa/simpan') ?>" method='post' enctype="multipart/form-data">
                <div class="form-group">
                  <label for="NIS" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" id="NIS" placeholder="NIS">
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
                    <label for="inputUserName" class="col-sm-2 control-label">Kelas</label>
                    <div class="col-sm-7">
                      <select name="kelas" class="form-control" required>
                        <option value="" selected>-Pilih-</option>
                        <?php

                            foreach ($kelas as $k) {
                              $id=$k['kelas_id'];
                              $nama=$k['kelas_nama'];
                        ?> 
                       
                          <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                       
                        <?php } ?>
                      </select>
                    </div>
                </div>

              <div class="form-group">
                    <label for="Isi" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" placeholder="Alamat siswa..." name="alamat"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                    <label for="Isi" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" placeholder="Prestasi siswa" name="keterangan"></textarea>
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
</div>



<div class="modal fade" id="exampleModa2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Siswa</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="<?php echo base_url('admin/siswa/simpan_review') ?>" method='post' enctype="multipart/form-data">
          <div class="form-group">
            <input name="file" type="file" required="required">
          </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Simpan" name="upload">
      </div>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- EDIT-->
<?php foreach ($siswa as $s) {?>

<div class="modal fade" id="Editsiswa<?php echo $s['siswa_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="EditmodalLabel">Edit Siswa</h4>
      </div>
      <div class="modal-body">
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url('index.php/admin/siswa/edit_siswa') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="NIS" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eNIP" name="enis" value="<?php echo $s['siswa_nis'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="Nama" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eNama" name="enama" value="<?php echo $s['siswa_nama'] ?>">
                  </div>
                </div>
                <input type="hidden" value="<?php echo $s['siswa_id']?>" name="eid">

                <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-7">
                      <?php if($s['siswa_jenkel']=='L'):?>
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
                    <input type="text" class="form-control" id="eTempatLahir" name="etempatlahir" value="<?php echo $s['siswa_tmp_lahir'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="TanggalLahir" class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="eTanggalLahir" name="etanggallahir" value="<?php echo $s['siswa_tgl_lahir'] ?>">
                  </div>
                </div>

                <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Kelas</label>
                    <div class="col-sm-7">
                      <select name="ekelas" class="form-control" required>
                        <option value="">-Pilih-</option>
                        <?php
                            foreach ($kelas as $k) {
                              $id=$k['kelas_id'];
                              $nama=$k['kelas_nama'];
                            
                        ?>
                        <?php if($s['siswa_kelas_id']==$k['kelas_id']):?>
                          <option value="<?php echo $id;?>" selected><?php echo $nama;?></option>
                        <?php else:?>
                          <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                        <?php endif;?>
                        <?php } ?>
                      </select>
                    </div>
                </div>

              <div class="form-group">
                    <label for="Isi" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2" value="" name="ealamat"><?php echo $s['siswa_alamat'] ?></textarea>
                      </div>
                    </div>

               <div class="form-group">
                    <label for="Isi" class="col-sm-2 control-label">Keterangan</label>
                      <div class="col-sm-10">
                         <textarea class="form-control" rows="2"  name="eketerangan"><?php echo $s['siswa_keterangan'] ?></textarea>
                      </div>
                    </div>     

                 <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Photo</label>
                                        <div class="col-sm-10">
                        <input type="file" name="filefoto" value="<?php echo $s['siswa_photo'] ?>"/>
                     </div>
                </div>
                               
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
<?php foreach ($siswa as $s) {?>
<!-- Modal Hapus -->
<div class="modal fade" id="Hapussiswa<?php echo $s['siswa_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Siswa</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/siswa/hapus_siswa'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                      <input type="hidden" name="id" value="<?php echo $s['siswa_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus siswa <b><?php echo $s['siswa_nama'];?></b> ?</p>
                               
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
    });
  });
</script>