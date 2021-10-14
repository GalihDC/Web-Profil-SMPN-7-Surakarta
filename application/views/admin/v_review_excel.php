<?php $this->load->view('admin/v_header'); ?>
<script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>

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

    <?php 
      if(isset($upload_error)){ // Jika proses upload gagal
      echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
      die; // stop skrip
    }

     ?>
        <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
            </div>
            
            <!-- <form method="post" enctype="multipart/form-data" action="siswa/upload_exel.php">
              Pilih File: 
            </form> -->
            <!-- /.box-header -->
            <div class="box-body">
            <?php 
              echo "<form method='post' action='".base_url("admin/siswa/import")."'>";
              
              // Buat sebuah div untuk alert validasi kosong
  
              
              echo "<table class='table table-striped' style='font-size:12px;'>
              
              <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>kelas</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;
              
              // Lakukan perulangan dari data yang ada di excel
              // $sheet adalah variabel yang dikirim dari controller
              foreach($sheet as $row){ 
                // Ambil data pada excel sesuai Kolom
                $nis = $row['A']; // Ambil data NIS
                $nama = $row['B']; // Ambil data nama
                $jenis_kelamin = $row['C']; // Ambil data jenis kelamin
                $kelas = $row['D']; // Ambil data kelas
                
                // Cek jika semua data tidak diisi
                if($nis == "" && $nama == "" && $jenis_kelamin == "" && $kelas == "")
                  continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
                
                // Cek $numrow apakah lebih dari 1
                // Artinya karena baris pertama adalah nama-nama kolom
                // Jadi dilewat saja, tidak usah diimport
                if($numrow > 1){
                  // Validasi apakah semua data telah diisi
                  $nis_td = ( ! empty($nis))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                  $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                  $jk_td = ( ! empty($jenis_kelamin))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                  $kelas_td = ( ! empty($kelas))? "" : " style='background: #E07171;'"; // Jika kelas kosong, beri warna merah
                  
                  // Jika salah satu data ada yang kosong
                  if($nis == "" or $nama == "" or $jenis_kelamin == "" or $kelas == ""){
                    $kosong++; // Tambah 1 variabel $kosong
                  }
                  
                  echo "<tr>";
                  echo "<td".$nis_td.">".$nis."</td>";
                  echo "<td".$nama_td.">".$nama."</td>";
                  echo "<td".$jk_td.">".$jenis_kelamin."</td>";
                  echo "<td".$kelas_td.">".$kelas."</td>";
                  echo "</tr>";
                }
                
                $numrow++; // Tambah 1 setiap kali looping
              }
              
              echo "</table>";
              
              // Cek apakah variabel kosong lebih dari 0
              // Jika lebih dari 0, berarti ada data yang masih kosong
              if($kosong > 0){
              ?>  
                <script>
                $(document).ready(function(){
                  // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                  $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                  
                  $("#kosong").show(); // Munculkan alert validasi kosong
                });
                </script>
              <?php
              }else{ // Jika semua data sudah diisi
                echo "<hr>";
                
                // Buat sebuah tombol untuk mengimport data ke database
                echo "<button type='submit' name='import' class='btn btn-primary'>Import</button>";
                echo "<a href='".base_url("admin/siswa")."' class='btn btn-dafault'>Cancel</a>";
              }
              
              echo "</form>";

             ?>


            </div>
		   </div>
		</div>
	  </div>
	</section>
    <!-- /.content -->
  </div>

<!-- TAMBAH -->




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