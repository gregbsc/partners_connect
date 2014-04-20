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

    	
    }
	
	public function index()
	{	

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {

			$this->load->model('users/user_info');

			//VIEW BEING CALLED HERE
			$this->load->view('header');
			$user_details = $this->ion_auth->user()->row();

			$data['user_info'] = $user_details;

			$data['user_progress'] = $this->user_info->details( $user_details->user_id );

			$this->load->view('user_body', $data );

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('user/login');

		}


	}

	public function consent() {

		if( $this->ion_auth->logged_in() && $this->ion_auth->in_group("members") ) {
			
			$user_details = $this->ion_auth->user()->row();
			$this->load->model('users/user_info');
			$user_id = $user_details->user_id;

			//check make sure user id being submitted matches logged in, if not... nothing
			if( $this->input->post('user_id') && $this->input->post('consent_box') && ( $this->input->post('user_id') == $user_id )) {

				if($this->input->post('consent_box') == "consent") {
					// 1 == consented
					$this->user_info->updat_consent(1, $user_id);

				} else {
					// 2 == not consented
					$this->user_info->updat_consent(2, $user_id);
				}

				redirect("user", 'redirect');

			}


			//VIEW BEING CALLED HERE
			$this->load->view('header');

			//$data['user_info'] = $user_details;

			//$data['user_progress'] = $this->user_info->details( $user_details->user_id );
			$data['user_id'] = $user_id;
			$this->load->view('user/consent', $data );

			//VIEW BEING CALLED HERE
			$this->load->view('footer');

		} else {

			//VIEW BEING CALLED HERE
			$this->load->view('user/login');

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
	
}

// end if admin.php