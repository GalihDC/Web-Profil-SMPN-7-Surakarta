<?php $this->load->view('v_header'); ?>

<!-- Content Seciton -->
        	<div id="content_section">
        		
                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                    	 <div class="" style="margin-bottom:130px"></div>
                        
                            <div class="clear"></div>
                                <!-- Note -->
                               	
                               <div class="clear"></div>	
                              <div class="" style="margin-bottom:130px"></div>

                               
                             <div class="contactblock">
                             	<!-- Contact block  -->
                               <?php echo $map['js'];?>
                               <?php 

                                 print_r($map['html']);
                               ?>
                                
                             <div class="clear"></div>
                             </div>
                             <div class="contactblock">
                                
                                <?php echo $this->session->flashdata('msg');?>

                             	<div class="block1">
                                <h5>Kirim Pesan</h5>
                                <form action="<?php echo base_url().'index.php/contact/kirim_pesan'?>" method="post" enctype="multipart/form-data"  >
                                	<ul class="inquiry">
                                		<li><input name="nama" type="text" placeholder="Nama" required/></li> 
                                        <li><input name="email" type="email" placeholder="Email" required/></li> 
                                        <li><input name="contact" type="text" placeholder="Kontak Person" required/></li>
                                        
                                        <li> 
                                        	<textarea  rows="0" cols="0" name="pesan" class="txtarea" placeholder="Tinggalkan Pesan disini" required></textarea>
                                        </li>

                                    </ul>
                                    <div class="action"> 
                        						<button class="btn1 left" type="submit">Kirim</button>  
                            	     </form>
                    							</div>
                                </div>
                             	<div class="block2">
                                	<!-- Visit Address -->
                                  <h5>Alamat</h5>
                                  <div class="mailingaddress">
                                          <p>Jl. MR. SARTONO NO. 34, Nusukan, Kec. Banjarsari, Kota Surakarta Prov. Jawa Tengah 57135</p>
                                          
                                    </div>
                                    <div class="teleno colr">(0271) 857624</div>
                                <div class="emailaddress">
                                        <a href="#">smp7surakarta@gmail.com</a>
                                        <a href="#">www.smp7solo.sch.id</a>
                                      </div>
                              </div>	
                             
                             <div class="clear"></div>
                             </div>
                             <div class="clear"></div>
 							
                             
                             <div class="clear"></div>
                    		<!-- col1 ends -->	
                    </div>
               <!-- Col2 -->
                	<div class="col2">
                    	<div class="" style="margin-bottom:130px"></div>
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
                                    <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;">Gallery Photo</h4></div>
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
                                                    <p><a href="<?php echo base_url('index.php/galeri')?>" class="gray" ><?php echo $judul;?></a></p>
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