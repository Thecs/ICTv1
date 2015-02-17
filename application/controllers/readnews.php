<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class readnews extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('model_news');
	}
	public function index()
	{
		$id = $this->uri->segment(2) ;
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
        $this->model_news->up_date_read_news($data['web_news_pageview']+1,$data['web_news_id']);
        include_once 'asset/date_thai.php';
        //$data['post_date']=DateThai($data['web_news_post_date']);
        $data['post_date']=$data['web_news_post_date']." น.";
		$data['title'] = "ข่าวกิจกรรมคณะ :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('view_readnews',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */