<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class activeUsers extends CI_Model
{
	
	function getActiveUsers() {

		// selecting all because these values may change in the future, and there should be little traffic in the admin area, not much change in terms of requests
		$sql = "SELECT DISTINCT *
		FROM users 
			INNER JOIN users_groups 
				ON users.id = users_groups.user_id 
			INNER JOIN registration
				ON registration.userid = users.id 
		WHERE users.active = 1 
		AND users_groups.group_id = 2"; 

		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();

	}

}