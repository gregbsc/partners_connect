<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class signup_ip extends CI_Model
{
	
	function getIpRecord() {

		$userIP = $_SERVER['REMOTE_ADDR'];

		$sql = "SELECT user_ip 
		FROM screener_survey
		WHERE user_ip = '$userIP' ";

		$sqlResult = $this->db->query($sql);
		return $sqlResult->num_rows;
		

	}


}
