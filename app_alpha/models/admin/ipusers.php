<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class ipusers extends CI_Model
{
	
	function all() {

		$this->db->select('*');
		$this->db->from('registration');
		$query = $this->db->get();

		if( !empty($query)) {
			return $query->result();
		} else {
			return NULL;
		}

	}

	function clearIp($ipAddress) {

		$data = array('user_ip' => '0.0.0.0');

		$this->db->where('user_ip', $ipAddress);
		$this->db->update('registration', $data); 

	}

}
