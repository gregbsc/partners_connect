<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class personality extends CI_Model
{
	
	function exists( $uid ) {

		$this->db->select('uid');
		$this->db->from('personality');
		$this->db->where('uid', $uid);
		$query = $this->db->get();
		$cleanResult = $query->result();

	}

	function core( $uid ) {

		$this->db->select('*');
		$this->db->from('personality');
		$this->db->where('uid', $uid);
		$query = $this->db->get();
		$cleanResult = $query->result();

		if(is_array($cleanResult) && ( count($cleanResult) > 0 ) ) {
			return $cleanResult[0];
		}

		return NULL;

	}

	function build_personality( ) {

		// find relevant questions and build personality profile

	}

	function update_personality( $uid ) {

		// update a piece of users personality 		

	}


}