<?php
class model_news extends CI_Model {
	function __construct() {
		parent::__construct();
		//$this->load->database();
	}
        
	function select_show_news() {
	$query = $this->db->query("select * from web_news where category =  2 order by id DESC limit 0,14 ");	
			return $query;
	}
	function select_show_news_it() {
	$query = $this->db->query("select * from web_news where category =  3 order by id DESC limit 0,14 ");	
			return $query;
	}
	function select_news() {
		$query = $this->db->query("select * from web_news where category = 2 order by id DESC");	
                return $query;
	}
	function select_news_it() {
		$query = $this->db->query("select * from web_news where category = 3  order by id DESC");	
                return $query;
	}
    function add_news($category,$topic,$headline,$posted_file,$post_date,$update_date,$pageview,$post_by) {
		$data = array(
                    'category' => $category,
                    'topic' => $topic,
                    'headline' => $headline,
                    'posted_file' => $posted_file,
                    'post_date' => $post_date,
                    'update_date' => $update_date,
                    'pageview' => $pageview,
                    'post_by' => $post_by
                );
	$this->db->insert('web_news', $data); 
	}
	function add_news_it($category,$topic,$headline,$posted_file,$post_date,$update_date,$pageview,$post_by) {
		$data = array(
                    'category' => $category,
                    'topic' => $topic,
                    'headline' => $headline,
                    'posted_file' => $posted_file,
                    'post_date' => $post_date,
                    'update_date' => $update_date,
                    'pageview' => $pageview,
                    'post_by' => $post_by
                );
	$this->db->insert('web_news', $data); 
	}
    function read_news($p) {
		$query = $this->db->query("select * from web_news where id = '".$p."'");	
        return $query;
	}
	function up_date_read_news($pageview,$web_news_id) {
		$query = $this->db->query("update web_news SET web_news.pageview = '".$pageview."' where web_news.id = '".$web_news_id."' ");	
	}
	function news_show() {
		$query = $this->db->query("select * from web_news order by id DESC");	
		return $query;
	}

}
?>