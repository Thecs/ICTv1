<?php
class model_index  extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function report_news() {
		//$query = $this -> db -> get('tb_book');
		//return $query -> result();
		
		$query1 = $this->db->query('
		select student.ID ,student.PREFIX,student.NAME,student.SURNAME,student.COURSE_NAME,student.COURSE_ID,student.COURSE_SECTION,student.ROOM,student.TEACH_FNAME,student.TEACH_LNAME from student  where student.ID = "'.$stuid.'" and (student.COURSE_ID = 273254 or student.COURSE_ID = 235013 or student.COURSE_ID = 254272 or student.COURSE_ID = 273451 )  group by student.COURSE_ID order by student.ID');
		//return $query->num_rows();
		return $query1->result();
		//$query = $this -> db -> get()->result();
	}

	/*function report_evaluated2($stuid,$TEACH_FNAME,$TEACH_LNAME) {
		//$query = $this -> db -> get('tb_book');
		//return $query -> result();
		
		$query2 = $this->db->query('select student.ID,student.PREFIX,student.NAME,student.SURNAME,student.COURSE_NAME,student.COURSE_ID,student.COURSE_SECTION,student.ROOM,student.TEACH_FNAME,student.TEACH_LNAME from student,evaluted where student.ID = "'.$stuid.'" group by student.TEACH_FNAME order by student.COURSE_ID');
		//return $query->num_rows();
		return $query2->result();
		//$query = $this -> db -> get()->result();
	}
*/
	function call_evaluated1($user_id){
		$query1 = $this->db->query('select * from evaluted where evaluted.evaluted_stuid = "'.$user_id.'" and evaluted.evaluted_poll_id = "1"');
		
		return $query1->num_rows();
	}

	function call_evaluated2($user_id){
		$query2 = $this->db->query('select * from evaluted where evaluted.evaluted_stuid = "'.$user_id.'" and evaluted.evaluted_poll_id = "2"');
		
		return $query2->num_rows();
	}
	function call_evaluated3($user_id){
		$query3 = $this->db->query('select * from evaluted where evaluted.evaluted_stuid = "'.$user_id.'" and evaluted.evaluted_poll_id = "3"');
		
		return $query3->num_rows();
	}
	function call_evaluated4($user_id){
		$query4 = $this->db->query('select * from evaluted where evaluted.evaluted_stuid = "'.$user_id.'" and evaluted.evaluted_poll_id = "4"');
		
		return $query4->num_rows();
	}
	function call_evaluated5($user_id){
		$query5 = $this->db->query('select * from evaluted where evaluted.evaluted_stuid = "'.$user_id.'" and evaluted.evaluted_poll_id = "5"');
		
		return $query5->num_rows();
	}

	function save_evaluated($poll,$stuid,$radio1,$radio2,$radio3,$radio4,$radio5,$radio6,$radio7,$radio8,$radio9,$radio10,$radio11,$radio12,$radio13,$radio14,$radio15,$radio16,$radio17,$radio18,$radio19,$radio20,$radio21,$radio22,$radio23,$radio24,$radio25,$text_recommend1,$text_recommend2,$text_recommend3,$text_recommend4){
		/*
		$data_insert_student_evaluted = array(
   						'student_id' => $stuid,
					);
		$this->db->insert('evaluted', $data_insert_student_evaluted);
		*/

		$data_insert_evaluated = array(
   						'evaluted_poll_id' => $poll,
   						'evaluted_stuid' => $stuid,
   						'evaluted_value1' => $radio1,
   						'evaluted_value2' => $radio2,
   						'evaluted_value3' => $radio3,
   						'evaluted_value4' => $radio4,
   						'evaluted_value5' => $radio5,
   						'evaluted_value6' => $radio6,
   						'evaluted_value7' => $radio7,
   						'evaluted_value8' => $radio8,
   						'evaluted_value9' => $radio9,
   						'evaluted_value10' => $radio10,
   						'evaluted_value11' => $radio11,
   						'evaluted_value12' => $radio12,
   						'evaluted_value13' => $radio13,
   						'evaluted_value14' => $radio14,
   						'evaluted_value15' => $radio15,
   						'evaluted_value16' => $radio16,
   						'evaluted_value17' => $radio17,
   						'evaluted_value18' => $radio18,
   						'evaluted_value19' => $radio19,
   						'evaluted_value20' => $radio20,
   						'evaluted_value21' => $radio21,
   						'evaluted_value22' => $radio22,
   						'evaluted_value23' => $radio23,
   						'evaluted_value24' => $radio24,
   						'evaluted_value25' => $radio25,
   						'evaluted_recommend1' => $text_recommend1,
   						'evaluted_recommend2' => $text_recommend2,
   						'evaluted_recommend3' => $text_recommend3,
   						'evaluted_recommend4' => $text_recommend4,
   						'eveluted_date' => date("Y-m-d H:i:s")
					);
		$this->db->insert('evaluted', $data_insert_evaluated);
	}
	public function newsalls($num,$offset,$id){
        return $this->db->select("*")->from("web_news")->where("category ",$id)->limit($num,$offset)->get()->result();
        
    }

}
?>