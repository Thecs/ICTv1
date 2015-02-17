<div class="row" >
    <div class="col-md-8 row" align="center">
        <div class="fluid_container">
            <?php 
              $query = $this->db->query("SELECT * FROM banner where banner.category = '4' ");
            ?>
            <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <?php
              foreach ($query->result() as $row)
              {
                 $banner_id =  $row->id;
                 $topic =  $row->topic;
                 $banner_post_date = $row->post_date;
                 $link = $row->link;
                 //echo $link;
              ?>
                  <div data-thumb="<?=base_url()?>images/banner/thumb/<?=$row->post_date?>.jpg" data-src="<?=base_url()?>images/banner/<?=$row->post_date?>.jpg" data-link="<?=$link?>" ?>
                      <div class="camera_caption fadeFromBottom">
                          <?=$topic?>
                      </div>
                  </div>
              <?php
              }
            ?>
            </div><!-- #camera_wrap_1 -->
        </div><!-- .fluid_container -->
    </div>

    <div class="col-md-4 row " align="left">
        <a href="<?=base_url()?>complaint_dean" target="_blank" class="btn btn-primary-hightlight btn-lg btn-block pin-link" style="background-color: #f1c40f;border-color: #f1c40f"><span class="glyphicon glyphicon-user"></span>&nbsp&nbspสายตรงคณบดี</a>
        <a href="http://www.ict.up.ac.th/" target="_blank" class="btn btn-primary-hightlight btn-lg btn-block pin-link" style="white-space: normal;"><span class="glyphicon glyphicon-user"></span>&nbsp&nbspสารจากคณบดี</a>
        <a href="http://www.ict.up.ac.th/admission/" target="_blank" class="btn btn-primary-hightlight btn-lg btn-block pin-link" style="white-space: normal;"><span class="glyphicon glyphicon-globe"></span>&nbsp&nbspข้อมูลหลักสูตร / ศึกษาต่อ</a>
        <a href="http://www.cidtec.ict.up.ac.th/" target="_blank" class="btn btn-primary-hightlight btn-lg btn-block pin-link" style="white-space: normal;"><span class="glyphicon glyphicon-globe"></span>&nbsp&nbspศูนย์พัฒนานวัตกรรม ฯ (CIDTEC)</a>
        <a href="http://www.ict.up.ac.th/coop/" target="_blank" class="btn btn-primary-hightlight btn-lg btn-block pin-link"><span class="glyphicon glyphicon-globe"></span>&nbsp&nbspโครงการสหกิจศึกษา</a>
        <a href="http://www.ict.up.ac.th/alumni/" target="_blank" class="btn btn-primary-hightlight btn-lg btn-block pin-link" style="white-space: normal;"><span class="glyphicon glyphicon-globe"></span>&nbsp&nbspข่าวสาร ศิษย์เก่าคณะ ICT</a>
        <a href="http://www.ict.up.ac.th/v1/agendaict/" target="_blank" class="btn btn-primary-hightlight btn-lg btn-block pin-link" style="white-space: normal;"><span class="glyphicon glyphicon-globe"></span>&nbsp&nbspรายงานการประชุม</a>
        
    </div>                   
