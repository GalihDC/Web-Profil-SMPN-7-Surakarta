
<?php $this->load->view('v_header'); ?>
<div id="content_section">
        		<!-- News Updates -->
            	
                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                	 <div class="" style="margin-bottom:130px"></div>
                    	<!-- Banner -->
                        	<div id="banner1" style="padding-bottom:150px">
                             <a href="#"><img src="<?php echo base_url().'assets/images/72727d01bd6ad29229caaa68205c917c.jpeg'?>" alt="" width="700" height="350"/></a>
                                <div class="heading">
                                	<h1>Agenda Kegiatan</h1>
                                </div>
                           </div>
                         <!-- Content Links -->
                         	
                         <!-- Content Heading -->
                         	<div id="content2">	
                                <h2 class="pad8">Agenda Kegiatan</h2>
                                <!-- Blog Listing -->
                                <ul class="listing">
                                <?php
                                  $no=0;
                                  $data_agenda=$this->db->query('SELECT * FROM agenda ORDER BY agenda_tanggal DESC');
                                  foreach ($data_agenda->result_array() as $ag) :
                                     $no++;
                                     $agenda_id=$ag['agenda_id'];
                                     $agenda_nama=$ag['agenda_nama'];
                                     $agenda_deskripsi=$ag['agenda_deskripsi'];
                                     $agenda_mulai=$ag['agenda_mulai'];
                                     $agenda_selesai=$ag['agenda_selesai'];
                                     $agenda_tempat=$ag['agenda_tempat'];
                                     $agenda_waktu=$ag['agenda_waktu'];
                                     $agenda_keterangan=$ag['agenda_keterangan'];
                                     $agenda_author=$ag['agenda_author'];
                                     $tanggal=$ag['agenda_tanggal'];
                                     
                                  ?>
                                	<li>
                                		<div class="thumb"><a href=""><img width="126" height="106" src="<?php echo base_url().'template/images/agenda.png'?>"  alt="" /></a></div>
                                        <div class="description">
                                        	<h6><a href="" class="colr"><?php echo $agenda_nama;?></a></h6>
                                            <?php echo $agenda_deskripsi;?>
                                            <div class="clear"></div>
                                            <div class="info">
                                            	<span class="postedby">Di Post Oleh: <?php echo $agenda_author;?></span>
                                                <span class="lastupdte">Tanggal: <i><?php echo $tanggal;?></i></span> 
                
                                            </div>
                                         </div>
                                         <div class="clear"></div>
                                	</li>
                                <?php endforeach;?>
                                   
                                </ul>
                                <div class="clear"></div>
                                <!-- pagination Listing -->
                               	 	  <div class="pginaiton pad9">
                                    	<ul>
                                   		
                                            
                                        </ul>
                                    </div>
                            	<div class="clear"></div>    
                           </div>		   
                         <div class="clear"></div>
                   	 </div>
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
                                            $data_foto=$this->db->query("SELECT * FROM galeri ORDER BY galeri_id DESC LIMIT 3");
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

<?php $this->load->view('v_footer');?>