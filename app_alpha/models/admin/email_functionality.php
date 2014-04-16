<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class email_functionality extends CI_Model
{
	
	function history( $uid ) {

		$this->db->select('*');
		$this->db->where('user_id', $uid );

		$query = $this->db->get('email_history');

		$query = $query->result();

		return $query;

	}


}
