<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	 function __construct() {
		parent::__construct();


	}
	public function index()
	{
		$this->load->model('model_index');
		$data['title'] = ":::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('view_index',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */