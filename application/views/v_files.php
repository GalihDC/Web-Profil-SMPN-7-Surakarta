<?php $this->load->view('v_header'); ?>
<!-- Content Seciton -->
        	<div id="content_section">
        

                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                		<div class="" style="margin-bottom:130px"></div>
                    	<!-- Content Links -->
                         	
                            <div id="banner1" style="padding-bottom:150px">
                             <a href="#"><img src="<?php echo base_url().'assets/images/72727d01bd6ad29229caaa68205c917c.jpeg'?>" alt="" width="700" height="350"/></a>
                                <div class="heading">
                                  <h1>Download</h1>
                                </div>
                           </div>
                         <!-- Content Heading -->
                         	<div class="content_heading">
                            	<div class="heading"><h2>Download file yang Anda butuhkan.</h2> </div>
                            	
                            </div>
                             
                           	
                           <div class="clear"></div>
                             <!-- Content Block -->
                             	<div class="listingblock">
                                	
                                    <div class="clear"></div>
                                <div class="course_listing">
                                <ul class="listheading">
                                	<li class="code colr">No</li>
                                    <li class="coursename colr">Judul</li>
                                    <li class="time colr">Tanggal</li>
                                    <li class="location colr">Oleh</li>
                                    <li class="instructor colr">Aksi</li>
                                </ul>
                                <?php
                                    $no=0;
                                    $data=$this->db->query('SELECT * FROM files');
                                    foreach ($data->result_array() as $d) :
                                        $no++;
                                        $id=$d['file_id'];
                                        $judul=$d['file_judul'];
                                        $deskripsi=$d['file_deskripsi'];
                                        $oleh=$d['file_oleh'];
                                        $tanggal=$d['file_tanggal'];
                                        $download=$d['file_download'];
                                        $file=$d['file_data'];
                                    ?>
                                <ul class="courselisting">
                                	<li class="code"><?php echo $no;?></li>
                                    <li class="coursename"><?php echo $judul;?></li>
                                    <li class="time"><?php echo $tanggal;?></li>
                                    <li class="location"><?php echo $oleh;?></li>
                                    <li class="instructor"><a href="<?php echo base_url().'files/aksi_download/'.$file;?>">Download</a></li>
                                
                                </ul>
                              <?php endforeach;?>
                                
                             <div class="clear"></div>
                          </div>
                                </div>
                                
                                <!-- Note -->
                               	<div class="note">
                               		<a href="#" class="close">&nbsp;</a>
                               		<p>
                                   		<strong> NB:</strong> Silahkan download file yang sesuai dengan kebutuhan Anda!.
                               		</p>
                               </div>	
                             
                             
                            
                             
                               	<div class="clear"></div>
                    		<!-- col1 ends -->	
                    </div>
               <!-- Col2 -->
                	               <!-- Col2 -->
                  <div class="col2">
                      <div class="" style="margin-bottom: 130px"></div>

                      
                      <!-- Block Guru dan Siswa -->  
                             <div class="college_gallery">
                                    <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;"><center>Daftar Guru</center> </h4></div>
                                    <ul>
                                          <?php 
                                            $data_guru=$this->db->query("SELECT * FROM guru ORDER BY guru_id DESC LIMIT 5");
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
                                            $data_foto=$this->db->query("SELECT * FROM galeri ORDER BY galeri_id DESC LIMIT 6 ");
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
