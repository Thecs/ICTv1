    <div class="row " >
    <div class="col-xs-12 col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>">หน้าแรก</a></li>
            <li><a href="#">ข่าวทั้งหมด</a></li>
            <li class="active"><?=$web_news_topic?></li>
        </ol>
        <h5>
            <label class="  title_pr_news">ข่าว : <?=$web_news_topic?></label>
        </h5>
        <h5 class="text-left title_pr_news">
            <span class="label label-default bg"><?=$post_date?></span>
        </h5>
        <hr>
        <div  class="view_pr_news" > 

            <?php
				$FileNewsTopic = "../2012/newsdata/".$web_news_file.".txt";
                $handle= fopen($FileNewsTopic,'r');
                $handle_read = fread($handle, filesize($FileNewsTopic));
                $a = iconv('TIS-620', "utf-8", $handle_read);
                echo $a;
                fclose($handle);
                
            ?>

        </div>
        <hr>
        <div class="news_pr_foot">
            <div align="left" class="header_read_news">เข้าชม : <?=$web_news_pageview?> ครั้ง</div>
            <div align="left" class="header_read_news">ข่าวโดย : <?=$web_news_posted?></div>
            <div><table><tr height="10px"></tr></table></div>
        </div>
    </div>
    </div>