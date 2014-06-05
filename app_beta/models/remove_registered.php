<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class remove_registered extends CI_Model
{
	
	function all() {

		$sql = "DELETE FROM registration WHERE status = 'new'";
		$sqlResult = $this->db->query($sql);

		return $sqlResult;

	}


	function individual( $uid ) {
		
		$sql = "DELETE FROM registration WHERE status = 'new' AND userid = {$uid} ";
		$sqlResult = $this->db->query($sql);

		return $sqlResult;

	}



}