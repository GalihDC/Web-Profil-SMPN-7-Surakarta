<?php $this->load->view('v_header'); ?>

<div id="content_section">
            <!-- News Updates -->
                
      <div class="clear"></div>
        <!-- Col1 -->
                  <div class="col1">
                      <div class="" style="margin-bottom:130px"></div>
                      <!-- Banner -->
                          <div id="banner">
                            <a href="#"><img src="<?php echo base_url().'assets/images/72727d01bd6ad29229caaa68205c917c.jpeg'?>" alt="" width="700" height="350"/></a>



                          <div id="paginate-slider2" class="pagination">

                          </div>
                    <script type="text/javascript" src="<?php echo base_url().'template/js/slider.js'?>" ></script>
                              
               </div>


                         <!-- Content Heading -->
                <div class="content_heading"><br>
                                <div class="heading"><h2>Selamat datang di SMP N 7 Surakarta</h2> </div>
                          
                            </div>
                             <p class="text" >
                                 Website ini adalah website yang dibangun untuk SMP 7 Surakarta untuk menunjang transparasi informasi dan promosi sekolah.  
                                 <h4>VISI</h4><br/>
                                <p>Ungul dalam prestasi bedasarkan Iman dan Taqwa</p></br> 
                        
                                <h4>MISI</h4><br/>
                                  <p> 1. Melaksanakan pembelajaran dan bimbingan secara efektif <br>
                                      2. Menumbuhkan semangat keunggulan secara intensif kepada seluruh warga sekolah <br>
                                      3. Mendorong dan membantu setiap siswa untuk mengenali potensi dirinya, sehingga dapat dikembangkan secara optimal <br>
                                      4. Memberdayakan MGMP Sekolah seluruh mata pelajaran</p>
                        

                             </p>
                          <div class="clear"></div>
                             <!-- Content Block -->
                                <div class="contentblock">
                                    <!-- Tabs -->   
                                        <div class="tabwrapper">
                                            <div class="tabs_links">
                                                <ul>
                                                    <li><a href="#tab1">Pengumuman</a></li>
                                                    <li><a href="#tab2">Agenda</a></li>
                                                    
                                                </ul>
                                            </div>
                                            <div class="tab_content" id="tab1" style="display:none" >
                                                <ul>
                                                <?php
                                                  $no=0;
                                                    foreach ($pengumuman as $p) :
                                                       $no++;
                                                       $id=$p['pengumuman_id'];
                                                       $judul=$p['pengumuman_judul'];
                                                       $deskripsi=$p['pengumuman_isi'];
                                                       $author=$p['pengumuman_author'];
                                                       $tanggal=$p['pengumuman_tanggal'];
                                                       
                                                    ?>

                                                  <li>
                                                      <div class="thumb">
                                                          <a href="<?php echo base_url('index.php/pengumuman')?>"><img width="60" height="60" src="<?php echo base_url().'template/images/pengumuman.png'?>"  alt=" " /></a>
                                                         </div>
                                                         <div class="descripton">
                                                          <h6><a href="<?php echo base_url('index.php/pengumuman')?>"><?php echo $judul;?></a></h6>
                                                            <em>(Posted on <?php echo $tanggal;?>)</em>
                                                            <p> <?php echo limit_words($deskripsi,10).'...';?></p>
                                                        
                                                        </div>
                                                    </li>
                                                    <?php endforeach; ?>

                                                </ul>
                                                <div class="clear"></div>
                                            </div>
                                            
                                            <div class="tab_content" id="tab2" style="display:none" >
                                                <ul>
                                                      <?php
                                                      $no=0;
                                                        foreach ($agenda as $ag):
                                                          $no++;
                                                         $id=$ag['agenda_id'];
                                                         $judul=$ag['agenda_nama'];
                                                         $deskripsi=$ag['agenda_deskripsi'];
                                                         $author=$ag['agenda_author'];
                                                         $tanggal=$ag['agenda_tanggal'];



                                                    ?>
                                                  <li>
                                                      <div class="thumb">
                                                          <a href="<?php echo base_url('index.php/agenda')?>"><img width="60" height="60" src="<?php echo base_url().'template/images/agenda.png'?>"  alt=" " /></a>
                                                         </div>
                                                         <div class="descripton">
                                                          <h6><a href="<?php echo base_url('index.php/agenda')?>"><?php echo $judul;?></a></h6>
                                                            <em>(Posted on <?php echo $tanggal;?>)</em>
                                                            <p> <?php echo limit_words($deskripsi,10).'...';?></p>
                                                        
                                                        </div>
                                                    </li>
                                                      <?php endforeach; ?>
                                                </ul> 
                                                <div class="clear"></div>
                                            </div>
                                            
                                           
                                            
                                        </div>
                                        <!-- Search Course -->

                                            <div class="search_course">
                                                <h4>Download</h4>
                                                Silahkan download file terbaru berikut:
                                                <div class="box">
                                                     <div class="apply_now">
                                                      <a class="aply_now" href="#">Download</a>
                                                      
                                                    </div>
                                                 <!-- Degree Type -->
                                                  <div class="degree_type"><br/>
                                                  <ul>
                                                  <?php
                                                    $no=0;
                                                        foreach ($files as $f):
                                                          $no++;

                                                            $id=$f['file_id'];
                                                            $judul=$f['file_judul'];
                                                            $deskripsi=$f['file_deskripsi'];
                                                            $oleh=$f['file_oleh'];
                                                            $tanggal=$f['file_tanggal'];
                                                            $download=$f['file_download'];
                                                            $file=$f['file_data'];
                                                  ?>
                                                      
                                                        <li> <span><a href="<?php echo base_url().'files' ?>"><?php echo $judul;?></a></span> <a class="btn right" href="<?php echo base_url().'index.php/files/aksi_download/'?><?php echo $f['file_data'] ?>">Download</a></li>
                                                  <?php endforeach;?>
                                                        

                                                    </ul>
                                                  </div> 
                                                
                                                    <div class="clear"></div>
                                                    
                                                    <!-- apply now -->
                                                    <div class="apply_now">
                                                        <a class="aply_now" href="#"></a>
                                                        <a class="find_out_how" href="<?php echo base_url('index.php/files')?>">Lihat Semua</a>
                                                    </div>
                                                </div>       
                                               
                                            </div>
                                        <div class="clear"></div>
                                    </div>     
                                <div class="clear"></div>
                            <!-- col1 ends -->  
                    </div>
               <!-- Col2 -->
                    <div class="col2">
                        <div class="" style="margin-bottom: 130px">
                            
                        </div>
                            <!-- Blog guru dan Siswa Baru --> 
                                <div class="college_gallery">
                                    <div style="background-color:#fffdd9;height:35px;font-size:16px;border-bottom:1px solid #ccc;"><h4 style="padding-top:5px;padding-left:9px;"><center>Daftar Guru</center> </h4></div>
                                    <ul>
                                          <?php 
                                            $data_guru=$this->db->query("SELECT * FROM guru ORDER BY guru_id DESC LIMIT 8");
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
            <!-- Slder -->  
                  
            </div>  
        <div class="clear"></div>
    </div>
</div>    
                         	
<?php $this->load->view('v_footer');?>

</body>
</html>
