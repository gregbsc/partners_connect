<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class screener_model extends CI_Model
{

	function process_screen( $POST, $userIP, $submission_id, $submission_time ) {
		
		foreach ( $POST as $question => $response ) {

			$data_response = array(
				'question_name' => $question,
			    'question_response' => $response,
			    'submission_id' => $submission_id,
			    'user_ip' => $userIP,
			);
			
			$this->db->insert('screener_survey', $data_response); 

			unset($data_response);

		}

	}

	function register_user( $userIP, $submission_id, $qualified ) {
		
		$sql = "SELECT submission_id, qualified, user_ip, status
		FROM registration  
		WHERE submission_id = '$submission_id'";

		//using 5 as a unset or not applied value
		$expCondition = 5;

		$sqlResult = $this->db->query($sql);

		if( isset($sqlResult->num_rows) && $sqlResult->num_rows > 0 ) {

			$data = array(
			   'submission_id' => md5(time()), 
			   'user_ip' => $userIP, 
			   'qualified' => $qualified,
			   'status' => 'new',
			   'group_condition' => $expCondition);

		} else {

			$data = array(
			   'submission_id' => $submission_id, 
			   'user_ip' => $userIP, 
			   'qualified' => $qualified,
			   'status' => 'new',
			   'group_condition' => $expCondition);
			
		}

		$this->db->insert('registration', $data);

	}
	
	function user_info( $subid ) {

		$sql = "SELECT *
		FROM registration  
		WHERE submission_id = '$subid' 
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

		$data = array( 'status' => 'registered', 'userid' => $userid );
		
		$this->db->where('submission_id', $sub_id);
		$this->db->update('registration', $data); 

	}


}