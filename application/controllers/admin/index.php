<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	 function __construct() {
		parent::__construct();
		$this->load->helper('captcha');
	}
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required');


		$data['title'] = "เข้าสู่ระบบจัดการ :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('admin/view_admin',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);
		//$this->output->enable_profiler(TRUE);
	}
	public function chk_authen()
	{
		$sql_chk_user = "select * from authen where authen.authen_user = '".$this->input->post('username')."' and authen.authen_pass = '".md5($this->input->post('password'))."' and authen.authen_user = '1' ";
		$query_chk_user = $this->db->query($sql_chk_user);
		$row_chk_user = $query_chk_user->num_rows();

		// First, delete old captchas
		$expiration = time()-7200; // Two hour limit
		$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);

		// Then see if a captcha exists:
		$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
		$binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
		$query = $this->db->query($sql, $binds);
		$row = $query->num_rows();


		if ($row_chk_user == 0){
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
		    echo "<script>alert ('ไม่พบข้อมูลของท่านในระบบ'); history.back(); </script> ";
		}else if ($row == 0)
		{
			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
		    echo "<script>alert ('กรุณากรอกข้อความในภาพให้ถูกต้อง'); history.back(); </script> ";
		}
		else{
			foreach ($query_chk_user->result() as $row)
			{
			    $authen_status = $row->authen_status;
			}
			if($authen_status == "1"){
				$newdata = array(
                   'username'  => 'administrator',
                   'logged_in' => TRUE
               	);
				$this->session->set_userdata($newdata);	
				
				redirect(base_url().'admin/index/main_manage_chk_site','redirect');
			}else if($authen_status == "2"){
				$newdata = array(
                   'username'  => 'dean',
                   'logged_in' => TRUE
               	);
				$this->session->set_userdata($newdata);	

				redirect('admin/index/main_manage_chk_site','redirect');
			}
			else if($authen_status == "3"){
				$newdata = array(
                   'username'  => 'affair',
                   'logged_in' => TRUE
               	);
				$this->session->set_userdata($newdata);	

				redirect('admin/index/main_manage_chk_site','redirect');
			}
			else if($authen_status == "4"){
				$newdata = array(
                   'username'  => 'ictpr',
                   'logged_in' => TRUE
               	);
				$this->session->set_userdata($newdata);	

				redirect('admin/index/main_manage_chk_site','redirect');
			}
			else{
				redirect('admin/','redirect');
			}
			$this->output->enable_profiler(TRUE);
		}
		
	
	}
	function main_manage_chk_site()
	{
		if($this->session->userdata('username') == 'administrator' && $this->session->userdata('logged_in') == true){
			$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
			$content = $this->load->view('admin/view_main_admin_site',$data,true);

			$content_data=new stdClass();
			$content_data->content=$content;
			$this->load->view("template1/template",$content_data);
			
		}else if($this->session->userdata('username') == 'dean' && $this->session->userdata('logged_in') == true){
			$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
			$content = $this->load->view('admin/view_main_dean_site',$data,true);

			$content_data=new stdClass();
			$content_data->content=$content;
			$this->load->view("template1/template",$content_data);
		}else if($this->session->userdata('username') == 'affair' && $this->session->userdata('logged_in') == true){
			$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
			$content = $this->load->view('admin/view_main_affair_site',$data,true);

			$content_data=new stdClass();
			$content_data->content=$content;
			$this->load->view("template1/template",$content_data);
		}else if($this->session->userdata('username') == 'ictpr' && $this->session->userdata('logged_in') == true){
			$data['title'] = "ระบบจัดการเว็บไซต์ :::: School Of Information And Communication Technology : University Of Phayao ::::";
			$content = $this->load->view('admin/view_main_ictpr_site',$data,true);

			$content_data=new stdClass();
			$content_data->content=$content;
			$this->load->view("template1/template",$content_data);
		}else{
			$this->session->sess_destroy();
			redirect('admin/','redirect');
		}
		//$this->output->enable_profiler(TRUE);
	}
	function logout(){
		$this->session->sess_destroy();
		?>
		<script type="text/javascript">
			alert "ออกจากระบบเรียบร้อย";
		</script>
		<?php
		redirect('admin/','redirect');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */