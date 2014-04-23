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
			$data['user_progress'] = $this->user_info->details( $this->user_id );
			

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
			$this->load->view('footer');

		}


	}

	public function baseline() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			//VIEW BEING CALLED HERE
			$this->load->view('header');

			$this->load->view('user/baseline');

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

				if($this->input->post('phone')) {
					$update['phone'] = $this->input->post('phone');
				} else {
					$update['phone'] = ' ';
				}
				
				if( isset($user->id) ) {
					$this->ion_auth->update( $user->id, $update);
				}

				redirect('user/update','refresh');

			}
			
			//VIEW BEING CALLED HERE
			$this->load->view('header');

			$data['user_info'] = $this->user_details;

			//VIEW BEING CALLED HERE
			$this->load->view('user/user_details', $data);	

			//VIEW BEING CALLED HERE
			$this->load->view('footer');			


		} else {

			redirect("user/login", 'redirect');

		}

	}
	
}

// end if admin.php