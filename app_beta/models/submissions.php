<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class submissions extends CI_Model
{
	
	function newSubmissions() {

		$sql = "SELECT question_name, question_response, submission_id, user_ip
		FROM  admin_nav 
		WHERE new = 1 
		ORDER BY orderByVal ASC";

		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();

	}

	function allSubmissions() {

		$sql = "SELECT question_name, question_response, submission_id, user_ip
		FROM  screener_survey 
		WHERE new = 1 
		ORDER BY orderByVal ASC";

		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();

	}


}
