<?php $this->load->view('v_header'); ?>
<!-- Content Seciton -->
        	<div id="content_section">
           		<!-- News Updates -->
              <br><br><br><br><br><br><br><br><br><br>
            		
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
                        <?php
                        if ($data) {
                           foreach ($data as $val) {
                              $gr = $val;
                            }
                         }else{
                            foreach ($alb as $value) {
                              $gr = $value['album_id'];
                            }
                         }
                            
                         ?>
                        	<div class="categorydiv">
                            	<ul>
                                	  <li><a href="<?php echo base_url().'index.php/galeri'?>">Semua</a></li>
                                    <?php 
                                      foreach ($alb as $i) {
                                        $alb_id=$i['album_id'];
                                        $alb_nama=$i['album_nama'];
                                        
                                    ?>
                                    <?php if ($data) { ?>
                                      <?php if($gr['galeri_album_id']==$alb_id):?>
                                      <li><a href="<?php echo base_url().'index.php/galeri/album/'.$alb_id;?>" class="selected"><?php echo $alb_nama;?></a></li>
                                      <?php else:?>
                                        <li><a href="<?php echo base_url().'index.php/galeri/album/'.$alb_id;?>"><?php echo $alb_nama;?></a></li>
                                      <?php endif;?>
                                      <?php }else{ ?>
                                            <?php if($gr==$alb_id):?>
                                          <li><a href="<?php echo base_url().'index.php/galeri/album/'.$alb_id;?>" class="selected"><?php echo $alb_nama;?></a></li>
                                          <?php else:?>
                                            <li><a href="<?php echo base_url().'index.php/galeri/album/'.$alb_id;?>"><?php echo $alb_nama;?></a></li>
                                          <?php endif;?>
                                      <?php } ?>
                                    <?php } ?>
                                    
                                    
                                </ul>
                            </div>
                            <?php if ($data){ ?>
                                <div class="thumbdiv">
                              <ul>
                                  <?php
                                    foreach ($data as $a) {
                                      $id=$a['galeri_id'];
                                      $judul=$a['galeri_judul'];
                                      $gambar=$a['galeri_gambar'];
                                      
                                  ?>
                                    <li><a href="<?php echo base_url().'assets/images/'.$gambar?>" rel="fancybox" class="fancybox" title="<?php echo $judul;?>" ><img width="108" height="101" src="<?php echo base_url().'assets/images/'.$gambar?>"  alt="" /></a></li>
                                  <?php } ?>
                              </ul>
                            <div class="hdiv">&nbsp;</div>
                            </div>     
                            <?php }else{ ?>
                                <div class="thumbdiv">
                              <ul>

                                <h2>Galeri Kosong</h2>
                                  
                                 
                              </ul>
                            <div class="hdiv">&nbsp;</div>
                            </div>
                            <?php } ?>
                    		
                            
                    </div>    	
                <div class="clear"></div>
		    </div>	
		<div class="clear"></div>
	</div>
</div>    
<!-- Footer Section -->
  <script>
  $(document).ready(function () {
          $('.fancybox').fancybox();
});
          </script>
<?php $this->load->view('v_footer');?>
</body>
</html>