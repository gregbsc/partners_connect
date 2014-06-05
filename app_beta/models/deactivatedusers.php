<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class deactivatedUsers extends CI_Model
{
	
	function getDeactivated() {

		//table users_groups defines user permisions based off of the table groups. Admin group_id = 1, user group_id = 2. 
		//$sql = "SELECT users.id, users.username, users.email, users_groups.user_id, users_groups.group_id 
		$sql = "SELECT *
		FROM users 
			INNER JOIN users_groups 
			ON users.id = users_groups.user_id
		WHERE users.active = 0  
		AND users_groups.group_id = 2";

		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();

	}

	//from registration table
	function getNotElig() {

		$sql = "SELECT * FROM registration WHERE qualified = 2";
		$sqlResult = $this->db->query($sql);
		$clean_result = $sqlResult->result();

		return $clean_result;

	}

	//users who did not opt in but were qualified
	function getNotOptIn() {

		$sql = "SELECT * FROM registration WHERE qualified = 1 AND declined = 1";
		$sqlResult = $this->db->query($sql);
		$clean_result = $sqlResult->result();

		return $clean_result;

	}
	function notEligScreener( $sub_id ) {

		$sql = "SELECT * FROM screener_survey WHERE submission_id = '$sub_id' ";
		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();

	}

	function perm_delete($uid) {


		$sql = "SELECT submission_id, userid FROM registration WHERE userid = {$uid}";
		$sqlResult = $this->db->query($sql);
		$cleanResult = $sqlResult->result();

		if( !empty( $cleanResult ) && is_array( $cleanResult ) ) {

			if(isset($cleanResult[0]->userid) && isset($cleanResult[0]->submission_id)) {

				$this->db->delete('registration', array('userid' => $cleanResult[0]->userid)); 
				$this->db->delete('screener_survey', array('submission_id' => $cleanResult[0]->submission_id)); 
				// also remove baseline info and +++

			}

		}
		
		return 0;

	}

	function opted_out() {

		//table users_groups defines user permisions based off of the table groups. Admin group_id = 1, user group_id = 2. 
		$sql = "SELECT * 
		FROM users 
			INNER JOIN registration
			ON users.id = registration.userid
		WHERE registration.consent = 2";

		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();
			
	}

}