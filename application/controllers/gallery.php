<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gallery extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this -> load -> model('model_news');
	}
	public function index()
	{
		$id = $this->uri->segment(2) ;
        $query_album = $this->db->query("SELECT album.AlbumID,album.AlbumName,album.AlbumShot,album.status,album.`user`,tbl_gallery_img.img_id,tbl_gallery_img.img_name,tbl_gallery_img.gallery_id,tbl_gallery_img.img_create,tbl_gallery_img.AlbumID,tbl_gallery_img.user FROM album Inner Join tbl_gallery_img ON album.AlbumID = tbl_gallery_img.AlbumID where album.AlbumID = {$id} ");

        foreach ($query_album->result() as $query_album_row)
            {
                $data['album_id'] =  $query_album_row->AlbumID;
                $data['album_name'] =  $query_album_row->AlbumName;
                $data['album_shot'] =  $query_album_row->AlbumShot;
                $data['album_user'] =  $query_album_row->user;
                $data['album_img_id'] =  $query_album_row->img_id;
                $data['album_img_name'] =  $query_album_row->img_name;
                $data['album_img_create'] =  $query_album_row->img_create;
                @$data['album_description'] =  $query_album_row->AlbumDescription;
                
            }
        include_once 'asset/date_thai.php';
        //$data['post_date']=DateThai($data['web_news_post_date']);
		$data['title'] = "ภาพกิจกรรม :::: School Of Information And Communication Technology : University Of Phayao ::::";
		$content = $this->load->view('view_gallery',$data,true);

		$content_data=new stdClass();
		$content_data->content=$content;
		$this->load->view("template1/template",$content_data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */