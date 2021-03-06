<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class process_baseline extends CI_Model
{


	function process( $baseline_section, $uid ) {

		$section_id = $baseline_section['section'];

		foreach ( $baseline_section as $question => $response ) {

			if($question != "section") {

				if(is_array($response)) {

					$array_response = json_encode($response);

					$data_response = array(
						'uid' => $uid,
					    'question' => $question,
					    'response' => $array_response,
					    //'date' => time(),
					    'section' => $section_id
					);
					
				} else {

					$data_response = array(
						'uid' => $uid,
					    'question' => $question,
					    'response' => $response,
					    //'date' => time(),
					    'section' => $section_id
					);

				}
				
				$this->db->insert('baseline_results', $data_response); 

				unset($data_response);

			}

		}

	} // end of process();


	function baseline_progress( $uid ) {

		$sql = "SELECT uid, section 
				FROM baseline_results 
				WHERE uid = {$uid} 
				ORDER BY section 
				DESC LIMIT 1";

		$sqlResult = $this->db->query( $sql );

		$cleanResult = $sqlResult->result();
		
		if(empty($cleanResult)) {
			$recent = 0;
		} else {
			$recent = $cleanResult[0]->section;
		}		

		return $recent;

	}

	function complete_baseline( $uid ) {

		$expCondition = rand(0,1);
		$data = array( 'baseline' => 1, 'group_condition' => $expCondition );
		$this->db->where('userid', $uid);
		$this->db->update('registration', $data); 

	}


}
