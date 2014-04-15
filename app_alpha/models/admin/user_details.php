<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user_details extends CI_Model
{
	
	function getNavigation() {

		//$sql = "SELECT submission_id, qualified, user_ip, status, consent FROM  registration WHERE active = 1";

		$this->db->select('*');
		$this->db->from('registration');
		$this->db->join('users', 'users.id = registration.userid');

		$query = $this->db->get();

		return $query;

	}


}
