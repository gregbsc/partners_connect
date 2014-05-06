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

        	$this->load->model('users/user_info');
        	$this->user_details = $this->ion_auth->user()->row();
    		$this->user_id = $this->user_details->user_id;
    		
    	}

    }
	
	public function index()
	{	
		//VIEW BEING CALLED HERE
		$this->load->view('header');
			
		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			//boolean check if completed 
			$data['consent'] = $this->user_info->consent_status( $this->user_id );
			$data['user_info'] = $this->user_details;

			$user_progress = $this->user_info->details( $this->user_id );

			if( isset($user_progress->baseline ) && $user_progress->baseline == 1 ) {
				$data['schedule_sessions'] = '/user/schedule/';
			} else {
				$data['user_progress'] = $user_progress;
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

		$baseMax = 9;

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			//VIEW BEING CALLED HERE
			$this->load->view('header');
			$page_url = 'user/baseline?bid=';

			//if baseline page
			if($this->input->get('bid')) { 
				
				$currentPage = $this->input->get('bid');
				$percentComp = ($currentPage / $baseMax) * 100;
				
				$data['percentDone'] = '<div class="mtop50" style="width:100%;border:1px solid #ccc;height:30px"><div style="background-color:blue;width:'.$percentComp.'%;height:28px;"></div></div>';		

				if( $currentPage < $baseMax ) {
					$next_page = $currentPage + 1;
					$data['form_direction'] = $page_url.$next_page;
				} else { 
					//final submission case
					$data['form_direction'] = $page_url.'0';
				}

				$this->load->view('baseline/base_'.$this->input->get('bid').'', $data);

			} else {

				$percentComp = 1 / $baseMax * 100;
				$data['form_direction'] = $page_url.'2';
				$data['percentDone'] = '<div class="width:400px;border:1px solid #ccc;height:28px;"><div style="background-color:blue;width:'.$percentComp.'%;height:28px;"></div></div>';

				$this->load->view('baseline/base_1', $data);

			}
			
			//VIEW BEING CALLED HERE
			$this->load->view('footer');

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
				
				$reset_link = $this->site_url."user/update/password/?action=reset&account={$forgotten['identity']}&activecode={$forgotten['forgotten_password_code']}";

				$email_body = "To reset your email address go to the following link ".$reset_link."";

				//echo $reset_link;
				send_email($email_title, $email_type, $email_body, $forgotten['identity']);

				redirect("user/update/password?status=success", 'redirect');

			} else {

				redirect("user/update/password?status=failure", 'redirect');

			}

		} 

		if( $this->input->get('status') ) {

			if($this->input->get('status') == 'success') {

				$data['message'] = 'Instructions for reseting your password were sent to your email address.';

			} else {

				$data['message'] = 'There was an issue with reseting your password. Please contact rand.';

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

		//VIEW BEING CALLED HERE
		$this->load->view('header');
		//VIEW BEING CALLED HERE
		$this->load->view('user/change_password', $data);
		//VIEW BEING CALLED HERE
		$this->load->view('footer');


	}


}
// end if admin.php