<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class screener_model extends CI_Model
{
	
	function process_screen( $POST, $userIP, $submission_id, $submission_time ) {

		print_r($POST);

		$screener_count = 7;

		$screen_1 = $POST['screen_1'];
		$screen_2 = $POST['screen_2'];
		$screen_3 = $POST['screen_3'];
		$screen_4 = $POST['screen_4'];
		$screen_5 = $POST['screen_5'];
		$screen_6 = $POST['screen_6'];
		$screen_7 = $POST['screen_7'];

		for($i = 1; $i <= $screener_count; $i++) {

			$data = array(
			   'question_name' => 'screen_'.$i.'',
			   'question_response' => $screen_1,  
			   'submission_id' => $submission_id, 
			   'user_ip' => $userIP, 
			   'status' => 'new', 
			   'submission_time' => $submission_time
			);

			$this->db->insert('screener_survey', $data);

		}

	}

	// function screen_results( $userIP ) {

	// 	$sql = "SELECT entry_id, question_name, question_response, submission_id, user_ip, status, submission_time 
	// 	FROM  screener_survey 
	// 	WHERE user_ip = 1 
	// 	ORDER BY orderByVal ASC";

	// 	$sqlResult = $this->db->query($sql);

	// 	return $sqlResult->result();


	// }

}