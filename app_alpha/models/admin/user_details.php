<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user_details extends CI_Model
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

	function baseline( $subid ) {

		$this->db->select('*');
		$this->db->from('screener_survey');
		$this->db->where('submission_id', $subid);
		$query = $this->db->get();


		if( !empty($query)) {

			return $query->result();
			
		} else {
			return NULL;
		}

	}

	function update_initial_contact( $uid, $boolean ) {

		//boolean taking form as int ( 0 || 1 ) where 0 == false. 
		//initial contact can be set back to 0 if desired using this function

		if( !( $boolean == 1 || $boolean == 0 ) ) {
			$boolean = 0;
		}

		$data = array( 'initial_contact' => $boolean );
		$this->db->where('userid', $uid);
		$this->db->update('registration', $data); 

	}


}
