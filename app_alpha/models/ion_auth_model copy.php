<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class admin_Nav extends CI_Model
{
	
	function getNavigation() {

		$sql = "SELECT id, link_name, link_url, active FROM  admin_nav WHERE active = 1";

		//$query = $this->db->query($sql);
		//echo "TEST";
		//var_dump($this->db->query($sql);

		//return $this->db->query($sql);
		return " TEST ";

	}


}
