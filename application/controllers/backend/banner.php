<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class banner extends CI_Controller {

	 function __construct() {
		parent::__construct();
	}
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url()."backend/banner/index";
		$config['per_page'] = 5;
		$query = $this->db->query('SELECT * FROM banner where category = 4');
     	$total = $query->num_rows();
		//echo $total = $this->db->count_all('banner'); 
		$config['total_rows'] = $total;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		

		$ar = array("category =" => "4" );
		$this->pagination->initialize($config);
        $data['results'] = $this->db->select("*")->from("banner")->where($ar)->limit($config['per_page'],$this->uri->segment(4))->get()->result_array(); 

        

		$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('admin/banner/view_banner',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);

		$this->output->enable_profiler(TRUE);
	}
	function add_banner()
	{
		$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('admin/banner/view_addbanner',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);
		$this->output->enable_profiler(TRUE);
	}
	function edit_banner()
	{	$id = $this->uri->segment(4);
		$ar = array("id =" => $id );
        $data['results'] = $this->db->select("*")->from("banner")->where($ar)->get()->result_array();
        

		$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('admin/banner/view_editbanner',$data,true);


		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);
		$this->output->enable_profiler(TRUE);
	}
	function save_edit_banner()
	{	

		$txt_title = $this->input->post('txt_title');

		$txt_description = $this->input->post('txt_description');

		$file_pic = $this->input->post('file_pic');

		$config['upload_path'] = base_url().'images/banner/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '699';
		$config['max_height']  = '350';

		$this->load->library('upload', $config);
		echo "<pre>";
		foreach ($config as  $value) {
			echo $value['upload_path'];
		}
			echo "1234";
		
		die();
	}
	function del_banner()
	{
		$banner_id = $this->uri->segment(4);
		$this->db->delete('banner', array('id' => $banner_id)); 
		redirect(base_url().'backend/banner', 'location', 301);
		
	}
	private function save_add_banner()
	{
		$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$data = array(
		   'title' => 'My title' ,
		   'name' => 'My Name' ,
		   'date' => 'My date'
		);

		$this->db->insert('mytable', $data); 
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */