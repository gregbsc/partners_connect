<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user_details extends CI_Model
{
	
	function submissions() {

		//$sql = "SELECT submission_id, qualified, user_ip, status, consent FROM  registration WHERE active = 1";

		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('status','new');
		$query = $this->db->get();

		if( !empty($query)) {
			return $query->result();
		} else {
			return NULL;
		}

	}

	function insert_details( $uid ) {

		$data = array(
		   'user_ip' =>  time() ,
		   'submission_id' => time() ,
		   'qualified' => '0' ,
		   'status' => 'registered',
		   'consent' => '0',
		   'userid' => $uid

		);

		$this->db->insert('registration', $data); 


	}

}
