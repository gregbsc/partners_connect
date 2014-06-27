<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class scheduled_tasks extends CI_Model
{

	//this is used from within the admin area only // users have their own version of the model

	function upcomming() {

		$customSql = "SELECT * FROM scheduled_tasks WHERE run_time > NOW() ORDER BY run_time ASC";

		$sqlResult = $this->db->query( $customSql );

		$cleanResult = $sqlResult->result();
		
		return $cleanResult;

	}

	function completed() {

		$customSql = "SELECT * FROM scheduled_tasks WHERE completed = 1 ORDER BY run_time ASC";

		$sqlResult = $this->db->query( $customSql );

		$cleanResult = $sqlResult->result();
		
		return $cleanResult;	
	}

	function fetch_time_lapsed_taks() {

		$customSql = "SELECT * FROM scheduled_tasks WHERE run_time < NOW() ORDER BY run_time ASC";

		$sqlResult = $this->db->query( $customSql );

		$cleanResult = $sqlResult->result();
		
		return $cleanResult;

	}

	function complete_process($uid, $id) {

		$data = array( 'completed' => 1 );
		$this->db->where('id', $id);
		$this->db->where('uid', $uid);
		$this->db->update('scheduled_tasks', $data);

	}


}