</div>
    <div class="row margin-pin ">
      <div class="col-xs-6 col-sm-3 col-md-3 text-left"><a href="http://ict.up.ac.th/decaffair/" class="btn btn-lg text-pin" target="_blank"><img src="<?=base_url()?>images/desespro.png" width="32px" height="39px" > ระบบ Desespro</a></div>
      <div class="col-xs-6 col-sm-3 col-md-3 text-left"><a href="http://intra.up.ac.th/track" class="btn btn-lg text-pin" target="_blank"><img src="<?=base_url()?>images/tracking.png" width="32px" height="39px"> FDT System</a></div>
      <div class="col-xs-6 col-sm-3 col-md-3 text-left" style="margin-left:-20px"><a href="#" class="btn btn-lg text-pin"><img src="<?=base_url()?>images/news.png" width="32px" height="39px"> รายงานประจำปี</a></div>
      <div class="col-xs-6 col-sm-3 col-md-3 text-left" style="margin-left:-10px"><a href="#" class="btn btn-lg text-pin"><img src="<?=base_url()?>images/car.png" width="32px" height="39px"> ตารางการใช้รถตู้</a></div>
    </div>
    <hr style="color: #F0AD4E;background-color: #F0AD4E;height: 2px;">
      <div class="container " style="padding:20px;" >
            <div class="col-md-12" >
              <h1>
                <span style="<?php /* box-shadow: 0 0 3px 1px rgba(0,0,0,.35); */?> cursor:default" class="btn btn-info"><i class="glyphicon glyphicon-home"></i> ข่าวกิจกรรม</span>
              </h1>
            </div>

            <div class="row " style="margin-bottom: 10px;background-color: #F1C40F;color:#fff;">

            <?php 
              $query_news_banner = $this->db->query("SELECT * FROM web_news where web_news.category = '0' order by id DESC limit 0,4");
            ?>
            <?php
              foreach ($query_news_banner->result() as $web_news_row)
              {
                 $web_news_id =  $web_news_row->id;
                 $web_news_topic =  $web_news_row->topic;
                 $web_news_headline =  $web_news_row->headline;
                 $web_news_posted = $web_news_row->posted;
                 $web_news_file = $web_news_row->post_date;
                 $web_news_update_date = $web_news_row->update_date;
                 $web_news_post_date = $web_news_row->post;
              ?>
              <div class="col-sm-6 col-md-3 " style="">
                <div class="thumbnail">
                  <img class="img-rounded" src="<?=base_url()?>images/newsicon/<?=$web_news_file?>.jpg">
                  <div class="caption">
                    <h5 class="text-center " style="line-height: 20px"><b><?=$web_news_topic?></b></h5>
                    <hr>
                    <?php
                      $hd_line = "&nbsp&nbsp&nbsp&nbsp&nbsp".$web_news_headline;
                    ?>
                    
                    <p style="text-align: justify" class=""><?=iconv_substr($hd_line,0,150, "UTF-8").".....";?></p>

                    <p class="text-right"><a href="<?=base_url()."readnews_events/".$web_news_id?>" class="btn btn-default btn-xs" role="button" target="_blank"><b>อ่านต่อ</b></a></p>
                  </div>
                </div>
              </div>
              <?php
              }
            ?>
              
            </div>
            <div class="col-md-12"  >
              <p style="float:right"><a class="btn btn-info" role="button" <?php /* href="newsalls" target="_blank" */ ?>>กิจกรรมอื่น ๆ  &raquo;</a></p> 
            </div> 
        </div>
      <hr style="color: #F0AD4E;background-color: #F0AD4E;height: 2px;margin-top: -10px;">
		  <div class="container " >
          <div class="col-md-12">
            <h1>
              <span style="<?php /* box-shadow: 0 0 3px 1px rgba(0,0,0,.35); */?> cursor:default" class="btn btn-info"><i class="glyphicon glyphicon-home"></i> ข่าวสารจากหน่วยงานภายใน</span>
            </h1>
          </div>
          <div class="row ">
            <div class="col-md-4">
              <div class="news_box panel panel-primary" style="margin-left: 10px;">
                <span style=" cursor:default;margin-bottom: 5px;" class="btn-pic btn-pic-primary "><i class=" glyphicon glyphicon-stats"></i> My Social Media</span>
                
                <blockquote>
                  <div class="media">
                    <a class="pull-left" href="https://www.facebook.com/ictphayao?fref=ts" target="_blank">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?=base_url()?>/images/fb.jpg" style="width: 64px; height: 64px;">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">ICT Phayao</h4>
                      คณะ ICT มหาวิทยาลัยพะเยา
                    </div>
                  </div>
                </blockquote>
                <blockquote>
                  <div class="media">
                    <a class="pull-left" href="https://www.facebook.com/groups/130883837029095/" target="_blank">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?=base_url()?>/images/fb.jpg" style="width: 64px; height: 64px;">
                    </a>
                    
                      <div class="media-body">
                        <h4 class="media-heading">ชุมนุมวิชาการ</h4>
                        คณะ ICT มหาวิทยาลัยพะเยา
                      </div>
                  </div>
                </blockquote>
                <blockquote>
                  <div class="media">
                    <a class="pull-left" href="https://www.facebook.com/groups/348026945233869/" target="_blank">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?=base_url()?>/images/fb.jpg" style="width: 64px; height: 64px;">
                    </a>
                    
                      <div class="media-body">
                        <h4 class="media-heading">Job Career ICT</h4>
                        สายงานด้าน คอมพิวเตอร์ และ IT 
                      </div>
                  </div>
                </blockquote>
                <blockquote>
                  <div class="media">
                    <a class="pull-left" href="http://www.youtube.com/ICTPYOChannel" target="_blank">
                      <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?=base_url()?>/images/yt.jpg" style="width: 64px; height: 64px;">
                    </a>
                    
                      <div class="media-body">
                        <h4 class="media-heading">ICT@UP Channel</h4>
                        Media Social Clip On Youtube Channel
                      </div>
                  </div>
                </blockquote>
              </div>
            </div>
          
            <div class="col-md-8" >
              <div class=" bs-example-tabs" role="tabpanel" >
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">ข่าวประชาสัมพันธ์</a></li>
                  <!--
                  <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>
                  <li role="presentation" class=""><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a></li>
                  -->
                </ul>
                <div id="myTabContent" class="tab-content">
                  <br>
                  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <p>
                      <?php 
                        $dashboard_news = $this->db->query("SELECT * FROM web_news where web_news.category in (1,12,13) order by id DESC limit 0,9");
                      ?>
                      <?php
                        foreach ($dashboard_news->result() as $dashboard_news_row)
                        {
                          
                          $dashboard_news_id =  $dashboard_news_row->id;
                          $dashboard_news_category =  $dashboard_news_row->category;
                          $dashboard_news_topic =  $dashboard_news_row->topic;
                          $dashboard_news_headline =  $dashboard_news_row->headline;
                          $dashboard_news_posted = $dashboard_news_row->posted;
                          $dashboard_news_file = $dashboard_news_row->post_date;
                          $dashboard_news_update_date = $dashboard_news_row->update_date;
                          $dashboard_news_post_date = $dashboard_news_row->post;

                            if($dashboard_news_category == 1){
                              $ico_dashnews = "images/ico/bullet.PNG";
                            }else if($dashboard_news_category == 12){
                              $ico_dashnews = "images/ico/bullet.PNG";
                            }else if($dashboard_news_category == 13){
                              $ico_dashnews = "images/ico/research.png";
                            }
                        ?>
                      <span class="col1" style="margin-top: 30px;"><img src="<?=base_url().$ico_dashnews?>" width="10" height="10"> <a href="<?=base_url()."readnews/".$dashboard_news_id?>" target="_blank"><strong><?=$dashboard_news_topic?></strong></a><?=" - ".$dashboard_news_update_date?> : <?=iconv_substr($dashboard_news_headline,0,150, "UTF-8").".....";?><br>
                      </span>
                        <?php 
                        }
                        ?>
                      <br>
                      <!--
                      <span class="col1"><img src="<?=base_url()?>images/bullet.PNG" width="10" height="10"><a href="news.php?name=news&amp;file=readnews&amp;id=440" target="_blank"><strong> มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"</strong></a> - 21 พ.ย. 2557, 13:53 : มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"<br>
                      </span>
                      <br>
                      <span class="col1"><img src="<?=base_url()?>images/bullet.PNG" width="10" height="10"><a href="news.php?name=news&amp;file=readnews&amp;id=440" target="_blank"><strong> มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"</strong></a> - 21 พ.ย. 2557, 13:53 : มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"<br>
                      </span>
                      <br>
                      <span class="col1"><img src="<?=base_url()?>images/bullet.PNG" width="10" height="10"><a href="news.php?name=news&amp;file=readnews&amp;id=440" target="_blank"><strong> มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"</strong></a> - 21 พ.ย. 2557, 13:53 : มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"<br>
                      </span>
                      <br>
                      <span class="col1"><img src="<?=base_url()?>images/bullet.PNG" width="10" height="10"><a href="news.php?name=news&amp;file=readnews&amp;id=440" target="_blank"><strong> มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"</strong></a> - 21 พ.ย. 2557, 13:53 : มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"<br>
                      </span>
                      <br>
                      <span class="col1"><img src="<?=base_url()?>images/bullet.PNG" width="10" height="10"><a href="news.php?name=news&amp;file=readnews&amp;id=440" target="_blank"><strong> มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"</strong></a> - 21 พ.ย. 2557, 13:53 : มูลนิธิอายิโนะโมะโต๊ะ  ขอประกาศขยายระยะเวลาการรับสมัครทุนการศึกษามูลนิธิอายิโนะโมะโต๊ะ "ทุนส่งน้องเรียนจบ ประจำปี 2557"<br>
                      </span>
                    -->
                      <p style="float:right"><a class="btn btn-info" role="button" <?php /* href="newsalls/1" target="_blank" */?>>อ่านข่าวอื่น ๆ  &raquo;</a></p> 
                    </p>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr style="color: #F0AD4E;background-color: #F0AD4E;height: 2px;margin-top: 10px;">
          <div class="row ">
            <div class="col-md-6">
              <span style="<?php /* box-shadow: 0 0 3px 1px rgba(0,0,0,.35); */?> cursor:default;margin-bottom: 10px" class="btn btn-warning"><i class="glyphicon glyphicon-home"></i> ข่าวสารสำหรับนิสิต</span>
              <div class=" bs-example-tabs" role="tabpanel">
                <br>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <?php 
                        $dashboard_news_stu = $this->db->query("SELECT * FROM web_news where web_news.category in (1,12) order by id DESC limit 0,5");
                      ?>
                      <?php
                        foreach ($dashboard_news_stu->result() as $dashboard_news_stu_row)
                        {
                          
                          $dashboard_news_stu_id =  $dashboard_news_stu_row->id;
                          $dashboard_news_stu_category =  $dashboard_news_stu_row->category;
                          $dashboard_news_stu_topic =  $dashboard_news_stu_row->topic;
                          $dashboard_news_stu_headline =  $dashboard_news_stu_row->headline;
                          $dashboard_news_stu_posted = $dashboard_news_stu_row->posted;
                          $dashboard_news_stu_file = $dashboard_news_stu_row->post_date;
                          $dashboard_news_stu_update_date = $dashboard_news_stu_row->update_date;
                          $dashboard_news_stu_post_date = $dashboard_news_stu_row->post;

                        ?>
                      <p><span class="col1" style="margin-top: 30px;"><img src="<?=base_url()?>images/ico/bullet.PNG" width="10" height="10"> <a href="<?=base_url()."readnews/".$dashboard_news_stu_id?>" target="_blank"><strong><?=$dashboard_news_stu_topic?></strong></a><?=" - ".$dashboard_news_stu_update_date?> : <?=iconv_substr($dashboard_news_stu_headline,0,150, "UTF-8").".....";?>

                      </p>
                      <?php
                        }
                      ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class=" bs-example-tabs" role="tabpanel">
                <span style="<?php /* box-shadow: 0 0 3px 1px rgba(0,0,0,.35); */?> cursor:default;margin-bottom: 10px" class="btn btn-warning"><i class="glyphicon glyphicon-home"></i> ข่าวสารวิจัย</span>
                <div id="myTabContent" class="tab-content">
                  <br>
                  <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                    <?php 
                        $dashboard_news_res = $this->db->query("SELECT * FROM web_news where web_news.category in (13) order by id DESC limit 0,4");
                      ?>
                      <?php
                        if($dashboard_news_res->num_rows() == 0){
                          echo "<p style=\"font-weight: bold;text-align: center\"><span >-------- ยังไม่มีข่าวสาร --------</span></p>";
                        }else{
                          foreach ($dashboard_news_res->result() as $dashboard_news_res_row)
                          {
                            
                            $dashboard_news_res_id =  $dashboard_news_res_row->id;
                            $dashboard_news_res_category =  $dashboard_news_res_row->category;
                            $dashboard_news_res_topic =  $dashboard_news_res_row->topic;
                            $dashboard_news_res_headline =  $dashboard_news_res_row->headline;
                            $dashboard_news_res_posted = $dashboard_news_res_row->posted;
                            $dashboard_news_res_file = $dashboard_news_res_row->post_date;
                            $dashboard_news_res_update_date = $dashboard_news_res_row->update_date;
                            $dashboard_news_res_post_date = $dashboard_news_res_row->post;

                          ?>
                          <p><span class="col1" style="margin-top: 30px;"><img src="<?=base_url()?>images/ico/research.PNG" width="10" height="10"> <a href="<?=base_url()."readnews/".$dashboard_news_res_id?>" target="_blank"><strong><?=$dashboard_news_res_topic?></strong></a><?=" - ".$dashboard_news_res_update_date?> : <?=iconv_substr($dashboard_news_res_headline,0,150, "UTF-8").".....";?>

                          </p>
                          <?php
                          }
                        }
                      ?>
                    
                  </div>
                </div>
              </div>
              <p style="float:right"><a class="btn btn-info" role="button" <?php /* href="newsalls/1" target="_blank" */ ?>>อ่านข่าวอื่น ๆ  &raquo;</a></p> 
            </div>
          </div>
   		</div>
      <hr style="color: #F0AD4E;background-color: #F0AD4E;height: 2px;margin-top: 10px;">
        <div class="container">
        	<div class="col-md-7">
            <div class="container " style="margin-top:-15px;">

            <div class="row">
            
          		<h1 >
              <span style=" cursor:default " class="btn-pic btn-pic-primary "><i class=" glyphicon glyphicon-camera"></i> ICT Gallery</span>
              </h1>
              <br />
              <?php 
                $query_images = $this->db->query("SELECT COUNT(tbl_gallery_img.AlbumID)as iii,album.AlbumID,album.AlbumShot,album.AlbumName FROM album,tbl_gallery_img WHERE album.status='1' AND album.AlbumID=tbl_gallery_img.AlbumID GROUP BY album.AlbumID DESC LIMIT 0,4");
              ?>
              
              <div class="col-md-12">
                <div class="row" style="text-align:center">
                <?php
                  $loop_img = 1;
                  foreach ($query_images->result() as $row)
                  {
                    $AlbumID =  $row->AlbumID;
                    $AlbumName =  $row->AlbumName;
                    $AlbumShot = $row->AlbumShot;
                    
                    if($loop_img ==3){
                      echo "<div class='clearfix visible-xs'></div>";
                    }
                    echo "<div class='col-xs-6 col-sm-3'>";
                    echo "<a href='gallery/".$AlbumID."' title='".$AlbumName."' class='thumbnail' target=\"_blank\">";
                    echo "<img data-src='holder.js/140x140' class='img-rounded' alt='140x140' src='../2012/upload_pic/$AlbumShot' style='width: 100%; height: 100%;' >";
                    echo "<p class='text_img_title'>".$AlbumName."</p>";
                    echo "</a></div>"; 
                    $loop_img ++;
                  } 
                ?>
                </div>
                <br />
                <?php 
                $query_images = $this->db->query("SELECT COUNT(tbl_gallery_img.AlbumID)as iii,album.AlbumID,album.AlbumShot,album.AlbumName FROM album,tbl_gallery_img WHERE album.status='1' AND album.AlbumID=tbl_gallery_img.AlbumID GROUP BY album.AlbumID DESC LIMIT 5,4");
              ?>
                <div class="row" style="text-align:center">
                <?php
                  $loop_img = 1;
                  foreach ($query_images->result() as $row)
                  {
                    $AlbumID =  $row->AlbumID;
                    $AlbumName =  $row->AlbumName;
                    $AlbumShot = $row->AlbumShot;
                    
                    if($loop_img == 3){
                      echo "<div class='clearfix visible-xs'></div>";
                    }
                    echo "<div class='col-xs-6 col-sm-3'>";
                    echo "<a href='gallery/".$AlbumID."' title='".$AlbumName."' class='thumbnail' target=\"_blank\">";
                    echo "<img data-src='holder.js/140x140' class='img-rounded' alt='140x140' src='".base_url()."images/upload_pic/$AlbumShot' style='width: 100%; height: 100%;' >";
                    echo "<p class='text_img_title'>".$AlbumName."</p>";
                    echo "</a></div>"; 
                    $loop_img ++;
                  } 
                ?>     
                </div>
    		      </div>
            <br />
            <p style="float:right"><a href="ict_gallery/all_gallery" class="btn-pic btn-pic-primary" role="button">ภาพกิจกรรมอื่น ๆ  &raquo;</a></p> 
            </div>
          </div> <!-- /container -->
        
        </div> 
        <div class="col-md-5 video_box panel panel-primary">
          <span style=" cursor:default;margin-bottom: 5px;" class="btn-pic btn-pic-primary "><i class="glyphicon glyphicon-facetime-video"></i> Take Tour ICT</span>
          </br>

          <div class="container">
            <div class="span8">
            <div id="myCarousel" class="carousel slide">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
              </ol>
              <div class="carousel-inner" >
                <div class="item active">
                  <iframe width="100%" height="315" src="//www.youtube.com/embed/pu7y65rDXOI" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="item">
                  <iframe width="100%" height="315" src="//www.youtube.com/embed/FUsil9uax00" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="item">
                  <iframe width="100%" height="315" src="//www.youtube.com/embed/jMQ8kO6xEOs" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
            </div>
            </div>
          </div>


          <!--
          <br />
          <br />
          <span style=" cursor:default;margin-bottom: 5px;" class="btn-pic btn-pic-primary "><i class=" glyphicon glyphicon-stats"></i> Social Media</span>
          
          
          <blockquote>
            <div class="media">
              <a class="pull-left" href="https://www.facebook.com/ictphayao?fref=ts" target="_blank">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?=base_url()?>/images/fb.jpg" style="width: 64px; height: 64px;">
              </a>
              <div class="media-body">
                <h4 class="media-heading">ICT Phayao</h4>
                Contact US On Social Network
              </div>
            </div>
          </blockquote>
          <blockquote>
            <div class="media">
              <a class="pull-left" href="http://www.youtube.com/ICTPYOChannel" target="_blank">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?=base_url()?>/images/yt.jpg" style="width: 64px; height: 64px;">
              </a>
              
              <div class="media-body">
                <h4 class="media-heading">ICT UP Channel</h4>
                Media Social Clip On Youtube Channel
              </div>
            </div>
          </blockquote>
          <blockquote>
            <div class="media">
              <a class="pull-left" href="http://www.youtube.com/ICTPYOChannel" target="_blank">
                <img class="media-object" data-src="holder.js/64x64" alt="64x64" src="<?=base_url()?>/images/yt.jpg" style="width: 64px; height: 64px;">
              </a>
              
              <div class="media-body">
                <h4 class="media-heading">ICT UP Channel</h4>
                Media Social Clip On Youtube Channel
              </div>
            </div>
          </blockquote>
        -->
        </div>
      </div>
      </div>
    </div>
    </div>
<p style="float:right"><a  href="<?=base_url()?>admin/">Admin &raquo;</a></p> 
</div>


    