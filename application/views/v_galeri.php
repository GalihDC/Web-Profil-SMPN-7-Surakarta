<?php $this->load->view('v_header'); ?>

<!-- Footer Section -->
<!-- Content Seciton -->
        	<div id="content_section">
           		<!-- News Updates -->
            		<div class="" style="margin-bottom:130px"></div>
                    <div class="clear"></div>
				<!-- Gallery -->
                	<div class="gallery">
                    	<div class="gallery_top">
                        	<div class="gallery_heading">
                            	<h2>Gallery Photo</h2>
                            </div>
                            <div class="select_gallery">
                            	
                            </div>
                            <div class="clear"></div>
                        </div>
                    	<!-- Col1 -->
                        	<div class="categorydiv">
                            	<ul>
                                	  <li><a class="selected" href="#">Semua</a></li>
                                    <?php 
                                      $alb=$this->db->query('SELECT * FROM album');
                                      foreach ($alb->result_array() as $al) {
                                        $alb_id=$al['album_id'];
                                        $alb_nama=$al['album_nama'];
                                      
                                    ?>
                                    <li><a href="<?php echo base_url('index.php/galeri/album/').$alb_id;?>"><?php echo $alb_nama;?></a></li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                    		<div class="thumbdiv">
                            	<ul>
                                  <?php
                                  	$all_galeri=$this->db->query('SELECT * FROM galeri');
                                    foreach ($all_galeri->result_array() as $gr) {
                                      $id=$gr['galeri_id'];
                                      $judul=$gr['galeri_judul'];
                                      $gambar=$gr['galeri_gambar'];
                                      
                                  ?>
                                	  <li>
                                      <?php if(empty($gambar)):?>
                                              <div class="thumb" ><a href="<?php echo base_url().'assets/images/user_blank.png'?>" rel="galleryimg" class="galleryimg" title="<?php echo $judul;?>" ><img width="108" height="101" src="<?php echo base_url().'assets/images/user_blank.png';?>"  alt="" /></a></div> 
                                            <?php else:?>
                                              <div class="thumb" ><a href="<?php echo base_url().'assets/images/'.$gambar?>" rel="galleryimg" class="galleryimg" title="<?php echo $judul;?>" ><img width="108" height="101" src="<?php echo base_url().'assets/images/'.$gambar ?>"  alt="" /></a></div> 
                                            <?php endif;?>

                                      </li>
                                  <?php } ?>
                              </ul>
                            <div class="hdiv">&nbsp;</div>
                            </div>
                            
                    </div>    	
                <div class="clear"></div>
		    </div>	
		<div class="clear"></div>
	</div>
</div>    
<?php $this->load->view('v_footer'); ?>