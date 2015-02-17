<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="asset/Bootstrap-Image-Gallery-3.1.1/css/bootstrap-image-gallery.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="asset/Bootstrap-Image-Gallery-3.1.1/js/bootstrap-image-gallery.min.js"></script>

<script type="text/javascript" src="<?=base_url()?>asset/ckeditor/ckeditor.js" charset="utf-8"></script>
    <div class="row " >
    <div class="col-xs-12 col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>">หน้าแรก</a></li>
            <li><a href="#">ภาพกิจกรรม</a></li>
            <li class="active"><?=$album_name?></li>
        </ol>
        <h5>
            <label class="  title_pr_news">ข่าว : <?=$album_name?></label>
        </h5>
        <?php if(empty($album_description)){
            $album_description = "-";
        }
        ?>
        <text>
            <label class="  title_pr_news">รายละเอียด : <?=$album_description?></label>
        </text>
        <?php
            $id = $this->uri->segment(2) ;
             $query_album = $this->db->query("SELECT album.AlbumID,album.AlbumName,album.AlbumShot,album.status,album.`user`,tbl_gallery_img.img_id,tbl_gallery_img.img_name,tbl_gallery_img.gallery_id,tbl_gallery_img.img_create,tbl_gallery_img.AlbumID,tbl_gallery_img.user FROM album Inner Join tbl_gallery_img ON album.AlbumID = tbl_gallery_img.AlbumID where album.AlbumID = {$id} ");
        ?>
        <div class="row" style="text-align:center" id="links">
            
                <?php
                
                $loop_img = 1;
                  foreach ($query_album->result() as $row)
                  {
                    $AlbumID =  $row->AlbumID;
                    $AlbumName =  $row->AlbumName;
                    $AlbumShot = $row->AlbumShot;
                    $img_name = $row->img_name;
                    echo $user = $row->user;
                    
                    if($loop_img == 3){
                      echo "<div class='clearfix visible-xs'></div>";
                    }
                    echo "<div class='col-xs-6 col-sm-3' style='margin-bottom:10px'>";
                    echo "<a href='".base_url()."images/img_upload/$img_name.jpg' title='$img_name' data-gallery> <img data-src='holder.js/140x140' class='img-thumbnail' alt='140x140' src='".base_url()."images/img_upload/$img_name.jpg' style='width: 230px; height: 180px;' alt='$img_name'>";
                    echo "</a></div>"; 
                    $loop_img ++;
                  } 
                ?>     
        </div>
        
        <div class="news_pr_foot">
            <div align="left" class="header_read_news">ข่าวโดย : <?=$user?></div>
            <div><table><tr height="10px"></tr></table></div>
        </div>
        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
            <div id="blueimp-gallery" class="blueimp-gallery">
                <!-- The container for the modal slides -->
                <div class="slides"></div>
                <!-- Controls for the borderless lightbox -->
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                <div class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body next"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left prev">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-primary next">
                                    Next
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>