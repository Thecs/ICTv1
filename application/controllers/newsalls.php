<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class newsalls extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('model_news');
	}
	public function index()
	{
		$this->load->model("model_index");
		
		
		$this->load->library('pagination');
 
		$category_id = $this->uri->segment(2);
		$this->ict->where('category ',$category_id);
		$total_record = $this->db->get('table')->num_rows();
		 
		$config = array(
				'base_url' 		=> base_url().'controller/'.$this->uri->segment(2),
				'total_rows' 	        => $total_record ,
				'per_page'		=> 10,
				'uri_segment' 		=> 3,   // รับค่าต่อจาก $this->uri->segment(2) 
				'use_page_numbers'  => true,
				'full_tag_open' 	=> '<ul class="pagination pagination-sm">',
				'full_tag_close' 	=> '</ul>',
				'num_tag_open'		=> '<li>',
				'num_tag_close' 	=> '</li>',
				'cur_tag_open' 		=> '<li class="disabled"><li class="active"><a href="#">',
				'cur_tag_close' 	=> '<span class="sr-only"></span></a></li>',
				'first_link' 		=> '<small><i class="glyphicon glyphicon-chevron-left"></i></small>First',
				'first_tag_open' 	=> '<li>',
				'first_tag_close' 	=> '</li>',
				'next_link'  		=> 'Next &raquo;',
				'next_tag_open' 	=> '<li>',
				'next_tag_close' 	=> '</li>',
				'prev_link' 		=> '&laquo;  Prev',
				'prev_tag_open' 	=> '<li>',
				'prev_tag_close' 	=> '</li>',
				'last_link' 		=> 'Last <small><i class="glyphicon glyphicon-chevron-right"></i></small>',
				'last_tag_open' 	=> '<li class="next page">',
				'last_tag_close' 	=> '</li>',
		 
		);
		$this->pagination->initialize($config);
		
		
		
		
		$id = $this->uri->segment(2) ;
		if(empty($id)){
			$id =0 ;
			$data['id']=0;
		}
		if($id == 0){
			
			include_once 'asset/date_thai.php';
			//$data['post_date']=DateThai($data['web_news_post_date']);
			//$data['post_date']=$data['web_news_post_date']." น.";
			$data['title'] = "ข่าวกิจกรรมทั้งหมด :::: School Of Information And Communication Technology : University Of Phayao ::::";
			$data['title_cut'] = "ข่าวกิจกรรมทั้งหมด";
			
			//$data["newsalls"] = $this->model_index->newsalls($config['per_page'],$this->uri->segment(2),$data['id']);
			$content = $this->load->view('view_readnews_eventsall',$data,true);
			
			echo $this->pagination->create_links();
		}else{
			$query_news_banner = $this->db->query("SELECT * FROM web_news WHERE web_news.id= {$id} ");

			foreach ($query_news_banner->result() as $web_news_row)
				{
					$data['web_news_id'] =  $web_news_row->id;
					$data['web_news_topic'] =  $web_news_row->topic;
					$data['web_news_headline'] =  $web_news_row->headline;
					$data['web_news_posted'] = $web_news_row->posted;
					$data['web_news_file'] = $web_news_row->post_date;
					$data['web_news_update_date'] = $web_news_row->update_date;
					$data['web_news_pageview'] = $web_news_row->pageview;
					$data['web_news_post_date'] = $web_news_row->post;
				}
			//$this->model_news->up_date_read_news($data['web_news_pageview']+1,$data['web_news_id']);
			include_once 'asset/date_thai.php';
			//$data['post_date']=DateThai($data['web_news_post_date']);
			//$data['post_date']=$data['web_news_post_date']." น.";
			$data['title'] = "ข่าวทั้งหมด :::: School Of Information And Communication Technology : University Of Phayao ::::";
			$data['title_cut'] = "ข่าวทั้งหมด";
			$data['pagination_link'] = $this->pagination->create_links();
			$content = $this->load->view('view_readnews_all',$data,true);
		}
		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */