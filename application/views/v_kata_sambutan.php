<?php $this->load->view('v_header'); ?>
<?php $this->load->model('M_data'); ?>

<div id="content_section">
        		
                
                <div class="static_content pad2">
                	<BR>
                		<BR>
                			<BR>
                				<BR>
                                    <br>
                                    <BR>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                
                <div class="staticblock2">
                    	<a href="#"><img  src="<?php echo base_url().'template/images/busiti.jpg'?>"  alt="" /></a>
                        <h4>Kata Sambutan Kepala Sekolah</h4><br/>
                        <!-- <div style=’text-align:justify;’><p><?php echo $dt['data_sambutan'] ?></p>  --> 
                                <?php
                                  $no=0;
                                  $data_data=$this->db->query('SELECT * FROM data');
                                  foreach ($data_data->result_array() as $dt) :
                                     $no++;
                                     $id=$dt['data_id'];
                                     $sambutan=$dt['data_sambutan'];
                                     $visi=$dt['data_visi'];
                                     $misi=$dt['data_misi'];
                                     
                                  ?>
                                    <li>
                                    
                                        <div class="description">
                                            <div style='text-align:justify;'><p><?php echo $sambutan; ?></p>
                                         </div>
                                         <div class="clear"></div>
                                    </li>
                                <?php endforeach;?>
  
                    </div>
                </div>
                
             
             <div class="clear"></div>
			</div>
        <div class="clear"></div>
	</div>
</div>    
<!-- Footer Section -->
<?php $this->load->view('v_footer');?>