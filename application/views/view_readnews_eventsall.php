<?php
	$id = $this->uri->segment(2) ;
	if(empty($id)){
		$id =0 ;
	}
	$query_newsalls = $this->db->query("SELECT * FROM web_news where web_news.category = {$id} order by id DESC   ");

	
?>
    <div class="row " >
    <div class="col-xs-12 col-md-12">
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>">หน้าแรก</a></li>
            <li class="active"><?=$title_cut?></li>
        </ol>
        <div class="container">


			<!-- Projects Row -->
				<div class="row">
				<?php
					$count=0;
					foreach ($query_newsalls->result() as $web_news_row)
					{
					$count++;
						$web_news_id =  $web_news_row->id;
						$web_news_topic =  $web_news_row->topic;
						$web_news_headline =  $web_news_row->headline;
						$web_news_posted = $web_news_row->posted;
						$web_news_file = $web_news_row->post_date;
						$web_news_update_date = $web_news_row->update_date;
						$web_news_pageview = $web_news_row->pageview;
						$web_news_post_date = $web_news_row->post;
						
						$hd_line = "&nbsp&nbsp&nbsp&nbsp&nbsp".$web_news_headline;
						?>
						
							<div class="col-md-3 portfolio-item">
								<a href="readnews_events/<?=$web_news_id?>" target="_blank">
									<div class="thumbnail">
										<img class="img-rounded" src="<?=base_url()?>images/newsicon/<?=$web_news_file?>.jpg">
									</div>
								</a>
								<h3>
									<a href="<?=base_url()."readnews_events/".$web_news_id?>" style="line-height: 30px"><?=$web_news_topic?></a>
								</h3>
								<p><?=iconv_substr($hd_line,0,150, "UTF-8").".....";?></p>
							</div>
						
						<?php
						
						if($count%4 == 0){
							echo "</div><hr><div class=\"row\">";
						}
					}
				?>
				
			<!-- /.row -->


			<hr>

			<!-- Pagination -->
			<div class="clear pagination">
				<ul>
					echo $pagination_link;
				</ul>    
			</div>
			<!-- 
			<div class="row text-center">
				<div class="col-lg-12">
					<ul class="pagination">
						<li>
							<a href="#">«</a>
						</li>
						<li class="active">
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#">»</a>
						</li>
					</ul>
				</div>
			</div>
			<!-- /.row -->

			<hr>

		</div>
    </div>
    </div>