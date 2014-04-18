<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class screener_model extends CI_Model
{
	
	function process_screen( $POST, $userIP, $submission_id, $submission_time ) {

		$screener_count = 7;

		$screen[1] = $POST['screen_1'];
		$screen[2] = $POST['screen_2'];
		$screen[3] = $POST['screen_3'];
		$screen[4] = $POST['screen_4'];
		$screen[5] = $POST['screen_5'];
		$screen[6] = $POST['screen_6'];
		$screen[7] = $POST['screen_7'];

		for($i = 1; $i <= $screener_count; $i++) {

			$question_response = $screen[$i];

			$data = array(
			   'question_name' => 'screen_'.$i.'',
			   'question_response' => $question_response,  
			   'submission_id' => $submission_id, 
			   'user_ip' => $userIP, 
			   'submission_time' => $submission_time
			);

			$this->db->insert('screener_survey', $data);

			unset($question_response);

		}

	}


	function register_user( $userIP, $submission_id ) {

		$data = array(
		   'submission_id' => $submission_id, 
		   'user_ip' => $userIP, 
		   'qualified' => 1,
		   'status' => 'new'
		);

		$this->db->insert('registration', $data);

	}

	function user_info( $subid ) {

		$sql = "SELECT submission_id, qualified, user_ip, status
		FROM registration  
		WHERE submission_id = '$subid' 
		/* AND qualified = 1 
		AND status = 'new' */
		LIMIT 1";

		$sqlResult = $this->db->query($sql);

		if( $sqlResult->num_rows ) {

		 	$sqlClear = $sqlResult->result();
		 	$sqlClear = $sqlClear[0];
		 	return $sqlClear;

		} else {

			return 'null';

		}
		

	}

	function user_registration_success( $sub_id, $userid ) {

		$data = array( 'status' => 'registered', 'qualified' => 0, 'userid' => $userid );
		
		$this->db->where('submission_id', $sub_id);
		$this->db->update('registration', $data); 

	}


}