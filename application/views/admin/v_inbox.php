<?php $this->load->view('admin/v_header');?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pesan
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Pesan</li>
      </ol>
    </section><section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:12px;">
                <thead>
                <tr>
					          <th style="width:70px;">#</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.HP</th>
                    <th>Pesan</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($inbox as $i){?>
                    
                 
        
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $i['inbox_tanggal'];?></td>
                  <td><?php echo $i['inbox_nama'];?></td>
                  <td><?php echo $i['inbox_email']?></td>
                  <td><?php echo $i['inbox_kontak']?></td>
                  <td><?php echo $i['inbox_pesan']?></td>
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $i['inbox_id'];?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
                <?php $no++; ?>
                 <?php } ?>


                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<?php foreach ($inbox as $i){?>
<!-- Modal Hapus -->
<div class="modal fade" id="ModalHapus<?php echo $i['inbox_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Pesan</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'index.php/admin/inbox/hapus_inbox'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
                      <input type="hidden" name="id" value="<?php echo $i['inbox_id'];?>"/> 
                            <p>Apakah Anda yakin mau menghapus Pesan dari <b><?php echo $i['inbox_nama'];?></b> ?</p>
                               
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