<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class user extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


    function __construct()
    {

        parent::__construct();   

        $this->site_url = $this->config->item('base_url');

        if( $this->ion_auth->logged_in() ) {

        	$this->load->model('users/process_baseline');
        	$this->load->model('users/user_info');
        	$this->user_details = $this->ion_auth->user()->row();
    		$this->user_id = $this->user_details->user_id;
    		$this->baseline_status = $this->process_baseline->baseline_progress( $this->user_id );
    		$this->active_baseline = $this->config->item('baseline_max_v1');
    	}

    }
	
	//this is currently set the default -- this is what the user see's when they first login
	public function index()
	{	

		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			//current baseline status
			$baseline_status = $this->baseline_status;
			$raw_next_int =  $baseline_status + 1;
			$base_prefix = "/user/baseline/";

			if( $baseline_status == 0 || $baseline_status == 1 ) {
				$return_base = $base_prefix.'1';
			} else if( $baseline_status <= $this->active_baseline ) {
				$next_int = $raw_next_int;
				$return_base = $base_prefix.$next_int;
			} else {
				$return_base = $base_prefix;
			}

			$data['return_base'] = $return_base;

			//boolean check if completed 
			$consent = $this->user_info->consent_status( $this->user_id );
			$data['consent'] = $consent;
			$data['user_info'] = $this->user_details;

			$user_progress = $this->user_info->details( $this->user_id );

			//once a user completes the baseline survey, they can schedule their sessions 
			if( isset( $user_progress->baseline ) && $user_progress->baseline == 1  && $consent == true) {
				
				$data['schedule_sessions'] = '/user/schedule/';

			} else {

				if( $user_progress->baseline == 0 ) {
					//this would be the case for a user whom has not completed 
					//the baseline survey AND has consented to the study
					$data['user_progress'] = $user_progress;
				} else {
					//this would be a case where an individual has not consented to the study
				}

			}

			$this->load->view('user/user_body', $data );

		} else {
			//VIEW BEING CALLED HERE
			$this->load->view('user/login');
		}

		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	public function consent() {
		
		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {
			
			$user_details = $this->ion_auth->user()->row();
			$this->load->model('users/user_info');
			$user_id = $user_details->user_id;

			//check make sure user id being submitted matches logged in, if not... nothing
			if( $this->input->post('user_id') && $this->input->post('consent_box') && ( $this->input->post('user_id') == $user_id )) {

				if($this->input->post('consent_box') == 1) {
					// 1 == consented
					$this->user_info->update_consent( 1 , $user_id);
				} else {
					// 2 == not consented
					$this->user_info->update_consent( 2 , $user_id);
				}

				redirect("user", 'redirect');

			}

			$data['user_id'] = $user_id;
			$this->load->view('user/consent', $data );

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('user/login');
			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		}


	}

	public function baseline() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			$baseMax = $this->active_baseline;

			//this is where baseline values are sent to db
			if( $_POST && ( $this->input->post('section') <= $baseMax ) && isset( $this->user_id ) ) { 

				$this->process_baseline->process( $baseline = $_POST, $this->user_id );

			} 

			//this is used multiple places, specifically for current page.
			$form_position = $this->uri->segment(3);

			$this->load->helper('form_building_helper');

			//this is the number of the last section submitted
			$baseline_status = $this->process_baseline->baseline_progress( $this->user_id );
			//this is the last submission section + 1, which should also be the current page a user would be one
			$raw_next_int =  $baseline_status + 1;
			//this would be the current page location based on the url + 1, or the next form location 
			$next_form_page = $form_position + 1;

			//update user status to baseline completed AND redirect to user login page when completed
			if( $baseline_status == $this->active_baseline ) {

				$this->process_baseline->complete_baseline( $this->user_id );
				//$this->process_baseline->random_condtion( $this->user_id );
				redirect('/user/','redirect');

			}

			//VIEW BEING CALLED HERE
			$this->load->view('header');
			$page_url = 'user/baseline/';

			//if baseline page
			if($this->uri->segment(3)) {
				
				$currentPage = $form_position;

				$percentComp = ($currentPage / $baseMax) * 100;

				// eek -- I need to move this to the view before completing.. and remove inline style..
				$data['percentDone'] = $percentComp;		

				//force a redirect if wrong link or user breaks flow
				//echo intval($currentPage) . " " . ( intval($baseline_status) + 1 );
				if( ( $currentPage != ( $baseline_status + 1 ) ) && ($currentPage != 1) ) {	
					$force_redirect = '/user/baseline/'.$raw_next_int;
					redirect($force_redirect,'redirect');
				} 

				if( $currentPage < $baseMax ) {
					$next_page = $raw_next_int + 1;
					$data['form_direction'] = $page_url.$next_form_page;
				} else { 
					//final submission case ... /random fallback
					$data['form_direction'] = $page_url.'1';
				}

				$this->load->view('baseline/'.$this->config->item('baseline_version').'/base_'.$currentPage.'', $data);

			} else {

				$percentComp = 1 / $baseMax * 100;
				$data['form_direction'] = $page_url.'2';
				$data['percentDone'] = $percentComp;

				//view called here
				$this->load->view('baseline/base_1', $data);

			}
			
			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else { 
			redirect('/user/login', 'redirect');
		}

	}

	public function login() {

		//VIEW BEING CALLED HERE
		$this->load->view('header');

		if( $this->input->post('login-name') && $this->input->post('login-pass') ) {
			$userID = $this->input->post('login-name');
			$userPassword = $this->input->post('login-pass');
			$remember = TRUE;
			$this->ion_auth->login($userID, $userPassword, $remember);
		}

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			redirect("user", 'redirect');

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('user/login');
		}
		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	public function update() {
		
		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			if($this->input->post('first_name') && $this->input->post('last_name') ) {

				$user = $this->ion_auth->user()->row();

				$update['first_name'] = $this->input->post('first_name');
				$update['last_name'] = $this->input->post('last_name');

				if( $this->input->post('phone') ) {
					$update['phone'] = $this->input->post('phone');
				} //else {
					//$update['phone'] = ' ';
				//}
				
				if( isset($user->id) ) {
					$this->ion_auth->update( $user->id, $update);
				}

				redirect('user/update','refresh');

			}
			
			$data['user_info'] = $this->user_details;

			//VIEW BEING CALLED HERE
			$this->load->view('header');
			//VIEW BEING CALLED HERE
			$this->load->view('user/user_details', $data);
			//VIEW BEING CALLED HERE
			$this->load->view('footer');			


		} else {

			redirect("user/login", 'redirect');

		}

	}

	public function success() {

		//VIEW BEING CALLED HERE
		$this->load->view('header');
		$this->load->view('success');
		$this->load->view('footer');

	}

	public function password() {

		$data['initialize'] = true;
		$this->load->helper('email_helper');
		$this->load->library('email');

		if( $this->input->get('account') && $this->input->get('activecode') ) {

			$data['message'] = "Enter your new password below.";
			$data['password_post_url'] = $this->site_url."/user/update/password/?action=reset&account={$this->input->get('account')}&activecode={$this->input->get('activecode')}";

			//print_r($data['password_post_url']);

			if( $this->input->post('password') ) {

				$password_complete = $this->ion_auth->forgotten_password_complete( $this->input->get('activecode'), $this->input->post('password') );

				if(isset($password_complete)) {
					redirect("user/login/?message=Password+change+successful", 'redirect');				
				}

			}

		}

		if( $this->input->post('uemail') ) {

			$forgotten = $this->ion_auth->forgotten_password( $this->input->post('uemail') );

			if( isset( $forgotten['identity'] ) && isset( $forgotten['forgotten_password_code'] ) ) {

				$title = "Password Reset";
				$email_type = "Password Reset";

				$site_url = base_url();
				$email_title = "Password reset";
				$reset_link = $site_url."user/update/password/?action=reset&account={$forgotten['identity']}&activecode={$forgotten['forgotten_password_code']}";
				$email_body = "To reset your email address go to the following link ".$reset_link;

				$this->email->from($this->config->item('rand_email'), 'Partners Connect');
				$this->email->to( $forgotten['identity'] ); 
				$this->email->subject($email_title);
				$this->email->message($email_body);	

				$this->email->send();
				//send_email($email_title, $email_type, $email_body, $forgotten['identity']);

				redirect("user/update/password?status=success", 'redirect');

			} else {

				redirect("user/update/password?status=failure", 'redirect');

			}

		} 

		if( $this->input->get('status') ) {

			if($this->input->get('status') == 'success') {

				$data['message'] = 'Instructions for reseting your password were sent to your email address.';

			} else {

				$data['message'] = 'There was an issue with reseting your password. Please contact Rand.';

			}

		}

		//VIEW BEING CALLED HERE
		$this->load->view('header');
		//VIEW BEING CALLED HERE
		$this->load->view('user/change_password', $data);
		//VIEW BEING CALLED HERE
		$this->load->view('footer');

	}

	public function schedule() {

		$data['initiatilize'] = true;

		//VIEW BEING CALLED HERE
		$this->load->view('header');
		//VIEW BEING CALLED HERE
		$this->load->view('user/schedule', $data);
		//VIEW BEING CALLED HERE
		$this->load->view('footer');


	}


}
// end if admin.php