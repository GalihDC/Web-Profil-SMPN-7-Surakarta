<?php $this->load->view('v_header'); ?>
        <!-- Content Seciton -->
        	<div id="content_section">
        		
                    <div class="clear"></div>
				<!-- Col1 -->
                	<div class="col1">
                    	<!-- Banner -->
                     <div class="" style="margin-bottom:130px"></div>
                        	<div id="banner1" style="padding-bottom:150px">
									<a href="#"><img src="<?php echo base_url().'assets/images/72727d01bd6ad29229caaa68205c917c.jpeg'?>" alt="" width="700" height="350"/></a>
                             
                                <div class="heading">
                                	<h1>Guru SMP 7</h1>
                                </div>
                           </div>
              
                         
                         <!-- Content Heading -->
                         	<div id="content2">	
                                <h2 class="pad8">Data Guru</h2>
                                <!-- Blog Listing -->
                                <ul class="listing">
                                <?php
                                  $no=0;
                                  // $data=$this->db->query("SELECT * FROM guru ");
                                  foreach ($data->result_array() as $i) :
                                     $no++;
                                     $id=$i['guru_id'];
                                     $nip=$i['guru_nip'];
                                     $nama=$i['guru_nama'];
                                     $jenkel=$i['guru_jenkel'];
                                     $tmp_lahir=$i['guru_tmp_lahir'];
                                     $tgl_lahir=$i['guru_tgl_lahir'];
                                     $mapel=$i['guru_mapel'];
                                     $ket=$i['guru_keterangan'];
                                     $photo=$i['guru_photo'];
                                    
                                  ?>

                                	<li>
                                		<div class="thumb">
                                    <?php if(empty($photo)):?>
                                    <img width="70" height="70" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" />
                                    <?php else:?>
                                    <img width="70" height="70" src="<?php echo base_url().'assets/images/'.$photo;?>"  alt="" />
                                    <?php endif;?>
                                    </div>
                                        <div class="description">
                                        	<table style="font-size:11px;">
                                              <tr>
                                                <td>NIP</td>
                                                <td>:</td>
                                                <td><?php echo $nip;?></td>
                                              </tr>
                                              <tr>
                                                <td>Nama</td>
                                                <td>:</td>
                                                <td><?php echo $nama;?></td>
                                              </tr> 
                                              <tr>
                                                <td>Jenis Kelamin</td>
                                                <td>:</td>
                                                <?php if($jenkel=='L'):?>
                                                <td>Laki-Laki</td>
                                                <?php else:?>
                                                <td>Perempuan</td>
                                                <?php endif;?>
                                              </tr> 
                                              <tr>
                                                <td>Guru Mata Pelajaran</td>
                                                <td>:</td>
                                                <td><?php echo $mapel;?></td>
                                              </tr>
                                              <tr>
                                                <td>Guru keterangan</td>
                                                <td>:</td>
                                                <td><?php echo $ket;?></td>
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
               <div class="" style="margin-bottom:130px"></div>
                	
                  <div class="college_gallery">
                                     
                                <!-- Our College Gallery -->    
                                <div class="college_gallery">
                                    <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;"><center>Gallery Photo Terbaru</center></h4></div>
                                    <ul>
                                          <?php 
                                            $data_foto=$this->db->query("SELECT * FROM galeri ORDER BY galeri_id DESC LIMIT 10");
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
                                                    <!-- <p><a href="<?php echo base_url('index.php/galeri')?>" class="gray" ><?php echo $judul;?></a></p> -->
                                                </div> 
                                           </li>
                                         <?php endforeach;?>
                                        
                                    </ul>
                                </div>                                 
                                </div>
                              </div>
</div>
    <div class="clear"></div>
  </div>
</div>   

<!-- Footer Section -->
<?php $this->load->view('v_footer'); ?>
