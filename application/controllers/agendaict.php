<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class agendaict extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('model_news');
	}
	public function index()
	{
		$config['permitted_uri_chars'] = 'a-z 0-9~%.:&_\-'; 
		$data['title'] = "รายงานการประชุม :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('view_agenda',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */