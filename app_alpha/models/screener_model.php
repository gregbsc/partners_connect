<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class screener_model extends CI_Model
{
	
	function process_screen( $POST ) {

		$submission_id = md5( time() );
		$userIP = $_SERVER['REMOTE_ADDR'];

		$screen_1 = $POST['screen_1'];
		$screen_2 = $POST['screen_2'];
		$screen_3 = $POST['screen_3'];
		$screen_4 = $POST['screen_4'];
		$screen_5 = $POST['screen_5'];
		$screen_6 = $POST['screen_6'];
		$screen_7 = $POST['screen_7'];

		for($i = 1; $i <= 7; $i++) {

			$data = array(
			   'question_name' => 'screen_'.$i.'' ,
			   'question_response' => $screen_1 ,
			   'submission_id' => $submission_id , 
			   'user_ip' => $userIP
			);

			$this->db->insert('screener_survey', $data); 

		}

	}

}