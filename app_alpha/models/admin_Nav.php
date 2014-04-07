<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class admin_Nav extends CI_Model
{
	
	function getNavigation() {

		$sql = "SELECT id, link_name, link_url, active, orderByVal 
		FROM  admin_nav 
		WHERE active = 1 
		ORDER BY orderByVal ASC";

		$sqlResult = $this->db->query($sql);

		return $sqlResult->result();

	}


}
