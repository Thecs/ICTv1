<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class curriculum extends CI_Controller {

	 function __construct() {
		parent::__construct();


	}
	public function index()
	{
		$data['title'] = "โครงสร้างหลักสูตร :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('information/view_curriculum',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */