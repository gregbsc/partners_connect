<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class scheduled_tasks extends CI_Model
{


	function upcomming() {

		$customSql = "SELECT * FROM scheduled_tasks WHERE run_time > NOW() ORDER BY run_time ASC";

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


}
