<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user_info extends CI_Model
{
	
	function subid( $uid ) {

		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('userid', $uid);
		$query = $this->db->get();

		if( !empty($query)) {
			return $query->result();
		} else {
			return NULL;
		}

	}

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

	function details( $uid ) {

		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where('userid', $uid );
		$query = $this->db->get();


		if( !empty($query) ) {

			$clean_result = $query->result();

			if(isset($clean_result[0])) {

				$clean_result = $clean_result[0];
				return $clean_result;

			} else {

				return NULL;

			}
			
		} else {

			return NULL;

		}


	} // end details

	function updat_consent( $status_consent, $uid ) {

		/* 
		0 == no submission
		1 == consented
		2 == did not consent
		*/

		$data = array('consent' => $status_consent );           
		$this->db->where('userid', $uid);
		$this->db->update('registration', $data);

	}

}
