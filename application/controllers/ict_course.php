<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ict_course extends CI_Controller {

	 function __construct() {
		parent::__construct();


	}
	public function index()
	{
		$data['title'] = "หลักสูตรที่เปิดสอน :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('view_ict_course',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */