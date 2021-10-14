<?php $this->load->view('v_header'); ?>

<!-- Content Seciton -->
        	<div id="content_section">
        		<div class="" style="margin-bottom:130px"></div>

                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                    	<!-- Banner -->
                        	<div id="banner1" style="padding-bottom:150px">
									           <a href="#"><img src="<?php echo base_url().'assets/images/72727d01bd6ad29229caaa68205c917c.jpeg'?>" alt="" width="700" height="350"/></a>
                                <div class="heading">
                                	<h1>Data Siswa</h1>
                                </div>
                           </div>
                          
                         <!-- Content Heading -->
                         	<div id="content2">	
                                <h2 class="pad8">Siswa Ranking</h2>
                                <!-- Blog Listing -->
                                <ul class="listing">
                                <?php
                                  $no=0;
                                  $data=$this->db->query("SELECT * FROM siswa JOIN kelas WHERE siswa.siswa_kelas_id=kelas.kelas_id AND siswa.siswa_keterangan != '' ");
                                  foreach ($data->result_array() as $i) :
                                     $no++;
                                     $id=$i['siswa_id'];
                                     $nis=$i['siswa_nis'];
                                     $nama=$i['siswa_nama'];
                                     $jenkel=$i['siswa_jenkel'];
                                     $tmp_lahir=$i['siswa_tmp_lahir'];
                                     $tgl_lahir=$i['siswa_tgl_lahir'];
                                     $kelas_id=$i['siswa_kelas_id'];
                                     $kelas_nama=$i['kelas_nama'];
                                     $alamat=$i['siswa_alamat'];
                                     $ket=$i['siswa_keterangan'];
                                     $photo=$i['siswa_photo'];
                                    
                                  ?>
                                	<li>
                                		<div class="thumb">
                                    <?php if(empty($photo)):?>
                                    <img width="70" height="70" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" />
                                    <?php else:?>
                                    <img width="70" height="70" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" />
                                    <?php endif;?>
                                    </div>
                                        <div class="description">
                                        	<table style="font-size:12px;">
                                              <tr>
                                                <td>NIS</td>
                                                <td>:</td>
                                                <td><?php echo $nis;?></td>
                                              </tr>
                                              <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td><?php echo $nama;?></td>
                                              </tr>
                                              <tr>
                                                <td>Prestasi</td>
                                                <td>:</td>
                                                <td><?php echo $ket;?></td>
                                              </tr>  
                                              <tr>
                                                <td>Kelas</td>
                                                <td>:</td>
                                                <td><?php echo $kelas_nama;?></td>
                                              </tr>
                                            
                                          </table>
                                         </div>
                                         <div class="clear"></div>
                                	</li>
                                <?php endforeach;?>
                                   
                                </ul>
                                <div class="clear"></div>
                                <!-- pagination Listing -->
                               	 	  <div class="pginaiton pad9">
                                    	<ul>
                                   			<li><?php echo $page;?></li>
                                            
                                        </ul>
                                    </div>
                            	<div class="clear"></div>    
                           </div>		   
                         <div class="clear"></div>
                   	 </div>
               <!-- Col2 -->
                	<div class="col2">
                    	
                      		<!-- Block Guru dan Siswa -->  
                              <div class="college_gallery">
                                    <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;"><center>Daftar Guru</center> </h4></div>
                                    <ul>
                                          <?php 
                                            $data_guru=$this->db->query("SELECT * FROM guru ORDER BY guru_id DESC LIMIT 6");
                                            foreach ($data_guru->result_array() as $i) :
                                            $nip=$i['guru_nip'];
                                            $nama=$i['guru_nama'];
                                            $mapel=$i['guru_mapel'];
                                            $ket=$i['guru_keterangan'];
                                            $photo=$i['guru_photo'];
                                          ?>
                                          <li>
                                            <?php if(empty($photo)):?>
                                              <div class="thumb" ><a href="<?php echo base_url('index.php/guru')?>"><img width="40" height="40" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" /></a></div> 
                                            <?php else:?>
                                              <div class="thumb" ><a href="<?php echo base_url('index.php/guru')?>"><img width="40" height="40" src="<?php echo base_url().'assets/images/'.$photo;?>"  alt="" /></a></div> 
                                            <?php endif;?>
                                                <div class="description">
                                                  <h6><a href="<?php echo base_url('index.php/guru')?>"><?php echo $nama;?></a></h6>
                                                    <p><a href="<?php echo base_url('index.php/guru')?>" class="gray" ><?php echo $mapel;?></a></p>
                                                </div> 
                                           </li>
                                         <?php endforeach;?>
                                        
                                    </ul>
                                </div> 
                                
                            <!-- Our College Gallery -->    
                                <div class="college_gallery">
                                    <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;"><center>Gallery Photo Terbaru</center></h4></div>
                                    <ul>
                                          <?php 
                                            $data_foto=$this->db->query("SELECT * FROM galeri ORDER BY galeri_id DESC LIMIT 4");
                                            foreach ($data_foto->result_array() as $i) :
                                                $id=$i['galeri_id'];
                                                $judul=$i['galeri_judul'];
                                                $photo=$i['galeri_gambar'];
                                          ?>
                                          <li>
                                            <?php if(empty($photo)):?>
                                              <div class="thumb" ><a href="<?php echo base_url('index.php/galeri')?>"><img width="40" height="40" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" /></a></div> 
                                            <?php else:?>
                                              <div class="thumb" ><a href="<?php echo base_url('index.php/galeri')?>"><img width="40" height="40" src="<?php echo base_url().'assets/images/'.$photo;?>"  alt="" /></a></div> 
                                            <?php endif;?>
                                                <div class="description">
                                                  <h6><a href="<?php echo base_url('index.php/galeri')?>"><?php echo $judul;?></a></h6>
                                                    <p><a href="<?php echo base_url('index.php/galeri')?>" class="gray" ></a></p>
                                                </div> 
                                           </li>
                                         <?php endforeach;?>
                                        
                                    </ul>
                                </div>
                                
                                
                    		<div class="clear"></div>	
 						<!--col2 ends -->						
              		</div>
                <div class="clear"></div>
			</div>	
		<div class="clear"></div>
	</div>
</div>    
<!-- Footer Section -->
<?php $this->load->view('v_footer');?>
</body>
</html>