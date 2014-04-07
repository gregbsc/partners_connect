<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class activeUsers extends CI_Model
{
	
	function getActiveUsers() {

		//table users_groups defines user permisions based off of the table groups. Admin group_id = 1, user group_id = 2. 
		$sql = "SELECT users.id, users.username, users.email, users_groups.user_id, users_groups.group_id 
		FROM users 
		INNER JOIN users_groups 
		ON users.id = users_groups.user_id
		WHERE users.active = 1  
		AND users_groups.group_id = 2";

		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();

	}

}