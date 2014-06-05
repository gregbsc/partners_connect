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

		//get user details...

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

	function consent_status( $uid ) {
		
		$this->db->select('consent');
		$this->db->from('registration');
		$this->db->where('userid', $uid );
		$query = $this->db->get();

		if( !empty($query) ) {

			$clean_result = $query->result();

			if(isset($clean_result[0])) {

				$clean_result = $clean_result[0];
				
				if($clean_result->consent == 1) {
					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		}
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

	function update_consent( $status_consent, $decline_reason, $uid ) {
		/* 
		0 == no submission
		1 == consented
		2 == did not consent
		*/
		$data = array('consent' => $status_consent, 'decline_notes' => $decline_reason );           
		$this->db->where('userid', $uid);
		$this->db->update('registration', $data);

	}

	function decline_reason( $sub_id, $decline_reason, $decline_array ) {

		$decline_array = json_encode($decline_array);

		$data = array('decline_notes' => $decline_reason, 'user_decline_options' => $decline_array );
		$this->db->where('submission_id', $sub_id);
		$this->db->update('registration', $data);
		
	}

	function declined_status( $sub_id, $status ) {

		$data = array('declined' => $status );           
		$this->db->where('submission_id', $sub_id);
		$this->db->update('registration', $data);

	}

}
